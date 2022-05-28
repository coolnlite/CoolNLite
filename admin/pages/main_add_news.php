<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

if(isset($_POST['add_news'])){
   if(
       isset($_POST['url']) && isset($_POST['title']) 
        && isset($_POST['thumnail']) && isset($_POST['description'])
        && isset($_POST['content']) && isset($_POST['radio'] )
   )
   {

    $url = mysqli_real_escape_string($conn, $_POST['url']);
    var_dump($url);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $radio = mysqli_real_escape_string($conn, $_POST['radio']);
    $image = mysqli_real_escape_string($conn, $_POST['thumnail']);

    /* Nhận tên file */
    $filename = $_FILES['thumnail']['name'];

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
        $result = mysqli_query($conn,$sql);
        if($result){
          echo json_encode(array(
            'status' => 0,
            'message' => 'Thêm bài viết thành công'
        ));
        exit();
        }else{
          echo json_encode(array(
            'status' => 1,
            'message' => 'Thêm bài viết thất bại'
        ));
        exit();
        }

    }else{
      echo json_encode(array(
        'status' => 1,
        'message' => 'Thêm bài viết thất bại'
    ));
    }
   }
}

?>

<div style="margin: 0 auto; width : 94%">
  <h3>Thêm bài viết</h3>
  <form enctype="multipart/form-data" method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="url">Đường dẫn :</label><label class="text-danger">(Mẫu : vo-dong-thai-dep-trai-ahihi)</label>
      <input type="text" class="form-control" id="url" placeholder="Nhập đường dẫn bài viết" name="url" required>
      <div class="invalid-feedback">Vui lòng nhập đường dẫn bài viết</div>
    </div>
    <div class="form-group">
      <label for="title">Tiêu đề :</label> <label class="text-danger">không quá 200 ký tự</label>
      <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề bài viết" name="title" required>
      <div class="invalid-feedback">Vui lòng nhập tiêu đề bài viết</div>
    </div>
    <div class="form-group">
      <label for="thumnail">Ảnh đại diện :</label>
      <input type="file" class="form-control" name="thumnail" id="thumnail" required>
      <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
    </div>
    <div class="form-group">
      <label for="description">Mô tả :</label> <label class="text-danger">không quá 300 ký tự</label>
      <input type="text" class="form-control" id="description" placeholder="Nhập mô tả bài viết" name="description" required>
      <div class="invalid-feedback">Vui lòng nhập mô tả bài viết</div>
    </div>
    <div class="form-group">
      <label for="description">Nội dung :</label>
      <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
      <div class="invalid-feedback">Vui lòng nhập nội dung bài viết</div>
    </div>
    <div class="form-group">
      <label for="description">Trạng thái bài viết :</label>
      <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" value="0" id="RadioOff" name="radio" class="custom-control-input">
      <label class="custom-control-label" for="RadioOff">Ẩn</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" value="1" id="RadioOn" name="radio" class="custom-control-input">
      <label class="custom-control-label" for="RadioOn">Hiện</label>
    </div>
    </div>
    <button type="submit" class="btn btn-primary" name="add_news">Thêm</button>
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
