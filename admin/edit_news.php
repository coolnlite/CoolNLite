<?php
    ob_start();
    session_start();
    require_once('./modules/permision.php');
    require_once('../config/config.php');
    require_once('../config/dbhelper.php'); 

    if(isset($_GET['id'])){
      $id = $_GET['id'] = !"" ? mysqli_real_escape_string($conn, $_GET['id']) : '';
    }else{
      require_once('./error_404.php');
      exit();
    }
    $sql = "SELECT `id` FROM `news` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($result);
    if (isset($rowcount) && $rowcount != 0) { // Kiểm tra có id này không
      
    }else{
      require_once('./error_404.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHỈNH SỬA BÀI VIẾT</title>
    <link rel="icon" sizes="32x32" href="../shared/img/icon.png">
    <!-- fontawesome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
    <!-- fontawesome -->
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-admin">
    <!-- Sidebar -->
    <?php
        require_once('./pages/sidebar.php');
    ?>

       <!-- Main -->
        <div class="main">
           <?php
            require_once('./pages/topbar.php');
            if($permission == 0){
                require_once('./pages/main_premision.php');
              }else{
                require_once('./pages/main_edit_news.php');
              }
           ?>
        </div>
    </div>

   <!-- Script -->
    <script src="./js/main.js"></script>
    <script src="./ckeditor/ckeditor.js"></script>
    <script src="./ckfinder/ckfinder.js"></script>
    <script>
        CKEDITOR.replace( 'content', {
            filebrowserBrowseUrl : 'http://localhost/CoolNLite/admin/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : 'http://localhost/CoolNLite/admin/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl : 'http://localhost/CoolNLite/admin/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl : 'http://localhost/CoolNLite/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : 'http://localhost/CoolNLite/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : 'http://localhost/CoolNLite/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        } );
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
       
    $(document).ready(() => {
        $("#fUpdateNews").on('submit', function(e){
        e.preventDefault();
        
        CKEDITOR.instances['content'].updateElement();//Cập nhật element CK
       
            $.ajax({
            type: 'POST',
            url: '<?php print $DOMAIN.'modules/edit_data.php'?>',
            data: new FormData(this),
            dataType : 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){ 
                if(response.status == 1){
                    alert(response.message);
                    window.location.href = '<?php print $DOMAIN.'news.php'?>';
                }else{
                    alert(response.message);
                }
            }
        })
       
        
    });
    
    })
    </script>
</body>

</html>