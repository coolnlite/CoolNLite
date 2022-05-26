<?php 
    require_once('./config/config.php');
    require_once('./config/dbhelper.php');
    require_once('./admin/modules/function.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- fontawesome -->
      <link
         href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css"
         rel="stylesheet"
         />
      <!-- fontawesome -->
      <!-- css -->
      <link rel="icon" sizes="32x32" href="./shared/img/icon.png">
      <link rel="stylesheet" href="./public/css/style.css" />
      <link rel="stylesheet" href="./public/css/reponsive.css" />
      <link rel="stylesheet" href="./public/css/news.css" />
      <!-- css -->
      <title>TIN TỨC COOL N LITE</title>
   </head>
   <body class="body">
      <div id="main">
         <!-- SECTION NEWS -->
         <section class="section menu news">
         <?php 
            require_once('./pages/menu.php');
         ?> 
         </section>
         <!-- SECTION NEWS -->
         <!-- MAIN NEWS -->
         <?php
            $id_keyword = $_GET['id'] = !"" ? mysqli_real_escape_string($conn, $_GET['id']) : '';
            $keyword = $_GET['keyword'] = !"" ? mysqli_real_escape_string($conn, $_GET['keyword']) : '';
            $keyword = str_replace('+', ' ', $keyword);
            $sql = "SELECT * FROM `keyword` WHERE `id` = '$id_keyword' AND `name` = '$keyword'";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
        ?>
         <?php if(isset($rowcount) != 0){ //Kiểm tra có mẫu tin nào không
            
         ?>
         <main role="main">
            <header>
               <div class="container">
                  <h1 class="page-title"><a href="./news.php"><?php print $keyword ?></a></h1>
               </div>
            </header>
            
            <section id="news-list">
               <div class="container">
                  <div class="rows-news">
                     <ul class="col-news" id="load_news_tag">
                        
                     </ul>
                  </div>
               </div>
            </section>
         </main>
         <?php
            }else {
               require_once('./error_404.php');
            }//Kết thúc kiểm tra có mẫu tin nào không
         ?>
      </div>
      <?php 
        require_once('./pages/footer.php');
      ?>
      <!-- javasript -->
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="./public/js/loadmore.js"></script>
      <script src="./public/js/script.js"></script>
      <!-- javasript -->
   </body>
</html>