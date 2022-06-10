<?php 
    require_once('./config/config.php');
    require_once('./config/dbhelper.php');
    require_once('./admin/modules/function.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');

   if(isset($_GET['search_query'])){
        $search_query = $_GET['search_query'] = !"" ? mysqli_real_escape_string($conn, $_GET['search_query']) : '';
        $search_query = str_replace('+', ' ', $search_query);
   }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title><?php print  $search_query ?> - Phim cách nhiệt COOL N LITE</title>
      <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 7";
        $result = mysqli_query($conn,$sql);
        if($result){
          while ($sp = mysqli_fetch_array($result)){
            
      ?>
      <meta name="description" content="<?php print $sp['description']?>"/>
      <meta name="keywords" content="<?php print $sp['keyword']?>"/>
      <meta name="robots" content="noarchive,index,follow"/>
      <meta http-equiv=”content-language” content=”vi” />
      <meta name="copyright" content="COOL N LITE"/>
      <meta name="author" content="COOL N LITE"/>
      <meta name="robots" content="noarchive,index,follow"/>
      <meta name="googlebot" content="noarchive"/>
      <meta name="geo.placename" content="Ho Chi Minh, Viet Nam"/>
      <meta name="geo.region" content="VN-HCM"/>
      <meta name="geo.position" content="106.0125,107.0110"/>
      <meta name="ICBM" content="106.0125, 107.0110"/>
      <meta name="revisit-after" content="days"/>
      <!-- meta main -->
      <!-- FACEBOOK -->
      <meta property="og:site_name" content="coolnlite.vn"/>
      <meta property="og:rich_attachment" content="true"/>
      <meta property="og:type" content="article"/>
      <meta property="article:publisher" content="<?php print $sp['link_fb']?>"/>
      <meta property="og:url" itemprop="url" content="<?php print getCurrentPageURL() ?>"/>
      <meta property="og:image" itemprop="thumbnailUrl" content="<?php print $base_url.$sp['img_fb']?>"/>
      <meta property="og:image:width" content="800"/>
      <meta property="og:image:height" content="354"/>
      <meta content="<?php print $sp['title_fb']?>" itemprop="headline" property="og:title"/>
      <meta content="<?php print $sp['description_fb']?>" itemprop="description" property="og:description"/>
      <meta property="article:tag" content="<?php print $sp['keyword_fb']?>"/>
      <!-- FACEBOOK -->
      <!-- Twitter Card -->
      <meta name="twitter:card" value="summary"/>
      <meta name="twitter:url" content="<?php print getCurrentPageURL() ?>"/>
      <meta name="twitter:title" content="<?php print $sp['title_tw']?>"/>
      <meta name="twitter:description" content="<?php print $sp['description_tw']?>"/>
      <meta name="twitter:image" content="<?php print $base_url.$sp['img_tw']?>"/>
      <meta name="twitter:site" content="@COOLNLITE"/>
      <meta name="twitter:creator" content="@COOLNLITE"/>
      <!-- End Twitter Card -->
      <?php 
         }//Vòng lặp seo
      }
      ?>
      <!-- fontawesome -->
      <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
      <!-- fontawesome -->
      <!-- css -->
      <link rel="icon" sizes="32x32" href="<?php print $base_url?>/shared/img/icon.png">
      <link rel="stylesheet" href="<?php print $base_url?>/public/css/style.css" />
      <link rel="stylesheet" href="<?php print $base_url?>/public/css/reponsive.css" />
      <link rel="stylesheet" href="<?php print $base_url?>/public/css/news.css" />
      <!-- css -->
   </head>
   <body class="body">
      <div id="main">
         <!-- SECTION NEWS -->
         <section class="section menu news">
         <?php 
            require_once('./pages/menu.php');
         ?> 
         </section>
        
         
         <main role="main">
            <header>
               <div class="container">
                  <h1 class="page-title">
                     <a href="<?php print $base_url?>/tim-kiem/<?php print str_replace(' ', '+', $search_query)?>">
                      Tìm kiếm :  <?php print $search_query?>
                    </a>
                  </h1>
               </div>
            </header>
            
            <section id="news-list">
               <div class="container">
                  <div class="rows-news">
                     <ul class="col-news" id="load_search" data-search="<?php print $search_query?>">
                        
                     </ul>
                  </div>
               </div>
            </section>
         </main>
         
      </div>
      <?php 
        require_once('./pages/footer.php');
      ?>
      <!-- javasript -->
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="<?php print $base_url?>/public/js/pagination.js"></script>
      <script src="<?php print $base_url?>/public/js/script.js"></script>
      <!-- javasript -->
   </body>
</html>