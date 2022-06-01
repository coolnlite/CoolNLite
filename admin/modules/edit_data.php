<?php
 require_once('../../config/config.php');
 require_once('../../config/dbhelper.php');

if(isset($_POST['id_key']) && isset($_POST['name_key'])){
    $id_key = $_POST['id_key'];
    $name_key = mysqli_real_escape_string($conn, $_POST['name_key']);
    $time = date('Y-m-d H:i:s');

    $sql = "UPDATE `keyword` SET `name` = '$name_key', `time` = '$time' WHERE `id` = '$id_key'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        echo json_encode(array(
            'status' => 1,
            'message' => 'Cập nhật từ khóa thành công'
        ));
        exit();
    }else{
        echo json_encode(array(
            'status' => 0,
            'message' => 'Cập nhật từ khóa thất bại'
        ));
        exit();
    }
}

//Chỉnh sửa bài viết
if(
   isset($_POST['id_news']) && 
   isset($_POST['url']) && isset($_POST['title']) 
   && isset($_FILES['thumnail']) && isset($_POST['description'])
   && isset($_POST['content']) && isset($_POST['radio-stacked'] )
)
{
$id_news = mysqli_real_escape_string($conn, $_POST['id_news']);
$url = mysqli_real_escape_string($conn, $_POST['url']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$radio = mysqli_real_escape_string($conn, $_POST['radio-stacked']);
$time = date('Y-m-d H:i:s');

$sql = "UPDATE `news` SET `name` = '$url', `title` = '$title', `description` = '$description',
`content` = '$content', `status` = '$radio', `time` = '$time'  WHERE `id` = '$id_news'";
$result = mysqli_query($conn,$sql);

if($result == true){
    echo json_encode(array(
        'status' => 1,
        'message' => 'Cập nhật bài viết thành công'
    ));
    exit();
}else{
    echo json_encode(array(
        'status' => 0,
        'message' => 'Cập nhật bài viết thất bại'
    ));
}
if($_FILES['thumnail']['error'] > 0){
    return null;
}else{
     /* Nhận tên file */
 $filename = $_FILES['thumnail']['name'];
 /* Nhận kích thước file */
 $filesize = $_FILES['thumnail']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp = time();

 /* Gắn timestamp vào tên file*/
 $path = $timestamp.$filename;

 /* Location */
 $uploadPath = "../../uploads/";

 $tar_get = "/uploads";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size = $_FILES["thumnail"]['tmp_name'];
 list($width, $height) = getimagesize($size);

 if($width > "1000" || $height > "1000") {
     echo json_encode(array(
         'image' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 1000px X 1000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes = array("jpg","jpeg","png","bmp");
 $fileType = substr($path,strrpos($path,".") + 1);

 if(!in_array($fileType,$validTypes) || $filesize > 2 * 1024 * 1024){
    echo json_encode(array(
        'image' => 0,
        'message' => 'Vui lòng chọn file có đuôi là jpg, jpeg, png, bmp'
    ));
    exit();
}
 if($filesize > 2 * 1024 * 1024){
     echo json_encode(array(
         'image' => 0,
         'messaage' => 'Vui lòng chọn ảnh có dung lượng nhỏ hơn hoặc bằng 2MB'
     ));
     exit();
 }

 //Check xem ảnh đã tồn tại hay chưa nếu không thì đổi tên
 $num = 1;
 $fileName = substr($path,0,strrpos($path,"."));
 $fileName = md5($fileName);
 while(file_exists($uploadPath . '/' . $fileName . '.' . $fileType)){
     $fileName = $fileName . "(". $num .")";
     $num ++;
 }
 $path = $fileName . '.' . $fileType;

if(move_uploaded_file($_FILES['thumnail']['tmp_name'],$uploadPath . '/' .$path)){
    $thumnail =  $tar_get . '/' .$path;

    $sql = "UPDATE `news` SET `thumnail` = '$thumnail', `time` = '$time' WHERE `id` = '$id_news'";

    if($result){
        echo json_encode(array(
        'status' => 1,
        'message' => 'Thêm hình ảnh thành công thành công'
    ));
    exit();
    }else{
        echo json_encode(array(
        'status' => 0,
        'message' => 'Thêm hình ảnh thất bại'
        ));
        exit();
    }
}else{
    echo json_encode(array(
        'status' => 0,
        'message' => 'Thêm hình ảnh thất bại'
        ));
        exit();
}
}

}

 ?>