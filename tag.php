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
        <?php if ($rowcount != 0) { // Kiểm tra có bài viết này không 
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
                     <ul class="col-news" id="load_news">
                        <?php
                           $rowperpage = 5;
                           $sql = "SELECT count(*) AS allcount FROM `news`";
                           $fetch = executeResult($sql);
                           $allcount = $fetch[0]['allcount'];
                           $sql = "SELECT * FROM  `news` ORDER BY `id` DESC LIMIT 0, $rowperpage";
                           $news = executeResult($sql);
                           $count = count($news);
                           foreach($news as $ns) {
                        ?>
                        <li class="items-news news">
                           <a class="link-news" href="./post.php?url=<?php echo ''.$ns['url'].''?>">
                              <article class="posts">
                                 <figure class="box-img fix">
                                    <img src=".<?php echo ''.$ns['thumnail'].''?>" alt="ảnh đại điện">
                                    <i class="fas fa-eye"></i>
                                 </figure>
                                 <div class="box-content">
                                    <h3 class="limit-2">
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
                                             <img src=".<?php echo ''.$us['image'].''?>" alt="Avatar">
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
                                       <p class="limit-3">
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
                        <a class="custom-btn btn-3 btn-show btn-news"><span>Xem Thêm</span></a>
                        <input type="hidden" data-row="0" class="row">
                        <input type="hidden" data-allcount="<?php echo '' . $allcount . ''; ?>" class="allcount">
                     </ul>
                  </div>
               </div>
            </section>
         </main>
         <?php
            }else{
                require_once('./error_404.php');
            }
        ?>
         <!-- MAIN BLOG -->
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