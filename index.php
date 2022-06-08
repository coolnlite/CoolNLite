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
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 1";
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
  <link rel="stylesheet" href="<?php print $base_url?>/public/css/news.css">
  <link rel="stylesheet" href="<?php print $base_url?>/public/css/slider.css">
  <!-- css -->
  
</head>

<body class="body">
  <div id="main">
    <!-- SETION 1 -->
    <section class="section menu bg-index-1" id="section-1">
      <?php 
        require_once($base_url.'/pages/menu.php');
      ?>
      <div class="box-title-menu">
        <h1 class="title">THE TITANIUM FILM</h1>
        <div class="block-bottom">
          <section class="main-list-menu">
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="/shared/icon/Icon-protect.png" alt="icons">
                <span>Tỷ lệ chống tia cực tím 99%</span>
              </div>
            </div>
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="/shared/icon/Icon-hongngoai.png" alt="icons">
                <span>Tỷ lệ chống tia hồng ngoại 98%</span>
              </div>
            </div>
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="/shared/icon/Icon-sun.png" alt="icons">
                <span>Tỷ lệ chống chói 95%
                </span>
              </div>
            </div>
            <div class="item-parameter">
              <a class="btn btn-size btn-size-100 btn-menu btn-fisrt btn-show-form"><span>Liên hệ tư vấn</span></a>
            </div>
          </section>
          <div class="space-menu"></div>
          <a class="btn-down" href="#section-2">
            <span class="far fa-angle-down"></span>
          </a>
        </div>
      </div>
    </section>
    <!-- SETION 1 -->
    <!-- SETION 2-->
    <section class="section built" id="section-2">
      <a href="#section-1" class="btn-up">
        <span class="fas fa-chevron-up"></span>
      </a>
      <section class="box-built">
        <div class="container-slide">
          <div class="slider-container">
            <div class="slider sizes-slider">
              <img src="./shared/img/trangchu/titanium.jpg" alt="Image">
            </div>
            <div class="slider sizes-slider">
              <img src="./shared/img/trangchu/cong-nghe-phun-xa.jpg" alt="Image">
            </div>
            <div class="box-btn">
              <div class="prev-button prev-button1" onclick="plusSlide(-1)">
                <i class="fas fa-chevron-left"></i>
              </div>
              <div class="next-button next-button1" onclick="plusSlide(1)">
                <i class="fas fa-chevron-right"></i>
              </div>
            </div>
            <div class="lines">
              <div class="line" onclick="currentSlide(1)">
              </div>
              <div class="line" onclick="currentSlide(2)">
              </div>
            </div>
          </div>
        </div>
        <section class="box-right-built">
          <div class="main-box-right-button">
            <span class="title-right-built">
              <span class="text-heading">Công nghệ phún xạ Titanium độc quyền
              </span>
            </span>
            <div class="txt-main">
              <p class="txt-top-b">
                COOL N LITE ứng dụng Titanium trong công nghệ phún xạ cùng với các kim loại quý hiếm khác như Đồng,
                Vàng, Bạc, Crôm,... để tạo thành một bộ lọc hoàn hảo để phim đạt được độ cách nhiệt lý tưởng 98% và duy
                trì khả năng cách nhiệt vô hạn.
              </p>
            </div>
          </div>
          <div class="right-built-button">
            <a href="./pages/post.html" class="btn btn-size-100 btn-size btn-built btn-secondary"><span>Xem
                thêm</span></a>
          </div>
        </section>
      </section>
    </section>
    <!-- SETION 2-->
    <!-- SETION 3 -->
    <section class="section section-gird" id="section-3">
      <div class="box-title-menu gird-top bg-index-2">
        <a href="#section-2" class="btn-up">
          <span class="fas fa-chevron-up"></span>
        </a>
        <div class="box-title">
          <h1>Premier Series</h1>
        </div>
        <div class="block-bottom">
          <section class="main-list-menu quick">
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-hongngoai.png" alt="icons">
                <span>Cách nhiệt 85%</span>
              </div>
            </div>
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-protect.png" title="Ngăn tia UV 99%" alt="icons">    
                  <span>Ngăn tia UV 99%
                  </span>
              </div>
            </div>
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-beutifull.png" title="Sang trọng với lớp màu ánh kim" alt="icons"> 
                  <span>Sang trọng với lớp màu ánh kim
                  </span>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="box-quick">
        <section class="main-box-quick">
          <section class="main-box-quick-left">
            <div class="quick-left-top">
              <span class="title-right-built">
                <span class="text-heading">COOL N LITE PREMIER SERIES
                </span>
              </span>
            </div>
            <div class="quick-left-bottom">
              <div class="right-built-button">
                <a href="./pages/premier.html" class="btn-learn-more btn-built btn-secondary"><i
                    class="fas fa-plus"></i></a>
                <p class="txt-more">Xem Thêm</p>
                <a class="btn btn-size btn-built btn-secondary btn-show-form"><span>Liên hệ tư vấn</span></a>
              </div>
            </div>
          </section>
          <section class="main-box-quick-right">
            <p>
              Với dòng phim cách nhiệt PREMIER, COOL N LITE ứng dụng phương pháp phún xạ đa kim loại lên các tấm phim
              như Đồng, Crom và nhiều hợp kim khác để đạt tính kháng nhiệt tuyệt vời.
              Phim cách nhiệt dòng PREMIER được sản xuất bằng công nghệ tiên tiến cùng những vật liệu tốt nhất, với mức
              giá hợp lý, đảm bảo hiệu suất lâu dài cho người sử dụng, bảo vệ bạn khỏi tia UV và mang lại sự thoải mái
              khi lái xe.
            </p>
          </section>
        </section>
      </div>
    </section>
    <!-- SETION 3 -->
    <!-- SETION 4 -->
    <section class="section section-gird" id="section-4">
      <div class="box-title-menu gird-top bg-index-3">
        <a href="#section-3" class="btn-up">
          <span class="fas fa-chevron-up"></span>
        </a>
        <div class="box-title">
          <h1>TITAN X SERIES</h1>
        </div>
        <div class="block-bottom">
          <section class="main-list-menu quick">
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-hongngoai.png" alt="icons">
                  <span>Cách nhiệt 98%
                  </span>
              </div>

            </div>
            <div class="item-parameter">
              <div class="box-para-top">
                  <img src="./shared/icon/Icon-protect.png" title="Ngăn tia UV 99%" alt="icons">
                  <span>Ngăn tia UV 99%
                  </span>
              </div>
            </div>
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-beutifull.png" title="Mang đến sự đẳng cấp và tinh tế" alt="icons"> 
                  <span>Mang đến sự đẳng cấp và tinh tế
                  </span>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="box-quick">
        <section class="main-box-quick">
          <section class="main-box-quick-left">
            <div class="quick-left-top">
              <span class="title-right-built">
                <span class="text-heading">COOL N LITE TITAN X SERIES</span>
              </span>
            </div>
            <div class="quick-left-bottom">
              <div class="right-built-button">
                <a href="./pages/premier.html" class="btn-learn-more btn-built btn-secondary"><i
                    class="fas fa-plus"></i></a>
                <p class="txt-more">Xem Thêm</p>
                <a class="btn btn-size btn-built btn-secondary btn-show-form"><span>Liên hệ tư vấn</span></a>
              </div>
            </div>
          </section>
          <section class="main-box-quick-right">
            <p>
              Sự kết hợp của hơn 30 kim loại quý như Vàng, Bạc và Titanium,..cho phép TITAN X có khả năng hấp thụ nhiệt
              và phản xạ nhiệt tối ưu mang lại trải nghiệm sau vô lăng hết sức thú vị: tầm nhìn sáng, bảo vệ tối đa mà
              vẫn đảm bảo tính riêng tư trong cabin. Dòng phim cách nhiệt COOL N LITE thường được các dòng siêu xe nổi
              tiếng như Lamborghini, Ferrari, Mercedes, McLaren…lựa chọn để lắp đặt trên xe của mình.
            </p>
          </section>
        </section>
      </div>
    </section>
    <!-- SETION 4 -->
    <!-- SETION 5 -->
    <section class="section section-gird" id="section-5">
      <div class="box-title-menu gird-top bg-index-4">
        <a href="#section-4" class="btn-up">
          <span class="fas fa-chevron-up"></span>
        </a>
        <div class="main-future">
          <section class="box-future-text">
            <div class="item-future">
              <div class="item-top">TIẾN TIẾN
              </div>
              <p class="item-bottom">
                Hơn 19 năm kinh nghiệm
              </p>
            </div>
            <div class="item-future">
              <div class="item-top">CHẤT LƯỢNG
              </div>
              <p class="item-bottom">
                + 150,000 Ô tô dán phim cách nhiệt
              </p>
            </div>
            <div class="item-future">
              <div class="item-top">
                TRẢI NGHIỆM
              </div>
              <p class="item-bottom">
                Được tin dùng bởi các hãng siêu xe
              </p>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- SETION 5 -->
    <!-- VIDEO  -->
    <section id="video">
      <video loop autoplay muted controls src="./shared/video/tru-so.mov"></video>
    </section>
    <!-- VIDEO  -->
  </div>
  <?php
    require_once('./pages/footer.php');
    require_once('./pages/popup_form.php');
  ?>
  <!-- javasript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="./public/js/slider.js"></script>
  <script src="./public/js/script.js"></script>
  <script src="./public/js/form.js"></script>
  <!-- javasript -->
  <!-- jquery validation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
  <script src="./public/js/checkinput.js"></script>
  <!-- jquery validation -->
  <!-- css on sroll pages -->
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script>
 
 ScrollReveal({ reset: true });


  ScrollReveal().reveal(".title", {
    duration: 2000,
    origin: "top",
    distance: "300px",
    easing: "cubic-bezier(0.5, 0, 0, 1)",
    rotate: {
      x: 20,
      z: -10
    }
  });

  ScrollReveal().reveal(".block-bottom .main-list-menu .box-para-top", {
    duration: 3000,
    move: 0
  });

  ScrollReveal().reveal(".section-gird .gird-top .box-title", {
    duration: 2000,
    origin: "left",
    distance: "300px",
    easing: "ease-in-out"
  });
  

  ScrollReveal().reveal(".btn-menu", {
    duration: 3000,
    origin: "right",
    distance: "30px",
    easing: "ease-in-out"
  });

  ScrollReveal().reveal(".main-future .box-future-text .item-future", {
    duration: 2000,
    origin: "bottom",
    distance: "100px",
    easing: "cubic-bezier(.37,.01,.74,1)",
    opacity: 0.3,
    scale: 0.5
  });

  </script>
  <!-- css on sroll pages -->
</body>

</html>