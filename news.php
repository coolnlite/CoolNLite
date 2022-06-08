<?php 
    require_once('./config/config.php');
    require_once('./config/dbhelper.php');
    require_once('./admin/modules/function.php');
    $base_url = 'http://localhost/CoolNLite';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 4";
        $seo_pages = executeResult($sql);
        foreach($seo_pages as $sp){
            
      ?>
      <title><?php print $sp['title']?></title>
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
         <!-- SECTION NEWS -->
         <!-- MAIN NEWS -->
         <main role="main">
            <header>
               <div class="container">
                  <h1 class="page-title" title="tin tức"><a href="tin-tuc.html">Tin Tức</a></h1>
               </div>
            </header>
            <section id="news-list">
               <div class="container">
                  <div class="rows-news">
                     <ul class="col-news" id="load_news">
                        <?php
                           $rowperpage = 5;
                           $sql = "SELECT count(*) AS allcount FROM `news`";
                           $fetch = executeResult($sql);
                           $allcount = $fetch[0]['allcount'];
                           $sql = "SELECT * FROM  `news` ORDER BY `id` DESC LIMIT 0, $rowperpage";
                           $news = executeResult($sql);
                           foreach($news as $ns) {
                        ?>
                        <li class="items-news news">
                           <a class="link-news" href="<?php echo ''.$ns['url'].''?>.html">
                              <article class="posts">
                                 <figure class="box-img fix" title="<?php echo ''.$ns['title'].''?>">
                                    <img src="<?php echo ''.$base_url.$ns['thumnail'].''?>" alt="thumnail">
                                    <i class="fas fa-eye"></i>
                                 </figure>
                                 <div class="box-content">
                                    <h3 class="limit-2" title="<?php echo ''.$ns['title'].''?>">
                                       <?php echo ''.$ns['title'].''?>
                                    </h3>
                                    <div class="box-all">
                                       <div class="arthur">
                                          <?php
                                             $id_users = $ns['id_user'];
                                             $sql = "SELECT `full_name`, `image` FROM users WHERE id = '$id_users'";
                                             $users = executeResult($sql);
                                             foreach($users as $us){

                                          ?>
                                          <div class="box-arthur">
                                             <img src="<?php echo ''.$base_url.$us['image'].''?>" alt="avatar">
                                          </div>
                                          <span class="name">
                                             <?php echo ''.$us['full_name'].''?>
                                          </span>
                                          <?php
                                            } 
                                          ?>
                                       </div>
                                       <div class="time-ago">
                                          <span>
                                             <?php echo ''.facebook_time_ago($ns['time']).''?>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="describe">
                                       <p class="limit-3" title="<?php echo ''.$ns['title'].''?>">
                                          <?php echo ''.$ns['description'].''?>
                                       </p>
                                    </div>
                                 </div>
                              </article>
                           </a>
                        </li>
                        <?php 
                           }
                        ?>
                        <a class="btn-show btn-news">Xem Thêm</a>
                        <input type="hidden" data-row="0" class="row">
                        <input type="hidden" data-allcount="<?php echo '' . $allcount . ''; ?>" class="allcount">
                     </ul>
                  </div>
               </div>
            </section>
         </main>
         <!-- MAIN BLOG -->
      </div>
      <?php 
        require_once('./pages/footer.php');
      ?>
      <!-- javasript -->
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="<?php print $base_url?>/public/js/script.js"></script>
      <script src="<?php print $base_url?>/public/js/loadmore.js"></script>
      <!-- javasript -->
   </body>
</html>