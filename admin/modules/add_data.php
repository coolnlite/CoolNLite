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

?>