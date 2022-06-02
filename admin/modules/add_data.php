<?php
    ob_start(); 
    session_start();
    require_once('./permision.php');
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    

    date_default_timezone_set('Asia/Ho_Chi_Minh');
  //Thêm bài viết mới
        if(
            isset($_POST['url']) && isset($_POST['title']) 
             && isset($_FILES['thumnail']) && isset($_POST['description'])
             && isset($_POST['content']) && isset($_POST['radio-stacked'] )
        )
        {
        $url = mysqli_real_escape_string($conn, $_POST['url']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);
        $radio = mysqli_real_escape_string($conn, $_POST['radio-stacked']);

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
                 'status' => 0,
                 'message' => 'Vui lòng chọn ảnh có kích cỡ nhỏ hoặc bằng 1000px X 1000px'
             ));
             exit();
         }
         //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
         $validTypes = array("jpg","jpeg","png","bmp");
         $fileType = substr($path,strrpos($path,".") + 1);

         if(!in_array($fileType,$validTypes) || $filesize > 2 * 1024 * 1024){
            echo json_encode(array(
                'status' => 0,
                'message' => 'Vui lòng chọn file có đuôi là jpg, jpeg, png, bmp'
            ));
            exit();
        }
         if($filesize > 2 * 1024 * 1024){
             echo json_encode(array(
                 'status' => 0,
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
            $id_users = $user_id;
            $view = 0;
            $time = date('Y-m-d H:i:s');

            $sql = "INSERT INTO `news` (`url`, `thumnail`, `title`, `description`, `content`, `status`, `view`, `id_user`, `time`) 
            VALUES ('$url','$thumnail','$title','$description','$content',$radio,$view,$id_users,'$time')";
            $result = mysqli_query($conn,$sql);

            if($result){
                echo json_encode(array(
                'status' => 1,
                'message' => 'Thêm bài viết thành công'
            ));
            exit();
            }else{
                echo json_encode(array(
                'status' => 0,
                'message' => 'Thêm bài viết thất bại'
                ));
                exit();
            }
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Thêm file thất bại'
                ));
                exit();
        }
      }

    //Thêm từ khóa cho bài viết
      if(isset($_POST['add_key']) && isset($_POST['id_news'])){
          $add_key = $_POST['add_key'];
          $id_news = $_POST['id_news'];
          foreach($add_key as $ak){
            $sql = "SELECT * FROM news_keyword WHERE id_news = $id_news AND id_tag = $ak";
            $keyword = mysqli_query($conn,$sql);
            $row = mysqli_num_rows($keyword);
            if($row == 0){
                $sql = "INSERT INTO `news_keyword` (`id_news`, `id_tag`) VALUES ('$id_news','$ak')";
                $result = mysqli_query($conn,$sql);
            }
          }
          echo json_encode(array(
            'status' => 1,
            'message' => 'Cập nhật từ khóa cho bài viết thành công'
        ));
      }

      //Cập nhật từ khóa cho bài viết
      if(isset($_POST['update_key']) && isset($_POST['id_news'])){
        $update_key = $_POST['update_key'];
        $id_news = $_POST['id_news'];
        foreach($update_key as $uk){
          $sql = "DELETE FROM news_keyword WHERE id_news = $id_news AND id_tag = $uk";
          $result = mysqli_query($conn,$sql);
        }
        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Cập nhật từ khóa cho bài viết thành công'
            ));
          }else{
              echo json_encode(array(
                  'status' => 0,
                  'message' => 'Cập nhật từ khóa cho bài viết thất bại'
              ));
          }
    }

     //Thêm từ khóa
     if(isset($_POST['name_key'])){
        $name = mysqli_real_escape_string($conn, $_POST['name_key']);
        $time = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `keyword` (`name`,`time`) VALUES ('$name','$time')";
        $result = mysqli_query($conn,$sql);
        if($result == true){
            echo json_encode(array(
                'status' => 1,
                'message' => 'Thêm từ khóa thành công'
            ));
            exit();
        }else{
            echo json_encode(array(
                'status' => 0,
                'message' => 'Thêm từ khóa thất bại'
            ));
            exit();
        }
    }

//Thêm seo chính cho bài viết
if(!empty($_POST['id_news']) && !empty($_POST['title']) && !empty($_FILES['img-tw']) &&
!empty($_POST['description']) && !empty($_POST['keyword']) && !empty($_POST['link-fb']) &&
!empty($_FILES['img-fb']) && !empty($_POST['title-fb']) && !empty($_POST['description-fb']) && 
!empty($_POST['keyword-fb']) && !empty($_POST['title-tw']) && !empty($_POST['description-tw'])){
    
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
    $img_fb =  $tar_get1 . '/' .$path1;

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
    $img_tw =  $tar_get2 . '/' .$path2;

    if($resultTW && $resultFB){
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

        $sql = "INSERT INTO `seo_news` (`id_news`,`title`,`description`,`keyword`,`link_fb`,`img_fb`,
        `title_fb`,`description_fb`,`keyword_fb`,`title_tw`,`description`,`img_tw`)
        VALUES ('$id_news','$title','$description','$keyword','$link_fb','$img_fb',
        '$title_fb','$description_fb','$keyword_fb','$title_tw','$description_tw','$img_tw')";
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
    }else{
        echo json_encode(array(
            'status' => 0,
            'message' => 'Thêm SEO cho bài viết thất bại'
        ));
        exit();
    }

}
?>