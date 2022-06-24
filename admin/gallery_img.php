<?php
    ob_start();
    session_start();
    require_once('./modules/permision.php');
    require_once('../config/config.php');
    require_once('../config/dbhelper.php'); 

    if(isset($_GET['id']) && !empty($_GET['id'])){
      $id = $_GET['id'] = !"" ? mysqli_real_escape_string($conn, $_GET['id']) : '';
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
    <title>ẢNH DÒNG XE</title>
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
                require_once('./pages/main_gallery_img.php');
              }
           ?>
        </div>
    </div>

   <!-- Script -->
    <script src="./js/main.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#faddGalleryImg").on('submit', function(e){
                e.preventDefault();
                    $.ajax({
                    type: 'POST',
                    url: '<?php print $DOMAIN.'modules/add_data.php'?>',
                    data: new FormData(this),
                    dataType : 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(response){ 
                        if(response.status == 1){
                            alert(response.message);
                            window.location.reload();
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