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
    <title>SEO BÀI VIẾT</title>
    <link rel="icon" sizes="32x32" href="../shared/img/icon.png">
    <!-- fontawesome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
    <!-- fontawesome -->
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

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
            require_once('./pages/main_seo_news.php');
           ?>
        </div>
    </div>

   <!-- Script -->
    <script src="./js/main.js"></script>
   
</body>

</html>