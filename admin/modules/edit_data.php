<?php
 require_once('../../config/config.php');
 require_once('../../config/dbhelper.php');

//Chỉnh sửa từ khóa
date_default_timezone_set('Asia/Ho_Chi_Minh');

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

   !empty($_POST['id_news']) && !empty($_POST['thumnail_old']) &&
   !empty($_POST['url']) && !empty($_POST['title']) 
   && isset($_FILES['thumnail']) && !empty($_POST['description'])
   && !empty($_POST['content']) && isset($_POST['radio-stacked'] )
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
 $uploadPath = "../../uploads/posts";

 $tar_get = "uploads/posts";
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
 $validTypes = array("jpg","jpeg","png","bmp","gif");
 $fileType = substr($path,strrpos($path,".") + 1);

 if(!in_array($fileType,$validTypes)){
    echo json_encode(array(
        'image' => 0,
        'message' => 'Vui lòng chọn file có đuôi là jpg, jpeg, png, bmp, gif'
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
    $link = '../../';
    $file = $link.$thumnail_old;
    unlink($file);

    $sql = "UPDATE `news` SET `thumnail` = '$thumnail' WHERE `id` = '$id_news'";
    $result = mysqli_query($conn,$sql);
}

}//Kiểm tra hình ảnh có tồn tại không
//Phần cập nhật bài viết trừ ảnh
$url = mysqli_real_escape_string($conn, $_POST['url']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$radio = mysqli_real_escape_string($conn, $_POST['radio-stacked']);
$time = date('Y-m-d H:i:s');

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
if(!empty($_POST['id_news']) && !empty($_POST['id_tag']) && !empty($_POST['img-tw-old']) &&
!empty($_POST['description']) && !empty($_POST['keyword']) && !empty($_POST['link-fb']) &&
!empty($_POST['img-fb-old']) && !empty($_POST['title-fb']) && !empty($_POST['description-fb']) && 
!empty($_POST['keyword-fb']) && !empty($_POST['title-tw']) && !empty($_POST['description-tw'])){
    
    $id_tag = mysqli_real_escape_string($conn, $_POST['id_tag']);
    $id_news = mysqli_real_escape_string($conn, $_POST['id_news']);


if(!empty($_FILES['img-fb']) && $_FILES['img-fb']['error'] == 0){
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

 $tar_get1 = "uploads/seo_news";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img-fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "2000" || $height1 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
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
    $link_fb = '../../';
    $file_fb = $link_fb.$img_fb_old;
    unlink($file_fb);

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_news` SET `img_fb` = '$img_fb' WHERE id = $id_tag AND id_news = $id_news";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img-tw']) && $_FILES['img-tw']['error'] == 0){
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

 $tar_get2 = "uploads/seo_news";
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
        $link_tw = '../../';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_news` SET `img_tw` = '$img_tw' WHERE id = $id_tag AND id_news = $id_news";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link-fb']);
        $title_fb = mysqli_real_escape_string($conn, $_POST['title-fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description-fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword-fb']);
        $title_tw = mysqli_real_escape_string($conn, $_POST['title-tw']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description-tw']);

        $sql = "UPDATE `seo_news` SET `description` = '$description',
        `keyword` = '$keyword',`link_fb` = '$link_fb', `title_fb` = '$title_fb', 
        `description_fb` = '$description_fb',`keyword_fb` = '$keyword_fb',
        `title_tw` = '$title_tw',`description_tw` = '$description_tw'
        WHERE id = $id_tag AND id_news = $id_news";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Chỉnh sửa SEO cho bài viết thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Chỉnh sửa SEO cho bài viết thất bại'
            ));
            exit();
        }
    }

    //Chỉnh sửa đại lý
if(
    !empty($_POST['id-agency']) && !empty($_POST['img-old']) && !empty($_POST['edit-name'])
     && !empty($_POST['edit-address']) && !empty($_POST['edit-phone'])
 )
 {
 $id_agency = mysqli_real_escape_string($conn, $_POST['id-agency']);
 
 if($_FILES['edit-img']['error'] > 0){
     
 }else{
 /* Nhận tên file */
  $filename = $_FILES['edit-img']['name'];
 
  /* Nhận kích thước file */
  $filesize = $_FILES['edit-img']['size'];
 
  /* Thêm tên file bằng timestamp*/
  $timestamp = time();
 
  /* Gắn timestamp vào tên file*/
  $path = $timestamp.$filename;
 
  /* Location */
  $uploadPath = "../../uploads/agency";
 
  $tar_get = "uploads/agency";
  /* Upload file */
  //Kiểm tra kích thước ảnh trước khi upload
  $size = $_FILES["edit-img"]['tmp_name'];
  list($width, $height) = getimagesize($size);
 
  if($width > "2000" || $height > "2000") {
      echo json_encode(array(
          'status' => 0,
          'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
      ));
      exit();
  }
  //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
  $validTypes = array("jpg","jpeg","png","bmp");
  $fileType = substr($path,strrpos($path,".") + 1);
 
  if(!in_array($fileType,$validTypes)){
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn file có đuôi là jpg, jpeg, png, bmp'
     ));
     exit();
 }
  if($filesize > 2 * 1024 * 1024){
      echo json_encode(array(
          'status' => 0,
          'message' => 'Vui lòng chọn ảnh có dung lượng nhỏ hơn hoặc bằng 2MB'
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
 
 if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadPath . '/' .$path)){
     $img =  $tar_get . '/' .$path;
 
     $img_old = $_POST['img-old'];
     $link = '../../';
     $file = $link.$img_old;
     unlink($file);
 
     $sql = "UPDATE `agency` SET `img` = '$img' WHERE `id` = '$id_agency'";
     $result = mysqli_query($conn,$sql);
 }
 
 }//Kiểm tra hình ảnh có tồn tại không
 //Phần cập nhật bài viết trừ ảnh
 $name = mysqli_real_escape_string($conn, $_POST['edit-name']);
 $address = mysqli_real_escape_string($conn, $_POST['edit-address']);
 $phone = mysqli_real_escape_string($conn, $_POST['edit-phone']);
 $time = date('Y-m-d H:i:s');

 $sql = "UPDATE `agency` SET `name` = '$name',
 `address` = '$address', `phone` = '$phone', `time` = '$time'  WHERE `id` = '$id_agency'";
 $result = mysqli_query($conn,$sql);
 
 if($result == true){
     echo json_encode(array(
         'status' => 1,
         'message' => 'Cập nhật đại lý thành công'
     ));
     exit();
 }else{
     echo json_encode(array(
         'status' => 0,
         'message' => 'Cập nhật đại lý thất bại'
     ));
 }
 
 }

 //Cập nhật hình đại diện
if(
   isset($_FILES['image']) && !empty($_FILES['image']) &&
   isset($_POST['image_old']) && !empty($_POST['image_old'])
   && isset($_POST['id_users']) && !empty($_POST['id_users'])
)
{
/* Nhận tên file */
 $filename = $_FILES['image']['name'];

 /* Nhận kích thước file */
 $filesize = $_FILES['image']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp = time();

 /* Gắn timestamp vào tên file*/
 $path = $timestamp.$filename;

 /* Location */
 $uploadPath = "../../uploads/users";

 $tar_get = "uploads/users";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size = $_FILES["image"]['tmp_name'];
 list($width, $height) = getimagesize($size);

 if($width > "2000" || $height > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes = array("jpg","jpeg","png","bmp","gif");
 $fileType = substr($path,strrpos($path,".") + 1);

 if(!in_array($fileType,$validTypes)){
    echo json_encode(array(
        'status' => 0,
        'message' => 'Vui lòng chọn file có đuôi là jpg, jpeg, png, bmp, gif'
    ));
    exit();
}
 if($filesize > 2 * 1024 * 1024){
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có dung lượng nhỏ hơn hoặc bằng 2MB'
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

if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadPath . '/' .$path)){
    $image =  $tar_get . '/' .$path;

    $image_old = $_POST['image_old'];
    $link = '../../';
    $file = $link.$image_old;
    unlink($file);

    $id_users = $_POST['id_users'];
    $sql = "UPDATE `users` SET `image` = '$image' WHERE `id` = '$id_users'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo json_encode(array(
            'status' => 1,
            'message' => 'Cập nhật ảnh đại diện thành công'
        ));
        exit();
    }else{
        echo json_encode(array(
            'status' => 0,
            'message' => 'Cập nhật ảnh đại diện thất bại'
        ));
        exit();
    }
}

}
//Chỉnh sửa thông tin người dùng
if
(!empty($_POST['id_users']) && !empty($_POST['full_name_edit']))
{
    $id_users = mysqli_real_escape_string($conn, $_POST['id_users']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name_edit']);
  
    $sql = "UPDATE `users` SET `full_name` = '$full_name' WHERE `id` = '$id_users'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        echo json_encode(array(
            'status' => 1,
            'message' => 'Cập nhật thông tin thành công'
        ));
        exit();
    }else{
        echo json_encode(array(
            'status' => 0,
            'message' => 'Cập nhật thông tin thất bại'
        ));
        exit();
    }
}

if
(isset($_POST['status']) && !empty($_POST['id_users']))
{
    $id_users = mysqli_real_escape_string($conn, $_POST['id_users']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
  
    $sql = "UPDATE `users` SET `status` = '$status' WHERE `id` = '$id_users'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        echo json_encode(array(
            'status' => 1,
            'message' => 'Cập nhật thông tin thành công'
        ));
        exit();
    }else{
        echo json_encode(array(
            'status' => 0,
            'message' => 'Cập nhật thông tin thất bại'
        ));
        exit();
    }
}

//Chỉnh sửa seo home
if(!empty($_POST['id_pages_home']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
&& !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['title_fb']) &&
 !empty($_POST['description_fb']) && !empty($_POST['keyword_fb']) && !empty($_POST['title_tw']) 
 && !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
    
    $id_pages = mysqli_real_escape_string($conn, $_POST['id_pages_home']);

if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
    /* Nhận tên file */
 $filename1 = $_FILES['img_fb']['name'];
 /* Nhận kích thước file */
 $filesize1 = $_FILES['img_fb']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp1 = time();

 /* Gắn timestamp vào tên file*/
 $path1 = $timestamp1.$filename1;

 /* Location */
 $uploadPath1 = "../../uploads/seo_pages";

 $tar_get1 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img_fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "2000" || $height1 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes1 = array("jpg","jpeg","png","bmp");
 $fileType1 = substr($path1,strrpos($path1,".") + 1);

 if(!in_array($fileType1,$validTypes1)){
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

 $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
 if($resultFB){
    if($_POST['img_fb_old'] != ''){
        $img_fb_old = $_POST['img_fb_old'];
        $link_fb = '../../';
        $file_fb = $link_fb.$img_fb_old;
        unlink($file_fb);
    }

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
    /* Nhận tên file */
 $filename2 = $_FILES['img_tw']['name'];
 /* Nhận kích thước file */
 $filesize2 = $_FILES['img_tw']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp2 = time();

 /* Gắn timestamp vào tên file*/
 $path2 = $timestamp2.$filename2;

 /* Location */
 $uploadPath2 = "../../uploads/seo_pages";

 $tar_get2 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size2 = $_FILES["img_tw"]['tmp_name'];
 list($width2, $height2) = getimagesize($size2);

 if($width2 > "2000" || $height2 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes2 = array("jpg","jpeg","png","bmp");
 $fileType2 = substr($path2,strrpos($path2,".") + 1);

 if(!in_array($fileType2,$validTypes2)){
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
    $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
    if($resultTW){
       if($_POST['img_tw_old'] != ''){
        $img_tw_old = $_POST['img_tw_old'];
        $link_tw = '../../';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);
       }

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
        $title_fb = mysqli_real_escape_string($conn, $_POST['title_fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
        $title_tw = mysqli_real_escape_string($conn, $_POST['title_tw']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);

        $sql = "UPDATE `seo_pages` SET `title` = '$title', `description` = '$description',
        `keyword` = '$keyword',`link_fb` = '$link_fb', `title_fb` = '$title_fb', 
        `description_fb` = '$description_fb',`keyword_fb` = '$keyword_fb',
        `title_tw` = '$title_tw',`description_tw` = '$description_tw'
        WHERE `id` = $id_pages";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Chỉnh sửa SEO cho trang chủ thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Chỉnh sửa SEO cho trang chủ thất bại'
            ));
            exit();
        }
    }

    //Chỉnh sửa seo premier
if(!empty($_POST['id_pages_premier']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
&& !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['title_fb']) &&
 !empty($_POST['description_fb']) && !empty($_POST['keyword_fb']) && !empty($_POST['title_tw']) 
 && !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
    
    $id_pages = mysqli_real_escape_string($conn, $_POST['id_pages_premier']);

if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
    /* Nhận tên file */
 $filename1 = $_FILES['img_fb']['name'];
 /* Nhận kích thước file */
 $filesize1 = $_FILES['img_fb']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp1 = time();

 /* Gắn timestamp vào tên file*/
 $path1 = $timestamp1.$filename1;

 /* Location */
 $uploadPath1 = "../../uploads/seo_pages";

 $tar_get1 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img_fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "2000" || $height1 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes1 = array("jpg","jpeg","png","bmp");
 $fileType1 = substr($path1,strrpos($path1,".") + 1);

 if(!in_array($fileType1,$validTypes1)){
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

 $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
 if($resultFB){
    if($_POST['img_fb_old'] != ''){
        $img_fb_old = $_POST['img_fb_old'];
        $link_fb = '../../';
        $file_fb = $link_fb.$img_fb_old;
        unlink($file_fb);
    }

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
    /* Nhận tên file */
 $filename2 = $_FILES['img_tw']['name'];
 /* Nhận kích thước file */
 $filesize2 = $_FILES['img_tw']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp2 = time();

 /* Gắn timestamp vào tên file*/
 $path2 = $timestamp2.$filename2;

 /* Location */
 $uploadPath2 = "../../uploads/seo_pages";

 $tar_get2 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size2 = $_FILES["img_tw"]['tmp_name'];
 list($width2, $height2) = getimagesize($size2);

 if($width2 > "2000" || $height2 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes2 = array("jpg","jpeg","png","bmp");
 $fileType2 = substr($path2,strrpos($path2,".") + 1);

 if(!in_array($fileType2,$validTypes2)){
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
    $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
    if($resultTW){
       if($_POST['img_tw_old'] != ''){
        $img_tw_old = $_POST['img_tw_old'];
        $link_tw = '../../';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);
       }

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
        $title_fb = mysqli_real_escape_string($conn, $_POST['title_fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
        $title_tw = mysqli_real_escape_string($conn, $_POST['title_tw']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);

        $sql = "UPDATE `seo_pages` SET `title` = '$title', `description` = '$description',
        `keyword` = '$keyword',`link_fb` = '$link_fb', `title_fb` = '$title_fb', 
        `description_fb` = '$description_fb',`keyword_fb` = '$keyword_fb',
        `title_tw` = '$title_tw',`description_tw` = '$description_tw'
        WHERE `id` = $id_pages";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Chỉnh sửa SEO cho trang premier thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Chỉnh sửa SEO cho trang premier thất bại'
            ));
            exit();
        }
    }

    //Chỉnh sửa seo titanx
    if(!empty($_POST['id_pages_titanx']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
    && !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['title_fb']) &&
     !empty($_POST['description_fb']) && !empty($_POST['keyword_fb']) && !empty($_POST['title_tw']) 
     && !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
        
        $id_pages = mysqli_real_escape_string($conn, $_POST['id_pages_titanx']);
    
    if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
        /* Nhận tên file */
     $filename1 = $_FILES['img_fb']['name'];
     /* Nhận kích thước file */
     $filesize1 = $_FILES['img_fb']['size'];
    
     /* Thêm tên file bằng timestamp*/
     $timestamp1 = time();
    
     /* Gắn timestamp vào tên file*/
     $path1 = $timestamp1.$filename1;
    
     /* Location */
     $uploadPath1 = "../../uploads/seo_pages";
    
     $tar_get1 = "uploads/seo_pages";
     /* Upload file */
     //Kiểm tra kích thước ảnh trước khi upload
     $size1 = $_FILES["img_fb"]['tmp_name'];
     list($width1, $height1) = getimagesize($size1);
    
     if($width1 > "2000" || $height1 > "2000") {
         echo json_encode(array(
             'status' => 0,
             'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
         ));
         exit();
     }
     //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
     $validTypes1 = array("jpg","jpeg","png","bmp");
     $fileType1 = substr($path1,strrpos($path1,".") + 1);
    
     if(!in_array($fileType1,$validTypes1)){
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
    
     $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
     if($resultFB){
        if($_POST['img_fb_old'] != ''){
            $img_fb_old = $_POST['img_fb_old'];
            $link_fb = '../../';
            $file_fb = $link_fb.$img_fb_old;
            unlink($file_fb);
        }
    
        $img_fb =  $tar_get1 . '/' .$path1;
        $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages";
        $result = mysqli_query($conn,$sql);
    }
        
    }
    if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
        /* Nhận tên file */
     $filename2 = $_FILES['img_tw']['name'];
     /* Nhận kích thước file */
     $filesize2 = $_FILES['img_tw']['size'];
    
     /* Thêm tên file bằng timestamp*/
     $timestamp2 = time();
    
     /* Gắn timestamp vào tên file*/
     $path2 = $timestamp2.$filename2;
    
     /* Location */
     $uploadPath2 = "../../uploads/seo_pages";
    
     $tar_get2 = "uploads/seo_pages";
     /* Upload file */
     //Kiểm tra kích thước ảnh trước khi upload
     $size2 = $_FILES["img_tw"]['tmp_name'];
     list($width2, $height2) = getimagesize($size2);
    
     if($width2 > "2000" || $height2 > "2000") {
         echo json_encode(array(
             'status' => 0,
             'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
         ));
         exit();
     }
     //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
     $validTypes2 = array("jpg","jpeg","png","bmp");
     $fileType2 = substr($path2,strrpos($path2,".") + 1);
    
     if(!in_array($fileType2,$validTypes2)){
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
        $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
        if($resultTW){
           if($_POST['img_tw_old'] != ''){
            $img_tw_old = $_POST['img_tw_old'];
            $link_tw = '../../';
            $file_tw = $link_tw.$img_tw_old;
            unlink($file_tw);
           }
    
            $img_tw =  $tar_get2 . '/' .$path2;
            $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages";
            $result = mysqli_query($conn,$sql);
        }
    }
     
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
            $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
            $title_fb = mysqli_real_escape_string($conn, $_POST['title_fb']);
            $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
            $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
            $title_tw = mysqli_real_escape_string($conn, $_POST['title_tw']);
            $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);
    
            $sql = "UPDATE `seo_pages` SET `title` = '$title', `description` = '$description',
            `keyword` = '$keyword',`link_fb` = '$link_fb', `title_fb` = '$title_fb', 
            `description_fb` = '$description_fb',`keyword_fb` = '$keyword_fb',
            `title_tw` = '$title_tw',`description_tw` = '$description_tw'
            WHERE `id` = $id_pages";
    
            $result = mysqli_query($conn,$sql);
    
            if($result == true){
                echo json_encode(array(
                    'status' => 1,
                    'message' => 'Chỉnh sửa SEO cho trang titanx thành công'
                ));
                exit();
            }else{
                echo json_encode(array(
                    'status' => 0,
                    'message' => 'Chỉnh sửa SEO cho trang titanx thất bại'
                ));
                exit();
            }
        }

        //Chỉnh sửa seo tin tức
    if(!empty($_POST['id_pages_news']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
    && !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['title_fb']) &&
     !empty($_POST['description_fb']) && !empty($_POST['keyword_fb']) && !empty($_POST['title_tw']) 
     && !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
        
        $id_pages = mysqli_real_escape_string($conn, $_POST['id_pages_news']);
    
    if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
        /* Nhận tên file */
     $filename1 = $_FILES['img_fb']['name'];
     /* Nhận kích thước file */
     $filesize1 = $_FILES['img_fb']['size'];
    
     /* Thêm tên file bằng timestamp*/
     $timestamp1 = time();
    
     /* Gắn timestamp vào tên file*/
     $path1 = $timestamp1.$filename1;
    
     /* Location */
     $uploadPath1 = "../../uploads/seo_pages";
    
     $tar_get1 = "uploads/seo_pages";
     /* Upload file */
     //Kiểm tra kích thước ảnh trước khi upload
     $size1 = $_FILES["img_fb"]['tmp_name'];
     list($width1, $height1) = getimagesize($size1);
    
     if($width1 > "2000" || $height1 > "2000") {
         echo json_encode(array(
             'status' => 0,
             'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
         ));
         exit();
     }
     //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
     $validTypes1 = array("jpg","jpeg","png","bmp");
     $fileType1 = substr($path1,strrpos($path1,".") + 1);
    
     if(!in_array($fileType1,$validTypes1)){
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
    
     $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
     if($resultFB){
        if($_POST['img_fb_old'] != ''){
            $img_fb_old = $_POST['img_fb_old'];
            $link_fb = '../../';
            $file_fb = $link_fb.$img_fb_old;
            unlink($file_fb);
        }
    
        $img_fb =  $tar_get1 . '/' .$path1;
        $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages";
        $result = mysqli_query($conn,$sql);
    }
        
    }
    if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
        /* Nhận tên file */
     $filename2 = $_FILES['img_tw']['name'];
     /* Nhận kích thước file */
     $filesize2 = $_FILES['img_tw']['size'];
    
     /* Thêm tên file bằng timestamp*/
     $timestamp2 = time();
    
     /* Gắn timestamp vào tên file*/
     $path2 = $timestamp2.$filename2;
    
     /* Location */
     $uploadPath2 = "../../uploads/seo_pages";
    
     $tar_get2 = "uploads/seo_pages";
     /* Upload file */
     //Kiểm tra kích thước ảnh trước khi upload
     $size2 = $_FILES["img_tw"]['tmp_name'];
     list($width2, $height2) = getimagesize($size2);
    
     if($width2 > "2000" || $height2 > "2000") {
         echo json_encode(array(
             'status' => 0,
             'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
         ));
         exit();
     }
     //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
     $validTypes2 = array("jpg","jpeg","png","bmp");
     $fileType2 = substr($path2,strrpos($path2,".") + 1);
    
     if(!in_array($fileType2,$validTypes2)){
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
        $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
        if($resultTW){
           if($_POST['img_tw_old'] != ''){
            $img_tw_old = $_POST['img_tw_old'];
            $link_tw = '../../';
            $file_tw = $link_tw.$img_tw_old;
            unlink($file_tw);
           }
    
            $img_tw =  $tar_get2 . '/' .$path2;
            $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages";
            $result = mysqli_query($conn,$sql);
        }
    }
     
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
            $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
            $title_fb = mysqli_real_escape_string($conn, $_POST['title_fb']);
            $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
            $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
            $title_tw = mysqli_real_escape_string($conn, $_POST['title_tw']);
            $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);
    
            $sql = "UPDATE `seo_pages` SET `title` = '$title', `description` = '$description',
            `keyword` = '$keyword',`link_fb` = '$link_fb', `title_fb` = '$title_fb', 
            `description_fb` = '$description_fb',`keyword_fb` = '$keyword_fb',
            `title_tw` = '$title_tw',`description_tw` = '$description_tw'
            WHERE `id` = $id_pages";
    
            $result = mysqli_query($conn,$sql);
    
            if($result == true){
                echo json_encode(array(
                    'status' => 1,
                    'message' => 'Chỉnh sửa SEO cho trang tin tức thành công'
                ));
                exit();
            }else{
                echo json_encode(array(
                    'status' => 0,
                    'message' => 'Chỉnh sửa SEO cho trang tin tức thất bại'
                ));
                exit();
            }
        }

//Chỉnh sửa seo về chúng tôi
if(!empty($_POST['id_pages_about']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
&& !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['title_fb']) &&
 !empty($_POST['description_fb']) && !empty($_POST['keyword_fb']) && !empty($_POST['title_tw']) 
 && !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
    
    $id_pages = mysqli_real_escape_string($conn, $_POST['id_pages_about']);

if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
    /* Nhận tên file */
 $filename1 = $_FILES['img_fb']['name'];
 /* Nhận kích thước file */
 $filesize1 = $_FILES['img_fb']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp1 = time();

 /* Gắn timestamp vào tên file*/
 $path1 = $timestamp1.$filename1;

 /* Location */
 $uploadPath1 = "../../uploads/seo_pages";

 $tar_get1 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img_fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "2000" || $height1 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes1 = array("jpg","jpeg","png","bmp");
 $fileType1 = substr($path1,strrpos($path1,".") + 1);

 if(!in_array($fileType1,$validTypes1)){
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

 $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
 if($resultFB){
    if($_POST['img_fb_old'] != ''){
        $img_fb_old = $_POST['img_fb_old'];
        $link_fb = '../../';
        $file_fb = $link_fb.$img_fb_old;
        unlink($file_fb);
    }

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
    /* Nhận tên file */
 $filename2 = $_FILES['img_tw']['name'];
 /* Nhận kích thước file */
 $filesize2 = $_FILES['img_tw']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp2 = time();

 /* Gắn timestamp vào tên file*/
 $path2 = $timestamp2.$filename2;

 /* Location */
 $uploadPath2 = "../../uploads/seo_pages";

 $tar_get2 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size2 = $_FILES["img_tw"]['tmp_name'];
 list($width2, $height2) = getimagesize($size2);

 if($width2 > "2000" || $height2 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes2 = array("jpg","jpeg","png","bmp");
 $fileType2 = substr($path2,strrpos($path2,".") + 1);

 if(!in_array($fileType2,$validTypes2)){
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
    $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
    if($resultTW){
       if($_POST['img_tw_old'] != ''){
        $img_tw_old = $_POST['img_tw_old'];
        $link_tw = '../../';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);
       }

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
        $title_fb = mysqli_real_escape_string($conn, $_POST['title_fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
        $title_tw = mysqli_real_escape_string($conn, $_POST['title_tw']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);

        $sql = "UPDATE `seo_pages` SET `title` = '$title', `description` = '$description',
        `keyword` = '$keyword',`link_fb` = '$link_fb', `title_fb` = '$title_fb', 
        `description_fb` = '$description_fb',`keyword_fb` = '$keyword_fb',
        `title_tw` = '$title_tw',`description_tw` = '$description_tw'
        WHERE `id` = $id_pages";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Chỉnh sửa SEO cho trang chúng tôi thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Chỉnh sửa SEO cho trang chúng tôi thất bại'
            ));
            exit();
        }
    }

//Chỉnh sửa seo thư viện
if(!empty($_POST['id_pages_gallery']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
&& !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['title_fb']) &&
 !empty($_POST['description_fb']) && !empty($_POST['keyword_fb']) && !empty($_POST['title_tw']) 
 && !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
    
    $id_pages_gallery = mysqli_real_escape_string($conn, $_POST['id_pages_gallery']);

if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
    /* Nhận tên file */
 $filename1 = $_FILES['img_fb']['name'];
 /* Nhận kích thước file */
 $filesize1 = $_FILES['img_fb']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp1 = time();

 /* Gắn timestamp vào tên file*/
 $path1 = $timestamp1.$filename1;

 /* Location */
 $uploadPath1 = "../../uploads/seo_pages";

 $tar_get1 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img_fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "2000" || $height1 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes1 = array("jpg","jpeg","png","bmp");
 $fileType1 = substr($path1,strrpos($path1,".") + 1);

 if(!in_array($fileType1,$validTypes1)){
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

 $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
 if($resultFB){
    if($_POST['img_fb_old'] != ''){
        $img_fb_old = $_POST['img_fb_old'];
        $link_fb = '../../';
        $file_fb = $link_fb.$img_fb_old;
        unlink($file_fb);
    }

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages_gallery";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
    /* Nhận tên file */
 $filename2 = $_FILES['img_tw']['name'];
 /* Nhận kích thước file */
 $filesize2 = $_FILES['img_tw']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp2 = time();

 /* Gắn timestamp vào tên file*/
 $path2 = $timestamp2.$filename2;

 /* Location */
 $uploadPath2 = "../../uploads/seo_pages";

 $tar_get2 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size2 = $_FILES["img_tw"]['tmp_name'];
 list($width2, $height2) = getimagesize($size2);

 if($width2 > "2000" || $height2 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes2 = array("jpg","jpeg","png","bmp");
 $fileType2 = substr($path2,strrpos($path2,".") + 1);

 if(!in_array($fileType2,$validTypes2)){
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
    $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
    if($resultTW){
       if($_POST['img_tw_old'] != ''){
        $img_tw_old = $_POST['img_tw_old'];
        $link_tw = '../../';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);
       }

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages_gallery";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
        $title_fb = mysqli_real_escape_string($conn, $_POST['title_fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
        $title_tw = mysqli_real_escape_string($conn, $_POST['title_tw']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);

        $sql = "UPDATE `seo_pages` SET `title` = '$title', `description` = '$description',
        `keyword` = '$keyword',`link_fb` = '$link_fb', `title_fb` = '$title_fb', 
        `description_fb` = '$description_fb',`keyword_fb` = '$keyword_fb',
        `title_tw` = '$title_tw',`description_tw` = '$description_tw'
        WHERE `id` = $id_pages_gallery";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Chỉnh sửa SEO cho trang chúng tôi thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Chỉnh sửa SEO cho trang chúng tôi thất bại'
            ));
            exit();
        }
    }

    //Chỉnh sửa seo về đại lý
if(!empty($_POST['id_pages_agency']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
&& !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['title_fb']) &&
 !empty($_POST['description_fb']) && !empty($_POST['keyword_fb']) && !empty($_POST['title_tw']) 
 && !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
    
    $id_pages = mysqli_real_escape_string($conn, $_POST['id_pages_agency']);

if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
    /* Nhận tên file */
 $filename1 = $_FILES['img_fb']['name'];
 /* Nhận kích thước file */
 $filesize1 = $_FILES['img_fb']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp1 = time();

 /* Gắn timestamp vào tên file*/
 $path1 = $timestamp1.$filename1;

 /* Location */
 $uploadPath1 = "../../uploads/seo_pages";

 $tar_get1 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img_fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "2000" || $height1 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes1 = array("jpg","jpeg","png","bmp");
 $fileType1 = substr($path1,strrpos($path1,".") + 1);

 if(!in_array($fileType1,$validTypes1)){
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

 $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
 if($resultFB){
    if($_POST['img_fb_old'] != ''){
        $img_fb_old = $_POST['img_fb_old'];
        $link_fb = '../../';
        $file_fb = $link_fb.$img_fb_old;
        unlink($file_fb);
    }

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
    /* Nhận tên file */
 $filename2 = $_FILES['img_tw']['name'];
 /* Nhận kích thước file */
 $filesize2 = $_FILES['img_tw']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp2 = time();

 /* Gắn timestamp vào tên file*/
 $path2 = $timestamp2.$filename2;

 /* Location */
 $uploadPath2 = "../../uploads/seo_pages";

 $tar_get2 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size2 = $_FILES["img_tw"]['tmp_name'];
 list($width2, $height2) = getimagesize($size2);

 if($width2 > "2000" || $height2 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes2 = array("jpg","jpeg","png","bmp");
 $fileType2 = substr($path2,strrpos($path2,".") + 1);

 if(!in_array($fileType2,$validTypes2)){
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
    $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
    if($resultTW){
       if($_POST['img_tw_old'] != ''){
        $img_tw_old = $_POST['img_tw_old'];
        $link_tw = '../../';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);
       }

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
        $title_fb = mysqli_real_escape_string($conn, $_POST['title_fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
        $title_tw = mysqli_real_escape_string($conn, $_POST['title_tw']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);

        $sql = "UPDATE `seo_pages` SET `title` = '$title', `description` = '$description',
        `keyword` = '$keyword',`link_fb` = '$link_fb', `title_fb` = '$title_fb', 
        `description_fb` = '$description_fb',`keyword_fb` = '$keyword_fb',
        `title_tw` = '$title_tw',`description_tw` = '$description_tw'
        WHERE `id` = $id_pages";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Chỉnh sửa SEO cho trang đại lý thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Chỉnh sửa SEO cho trang đại lý thất bại'
            ));
            exit();
        }
    }

        //Chỉnh sửa seo về từ khóa
if(!empty($_POST['id_pages_tag']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
&& !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['description_fb'])
&& !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
    
    $id_pages = mysqli_real_escape_string($conn, $_POST['id_pages_tag']);

if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
    /* Nhận tên file */
 $filename1 = $_FILES['img_fb']['name'];
 /* Nhận kích thước file */
 $filesize1 = $_FILES['img_fb']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp1 = time();

 /* Gắn timestamp vào tên file*/
 $path1 = $timestamp1.$filename1;

 /* Location */
 $uploadPath1 = "../../uploads/seo_pages";

 $tar_get1 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img_fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "2000" || $height1 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes1 = array("jpg","jpeg","png","bmp");
 $fileType1 = substr($path1,strrpos($path1,".") + 1);

 if(!in_array($fileType1,$validTypes1)){
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

 $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
 if($resultFB){
    if($_POST['img_fb_old'] != ''){
        $img_fb_old = $_POST['img_fb_old'];
        $link_fb = '../../';
        $file_fb = $link_fb.$img_fb_old;
        unlink($file_fb);
    }

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
    /* Nhận tên file */
 $filename2 = $_FILES['img_tw']['name'];
 /* Nhận kích thước file */
 $filesize2 = $_FILES['img_tw']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp2 = time();

 /* Gắn timestamp vào tên file*/
 $path2 = $timestamp2.$filename2;

 /* Location */
 $uploadPath2 = "../../uploads/seo_pages";

 $tar_get2 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size2 = $_FILES["img_tw"]['tmp_name'];
 list($width2, $height2) = getimagesize($size2);

 if($width2 > "2000" || $height2 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes2 = array("jpg","jpeg","png","bmp");
 $fileType2 = substr($path2,strrpos($path2,".") + 1);

 if(!in_array($fileType2,$validTypes2)){
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
    $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
    if($resultTW){
       if($_POST['img_tw_old'] != ''){
        $img_tw_old = $_POST['img_tw_old'];
        $link_tw = '../../';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);
       }

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);

        $sql = "UPDATE `seo_pages` SET `description` = '$description',
        `keyword` = '$keyword',`link_fb` = '$link_fb',`description_fb` = '$description_fb',
        `keyword_fb` = '$keyword_fb',`description_tw` = '$description_tw'
        WHERE `id` = $id_pages";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Chỉnh sửa SEO cho trang từ khóa thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Chỉnh sửa SEO cho trang từ khóa thất bại'
            ));
            exit();
        }
    }

    //Chỉnh sửa từ khóa search
    if(!empty($_POST['id_pages_search']) && !empty($_POST['description']) && !empty($_POST['keyword']) 
&& !empty($_POST['link_fb']) && isset($_POST['img_fb_old']) && !empty($_POST['description_fb']) &&
 !empty($_POST['keyword_fb']) && !empty($_POST['description_tw']) && isset($_POST['img_tw_old'])){
    
    $id_pages = mysqli_real_escape_string($conn, $_POST['id_pages_search']);

if(!empty($_FILES['img_fb']) && $_FILES['img_fb']['error'] == 0){
    /* Nhận tên file */
 $filename1 = $_FILES['img_fb']['name'];
 /* Nhận kích thước file */
 $filesize1 = $_FILES['img_fb']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp1 = time();

 /* Gắn timestamp vào tên file*/
 $path1 = $timestamp1.$filename1;

 /* Location */
 $uploadPath1 = "../../uploads/seo_pages";

 $tar_get1 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size1 = $_FILES["img_fb"]['tmp_name'];
 list($width1, $height1) = getimagesize($size1);

 if($width1 > "2000" || $height1 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes1 = array("jpg","jpeg","png","bmp");
 $fileType1 = substr($path1,strrpos($path1,".") + 1);

 if(!in_array($fileType1,$validTypes1)){
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

 $resultFB = move_uploaded_file($_FILES['img_fb']['tmp_name'],$uploadPath1 . '/' .$path1);
 if($resultFB){
    if($_POST['img_fb_old'] != ''){
        $img_fb_old = $_POST['img_fb_old'];
        $link_fb = '../../';
        $file_fb = $link_fb.$img_fb_old;
        unlink($file_fb);
    }

    $img_fb =  $tar_get1 . '/' .$path1;
    $sql = "UPDATE `seo_pages` SET `img_fb` = '$img_fb' WHERE `id` = $id_pages";
    $result = mysqli_query($conn,$sql);
}
    
}
if(!empty($_FILES['img_tw']) && $_FILES['img_tw']['error'] == 0){
    /* Nhận tên file */
 $filename2 = $_FILES['img_tw']['name'];
 /* Nhận kích thước file */
 $filesize2 = $_FILES['img_tw']['size'];

 /* Thêm tên file bằng timestamp*/
 $timestamp2 = time();

 /* Gắn timestamp vào tên file*/
 $path2 = $timestamp2.$filename2;

 /* Location */
 $uploadPath2 = "../../uploads/seo_pages";

 $tar_get2 = "uploads/seo_pages";
 /* Upload file */
 //Kiểm tra kích thước ảnh trước khi upload
 $size2 = $_FILES["img_tw"]['tmp_name'];
 list($width2, $height2) = getimagesize($size2);

 if($width2 > "2000" || $height2 > "2000") {
     echo json_encode(array(
         'status' => 0,
         'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 2000px X 2000px'
     ));
     exit();
 }
 //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
 $validTypes2 = array("jpg","jpeg","png","bmp");
 $fileType2 = substr($path2,strrpos($path2,".") + 1);

 if(!in_array($fileType2,$validTypes2)){
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
    $resultTW =  move_uploaded_file($_FILES['img_tw']['tmp_name'],$uploadPath2 . '/' .$path2);
    if($resultTW){
       if($_POST['img_tw_old'] != ''){
        $img_tw_old = $_POST['img_tw_old'];
        $link_tw = '../../';
        $file_tw = $link_tw.$img_tw_old;
        unlink($file_tw);
       }

        $img_tw =  $tar_get2 . '/' .$path2;
        $sql = "UPDATE `seo_pages` SET `img_tw` = '$img_tw' WHERE `id` = $id_pages";
        $result = mysqli_query($conn,$sql);
    }
}
 
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
        $link_fb = mysqli_real_escape_string($conn, $_POST['link_fb']);
        $description_fb = mysqli_real_escape_string($conn, $_POST['description_fb']);
        $keyword_fb = mysqli_real_escape_string($conn, $_POST['keyword_fb']);
        $description_tw = mysqli_real_escape_string($conn, $_POST['description_tw']);

        $sql = "UPDATE `seo_pages` SET `description` = '$description',
        `keyword` = '$keyword',`link_fb` = '$link_fb',`description_fb` = '$description_fb',
        `keyword_fb` = '$keyword_fb',`description_tw` = '$description_tw'
        WHERE `id` = $id_pages";

        $result = mysqli_query($conn,$sql);

        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Chỉnh sửa SEO cho trang tìm kiếm thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Chỉnh sửa SEO cho trang tìm kiếm thất bại'
            ));
            exit();
        }
    }

    //Chỉnh sửa menu

    if(!empty($_POST['id_menu']) && !empty($_POST['name_menu']) &&
     !empty($_POST['url_menu']) && !empty($_POST['url_real_menu']) && isset($_POST['position_menu'])){

        $id_menu = mysqli_real_escape_string($conn, $_POST['id_menu']);
        $name_menu = mysqli_real_escape_string($conn, $_POST['name_menu']);
        $url_menu = mysqli_real_escape_string($conn, $_POST['url_menu']);
        $url_real_menu = mysqli_real_escape_string($conn, $_POST['url_real_menu']);
        $position_menu = mysqli_real_escape_string($conn, $_POST['position_menu']);
        $time = date('Y-m-d H:i:s');
    
        $sql = "UPDATE `menu` SET `name` = '$name_menu', `url` = '$url_menu', 
        `url_real` = '$url_real_menu', `position` = '$position_menu', `time` = '$time'
         WHERE `id` = '$id_menu'";
        $result = mysqli_query($conn,$sql);
        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Cập nhật menu thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Cập nhật menu thất bại'
            ));
            exit();
        }
    }

    //Chỉnh sửa footer

    if(!empty($_POST['id_footer']) && !empty($_POST['copyright']) &&
     !empty($_POST['address']) && !empty($_POST['phone'])  &&
     !empty($_POST['mail']) && !empty($_POST['title']) && !empty($_POST['subtitle'])){

        $id_footer = mysqli_real_escape_string($conn, $_POST['id_footer']);
        $copyright = mysqli_real_escape_string($conn, $_POST['copyright']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $mail = mysqli_real_escape_string($conn, $_POST['mail']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $subtitle = mysqli_real_escape_string($conn, $_POST['subtitle']);
        $time = date('Y-m-d H:i:s');
    
        $sql = "UPDATE `footer` SET `copyright` = '$copyright', `address` = '$address', 
        `phone` = '$phone', `mail` = '$mail',`title` = '$title', `subtitle` = '$subtitle',
        `time` = '$time' WHERE `id` = '$id_footer'";
        $result = mysqli_query($conn,$sql);
        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Cập nhật footer thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Cập nhật footer thất bại'
            ));
            exit();
        }
    }


    //Chỉnh sửa sidebar

    if(!empty($_POST['id_sidebar']) && !empty($_POST['url_sidebar']) &&
     !empty($_POST['icon_sidebar']) && !empty($_POST['name_sidebar'])  &&
     isset($_POST['position_sidebar'])){

        $id_sidebar = mysqli_real_escape_string($conn, $_POST['id_sidebar']);
        $url_sidebar = mysqli_real_escape_string($conn, $_POST['url_sidebar']);
        $icon_sidebar = mysqli_real_escape_string($conn, $_POST['icon_sidebar']);
        $name_sidebar = mysqli_real_escape_string($conn, $_POST['name_sidebar']);
        $position_sidebar = mysqli_real_escape_string($conn, $_POST['position_sidebar']);
        $time = date('Y-m-d H:i:s');
    
        $sql = "UPDATE `sidebar` SET `url` = '$url_sidebar', `icon` = '$icon_sidebar', 
        `name` = '$name_sidebar', `position` = '$position_sidebar',`time` = '$time'
         WHERE `id` = '$id_sidebar'";
        $result = mysqli_query($conn,$sql);
        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Cập nhật sidebar thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Cập nhật sidebar thất bại'
            ));
            exit();
        }
    }

    if(!empty($_POST['id_gallery']) && !empty($_POST['gallery_name'])){

        $id_gallery = mysqli_real_escape_string($conn, $_POST['id_gallery']);
        $name = mysqli_real_escape_string($conn, $_POST['gallery_name']);
        $time = date('Y-m-d H:i:s');
    
        $sql = "UPDATE `gallery` SET `name` = '$name', `time` = '$time'
         WHERE `id_gallery` = '$id_gallery'";
        $result = mysqli_query($conn,$sql);
        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Cập nhật dòng xe thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Cập nhật dòng xe thất bại'
            ));
            exit();
        }
    }

 ?>