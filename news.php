<?php 
    require_once('./config/config.php');
    require_once('./config/dbhelper.php');
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
      <title>TIN TỨC</title>
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
                  <h1 class="page-title"><a href="./news.html">Tin Tức</a></h1>
               </div>
            </header>
            <section id="news-list">
               <div class="container">
                  <div class="rows-news">
                     <ul class="col-news">
                        <li class="items-news">
                           <a class="link-news" href="./post.php">
                              <article class="posts">
                                 <figure class="box-img fix">
                                    <img src="./uploads/sieuxe.jpg" alt="Siêu xe">
                                    <i class="fas fa-eye"></i>
                                 </figure>
                                 <div class="box-content">
                                    <h3 class="limit-2">
                                       Đây là tiêu đề của bài viết  Đây là tiêu đề của bài viết  Đây là tiêu đề của bài viết  Đây là tiêu đề của bài viết 
                                    </h3>
                                    <div class="box-all">
                                       <div class="arthur">
                                          <div class="box-arthur">
                                             <img src="./uploads/avatar.jpg" alt="Avatar">
                                          </div>
                                          <span class="name">
                                          Võ Đông Thái
                                          </span>
                                       </div>
                                       <div class="time-ago">
                                          <span>
                                          7 phút trước
                                          </span>
                                       </div>
                                    </div>
                                    <div class="describe">
                                       <p class="limit-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quis ullam earum nulla officia amet rerum atque, placeat perspiciatis quaerat ipsa cum ea, quam aspernatur soluta possimus numquam magni aut.</p>
                                    </div>
                                 </div>
                              </article>
                           </a>
                        </li>
                        <li class="items-news">
                           <a class="link-news" href="./post.html">
                              <article class="posts">
                                 <figure class="box-img fix">
                                    <img src="./uploads/sieuxe.jpg" alt="Siêu xe">
                                    <i class="fas fa-eye"></i>
                                 </figure>
                                 <div class="box-content">
                                    <h3 class="limit-2">
                                       Đây là tiêu đề của bài viết
                                    </h3>
                                    <div class="box-all">
                                       <div class="arthur">
                                          <div class="box-arthur">
                                             <img src="./uploads/avatar.jpg" alt="Avatar">
                                          </div>
                                          <span class="name">
                                          Võ Đông Thái
                                          </span>
                                       </div>
                                       <div class="time-ago">
                                          <span>
                                          7 phút trước
                                          </span>
                                       </div>
                                    </div>
                                    <div class="describe">
                                       <p class="limit-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quis ullam earum nulla officia amet rerum atque, placeat perspiciatis quaerat ipsa cum ea, quam aspernatur soluta possimus numquam magni aut.</p>
                                    </div>
                                 </div>
                              </article>
                           </a>
                        </li>
                        <li class="items-news">
                           <a class="link-news" href="./post.html">
                              <article class="posts">
                                 <figure class="box-img fix">
                                    <img src="./uploads/sieuxe.jpg" alt="Siêu xe">
                                    <i class="fas fa-eye"></i>
                                 </figure>
                                 <div class="box-content">
                                  <h3 class="limit-2">
                                       Đây là tiêu đề của bài viết
                                    </h3>
                                    <div class="box-all">
                                       <div class="arthur">
                                          <div class="box-arthur">
                                             <img src="./uploads/avatar.jpg" alt="Avatar">
                                          </div>
                                          <span class="name">
                                          Võ Đông Thái
                                          </span>
                                       </div>
                                       <div class="time-ago">
                                          <span>
                                          7 phút trước
                                          </span>
                                       </div>
                                    </div>
                                    <div class="describe">
                                       <p class="limit-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quis ullam earum nulla officia amet rerum atque, placeat perspiciatis quaerat ipsa cum ea, quam aspernatur soluta possimus numquam magni aut.</p>
                                    </div>
                                 </div>
                              </article>
                           </a>
                        </li>
                        <li class="items-news">
                           <a class="link-news" href="./post.html">
                              <article class="posts">
                                 <figure class="box-img fix">
                                    <img src="./uploads/sieuxe.jpg" alt="Siêu xe">
                                    <i class="fas fa-eye"></i>
                                 </figure>
                                 <div class="box-content">
                                  <h3 class="limit-2">
                                       Đây là tiêu đề của bài viết
                                    </h3>
                                    <div class="box-all">
                                       <div class="arthur">
                                          <div class="box-arthur">
                                             <img src="./uploads/avatar.jpg" alt="Avatar">
                                          </div>
                                          <span class="name">
                                          Võ Đông Thái
                                          </span>
                                       </div>
                                       <div class="time-ago">
                                          <span>
                                          7 phút trước
                                          </span>
                                       </div>
                                    </div>
                                    <div class="describe">
                                       <p class="limit-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quis ullam earum nulla officia amet rerum atque, placeat perspiciatis quaerat ipsa cum ea, quam aspernatur soluta possimus numquam magni aut.</p>
                                    </div>
                                 </div>
                              </article>
                           </a>
                        </li>
                        <li class="items-news">
                           <a class="link-news" href="./post.html">
                              <article class="posts">
                                 <figure class="box-img fix">
                                    <img src="./uploads/sieuxe.jpg" alt="Siêu xe">
                                    <i class="fas fa-eye"></i>
                                 </figure>
                                 <div class="box-content">
                                  <h3 class="limit-2">
                                       Đây là tiêu đề của bài viết
                                    </h3>
                                    <div class="box-all">
                                       <div class="arthur">
                                          <div class="box-arthur">
                                             <img src="./uploads/avatar.jpg" alt="Avatar">
                                          </div>
                                          <span class="name">
                                          Võ Đông Thái
                                          </span>
                                       </div>
                                       <div class="time-ago">
                                          <span>
                                          7 phút trước
                                          </span>
                                       </div>
                                    </div>
                                    <div class="describe">
                                       <p class="limit-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quis ullam earum nulla officia amet rerum atque, placeat perspiciatis quaerat ipsa cum ea, quam aspernatur soluta possimus numquam magni aut.</p>
                                    </div>
                                 </div>
                              </article>
                           </a>
                        </li>
                     </ul>
                     <a class="custom-btn btn-3 btn-show"><span>Xem Thêm</span></a>
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
      <script src="./public/js/script.js"></script>
      <!-- javasript -->
   </body>
</html>