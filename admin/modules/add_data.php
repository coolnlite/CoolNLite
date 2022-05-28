<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('./permision.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    if(isset($_POST['add_news'])){
       if(
           isset($_POST['url']) && isset($_POST['title']) 
            && isset($_POST['thumnail']) && isset($_POST['description'])
            && isset($_POST['content']) && isset($_POST['radio'] )
       )
       {
        $url = mysqli_real_escape_string($conn, $_POST['url']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);
        $radio = mysqli_real_escape_string($conn, $_POST['radio']);
        $image = mysqli_real_escape_string($conn, $_POST['thumnail']);

        /* Nhận tên file */
        $filename = $image;

        /* Nhận kích thước file */
        $filesize = $_FILES['file']['size'];

        /* Thêm tên file bằng timestamp*/
        $timestamp = time();

        /* Gắn timestamp vào tên file*/
        $path = $timestamp.$filename;

        /* Location */
        $uploadPath = "../../uploads/posts".date('d-m-Y', time());
        if(!is_dir($uploadPath)){
            mkdir($uploadPath,0777,true);
        }

        /* Upload file */
        //Kiểm tra kích thước ảnh trước khi upload
        $size = $_FILES["file"]['tmp_name'];
        list($width, $height) = getimagesize($size);

        if($width > "800" || $height > "600") {
            echo json_encode(array(
                'size' => 0,
                'message' => 'Error : Kích thước ảnh nhỏ hơn 800px x 600px .'
            ));
            exit();
        }
        //Kiểm tra xem kiểu file có hợp lệ hoặc dung lượng lớn không
        $validTypes = array("jpg","jpeg","png","bmp");
        $fileType = substr($path,strrpos($path,".") + 1);

        if(!in_array($fileType,$validTypes) || $filesize > 2 * 1024 * 1024){
            echo json_encode(array(
                'file' => 0,
                'message' => 'Error : File lớn hơn 2MB hoặc file không phải là ảnh'
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
        if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadPath . '/' .$path)){
            $thumnail =  $uploadPath . '/' .$path;
            $id_users = $user_id;
            $time = date('Y-m-d H:i:s');

            $sql = "INSERT INTO `news`
            (`url`,thumnail,title ,`description`,content,`status`,id_user ,`time`)
            VALUES ('$url','$thumnail','$title','$description','$content','$radio','$id_users','$time')";
        }else{

        }
       }
    }
?>