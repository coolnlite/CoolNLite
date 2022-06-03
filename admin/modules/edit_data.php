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

   isset($_POST['id_news']) && isset($_POST['thumnail_old']) &&
   isset($_POST['url']) && isset($_POST['title']) 
   && isset($_FILES['thumnail']) && isset($_POST['description'])
   && isset($_POST['content']) && isset($_POST['radio-stacked'] )
)
{
$id_news = mysqli_real_escape_string($conn, $_POST['id_news']);
$time = date('Y-m-d H:i:s');

if($_FILES['thumnail']['error'] > 0){
    
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

    $thumnail_old = $_POST['thumnail_old'];
    $link = '../..';
    $file = $link.$thumnail_old;
    unlink($file);

    $sql = "UPDATE `news` SET `thumnail` = '$thumnail', `time` = '$time' WHERE `id` = '$id_news'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo json_encode(array(
        'image' => 1,
        'message' => 'Thêm hình ảnh thành công thành công'
    ));
    exit();
    }else{
        echo json_encode(array(
        'image' => 0,
        'message' => 'Thêm hình ảnh thất bại'
        ));
        exit();
    }
}else{
    echo json_encode(array(
        'image' => 0,
        'message' => 'Thêm hình ảnh thất bại'
        ));
        exit();
}

}//Kiểm tra hình ảnh có tồn tại không
//Phần cập nhật bài viết trừ ảnh
$url = mysqli_real_escape_string($conn, $_POST['url']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$radio = mysqli_real_escape_string($conn, $_POST['radio-stacked']);

$sql = "UPDATE `news` SET `url` = '$url', `title` = '$title', `description` = '$description',
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

}


//Chỉnh sửa seo chính cho bài viết
if(!empty($_POST['id_news']) && !empty($_POST['id_tag'])&& !empty($_POST['title']) && !empty($_POST['img-tw-old']) &&
!empty($_POST['description']) && !empty($_POST['keyword']) && !empty($_POST['link-fb']) &&
!empty($_POST['img-fb-old']) && !empty($_POST['title-fb']) && !empty($_POST['description-fb']) && 
!empty($_POST['keyword-fb']) && !empty($_POST['title-tw']) && !empty($_POST['description-tw'])){
    
    $id_tag = mysqli_real_escape_string($conn, $_POST['id_tag']);
    $id_news = mysqli_real_escape_string($conn, $_POST['id_news']);


if(!empty($_FILES['img-fb'])){
    /* Nhận tên file */
 $filename1 = $_FILES['img-fb']['name'];
 /* Nhận kích thước file */
 $filesize1 = $_FILES['img-fb']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp1 = time();

 /* Gắn timestamp vào tên file*/
 $path1 = $timestamp1.$filename1;

 /* Location */
 $uploadPath1 = "../../uploads/seo_news";

 $tar_get1 = "/uploads/seo_news";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img-fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "1000" || $height1 > "1000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 1000px X 1000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes1 = array("jpg","jpeg","png","bmp");
 $fileType1 = substr($path1,strrpos($path1,".") + 1);

 if(!in_array($fileType1,$validTypes1) || $filesize1 > 2 * 1024 * 1024){
    echo json_encode(array(
        'status' => 0,
        'message' => 'Vui lòng chọn file có đuôi là jpg, jpeg, png, bmp'
    ));
    exit();
}
 if($filesize1 > 2 * 1024 * 1024){
     echo json_encode(array(
         'status' => 0,
         'messaage' => 'Vui lòng chọn ảnh có dung lượng nhỏ hơn hoặc bằng 2MB'
     ));
     exit();
 }

 //Check xem ảnh đã tồn tại hay chưa nếu không thì đổi tên
 $num1 = 1;
 $fileName1 = substr($path1,0,strrpos($path1,"."));
 $fileName1 = md5($fileName1);
 while(file_exists($uploadPath1 . '/' . $fileName1 . '.' . $fileType1)){
     $fileName1 = $fileName1 . "(". $num1 .")";
     $num1 ++;
 }
 $path1 = $fileName1 . '.' . $fileType1;

 $resultFB = move_uploaded_file($_FILES['img-fb']['tmp_name'],$uploadPath1 . '/' .$path1);
 if($resultFB){
    $img_fb_old = $_POST['img-fb-old'];
    $link_fb = '../..';
    $file_fb = $link_fb.$img_fb_old;
    unlink($file_fb);

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_news` SET `img_fb` = '$img_fb' WHERE id = $id_tag AND id_news = $id_news";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img-tw'])){
    /* Nhận tên file */
 $filename2 = $_FILES['img-tw']['name'];
 /* Nhận kích thước file */
 $filesize2 = $_FILES['img-tw']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp2 = time();

 /* Gắn timestamp vào tên file*/
 $path2 = $timestamp2.$filename2;

 /* Location */
 $uploadPath2 = "../../uploads/seo_news";

 $tar_get2 = "/uploads/seo_news";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size2 = $_FILES["img-tw"]['tmp_name'];
 list($width2, $height2) = getimagesize($size2);

 if($width2 > "1000" || $height2 > "1000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 1000px X 1000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes2 = array("jpg","jpeg","png","bmp");
 $fileType2 = substr($path2,strrpos($path2,".") + 1);

 if(!in_array($fileType2,$validTypes2) || $filesize2 > 2 * 1024 * 1024){
    echo json_encode(array(
        'status' => 0,
        'message' => 'Vui lòng chọn file có đuôi là jpg, jpeg, png, bmp'
    ));
    exit();
}
 if($filesize2 > 2 * 1024 * 1024){
     echo json_encode(array(
         'status' => 0,
         'messaage' => 'Vui lòng chọn ảnh có dung lượng nhỏ hơn hoặc bằng 2MB'
     ));
     exit();
 }

 //Check xem ảnh đã tồn tại hay chưa nếu không thì đổi tên
 $num2 = 1;
 $fileName2 = substr($path2,0,strrpos($path2,"."));
 $fileName2 = md5($fileName2);
 while(file_exists($uploadPath2 . '/' . $fileName2 . '.' . $fileType2)){
     $fileName2 = $fileName2 . "(". $num2 .")";
     $num2 ++;
 }
    $path2 = $fileName2 . '.' . $fileType2;
    $resultTW =  move_uploaded_file($_FILES['img-tw']['tmp_name'],$uploadPath2 . '/' .$path2);
    if($resultTW){
        $img_tw_old = $_POST['img-tw-old'];
        $link_tw = '../..';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_news` SET `img_tw` = '$img_tw' WHERE id = $id_tag AND id_news = $id_news";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $id_news = mysqli_real_escape_string($conn, $_POST['id_news']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link-fb']);
        $title_fb = mysqli_real_escape_string($conn, $_POST['title-fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description-fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword-fb']);
        $title_tw = mysqli_real_escape_string($conn, $_POST['title-tw']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description-tw']);

        $sql = "";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Thêm SEO cho bài viết thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Thêm SEO cho bài viết thất bại'
            ));
            exit();
        }
    }
 ?>