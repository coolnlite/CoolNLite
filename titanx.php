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
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
  <!-- fontawesome -->
  <!-- css -->
  <link rel="icon" sizes="32x32" href="./shared/img/icon.png">
  <link rel="stylesheet" href="./public/css/style.css" />
  <link rel="stylesheet" href="./public/css/reponsive.css" />
  <link rel="stylesheet" href="./public/css/slider.css">
  <!-- css -->
  <title>Titan-X Series - COOL N LITE</title>
</head>

<body class="body">
  <div id="main">
    <!-- SETION 1 -->
    <section class="section menu bg-titanx-1">
      <?php 
          require_once('./pages/menu.php');
      ?> 
      <div class="box-title-menu">
        <h1 class="title">Titan-X Series</h1>
        <div class="block-bottom">
          <section class="main-list-menu">
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-hongngoai.png" alt="icons">
                <span>Tỉ lệ chống tia hồng ngoại 98%
                </span>
              </div>
            </div>
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-protect.png" alt="icons">
                <span>Tỉ lệ chống tia cực tím 99%
                </span>
              </div>
            </div>
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-beutifull.png" alt="icons">
                <span>Mang đến sự đẳng cấp và tinh tế
                </span>
              </div>
            </div>
            <div class="item-parameter">
              <a class="btn btn-size btn-menu btn-fisrt btn-show-form btn-show-form"><span>Liên hệ tư vấn</span></a>
            </div>
          </section>
          <div class="space-menu"></div>
          <div class="btn-down">
            <span class="far fa-angle-down"></span>
          </div>
        </div>
      </div>
    </section>
    <!-- SETION 1 -->
    <!-- SETION 2-->
    <section class="section built">
      <section class="box-built fix-100vh">
        <div class="box-left-built bg-all"></div>
        <section class="box-right-built">
          <div class="main-box-right-button">
            <span class="title-right-built">
            </span>
            <div class="txt-main">
              <p class="txt-top-b">
               Sự kết hợp của hơn 30 kim loại quý như Vàng, Bạc và Titanium,..cho phép TITAN X có cả hai khả năng hấp thụ nhiệt và phản xạ nhiệt tối ưu với tỷ lệ chống tia hồng ngoại lên đến 98%, tỷ lệ chống tia cực tím gần như tuyệt đối (99%). Hoàn toàn vượt trội mọi đối thủ trong khả năng cách nhiệt, chống chói, tia cực tím với bề ngoài hoàn mỹ.
              </p>
            </div>
          </div>
          <div class="right-built-button">
            <a class="btn btn-size btn-size-100 btn-built btn-secondary btn-show-form"><span>Liên hệ tư vấn</span></a>
          </div>
        </section>
      </section>
    </section>
    <!-- SETION 2-->
    <!-- SLIDER -->
    <div class="block-slider fix-size bg-white" id="block-slider">
      <div class="container-slide">
        <div class="slider-container">
          <div class="slider2 sizes-slider2">
            <img src="./shared/img/car-black.jpg" alt="Image">
          </div>
          <div class="slider2 sizes-slider2">
            <img src="./shared/img/car-blue.jpg" alt="Image">
          </div>
          <div class="slider2 sizes-slider2">
            <img src="./shared/img/car-red.jpg" alt="Image">
          </div>
          <div class="box-btn">
            <div class="prev-button prev-button1" onclick="plusSlide2(-1)">
              &#10094;
            </div>
            <div class="next-button next-button1" onclick="plusSlide2(1)">
              &#10095;
            </div>
          </div>
          <div class="lines">
            <div class="line2" onclick="currentSlide2(1)">
            </div>
            <div class="line2" onclick="currentSlide2(2)">
            </div>
            <div class="line2" onclick="currentSlide2(3)">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SLIDER -->
    <!-- SETION 3 -->
    <section class="section section-gird">
      <div class="box-title-menu gird-top bg-titanx-2">
      </div>
      <div class="box-quick">
        <section class="main-box-quick">
          <section class="main-box-quick-left">
            <div class="quick-left-top">
              <span class="title-right-built">
                <span class="text-heading">COOL N LITE PREMIER SERIES</span>
              </span>
            </div>
            <div class="quick-left-bottom">
              <div class="right-built-button">
                <a href="./post.php" class="btn-learn-more btn-built btn-secondary"><i
                  class="fas fa-plus"></i></a>
              <p class="txt-more">Xem Thêm</p>
                <a class="btn btn-size btn-built btn-secondary btn-show-form"><span>Báo giá ngay</span></a>
              </div>
            </div>
          </section>
          <section class="main-box-quick-right">
            <p>
              Gói sản phẩm của dòng phim cách nhiệt TITAN X SERIES là dòng phim cách nhiệt của COOL N LITE bán chạy nhất trên thị trường. Với giá cả hợp lý, chức năng vượt trội. Khả năng cách nhiệt tốt, loại bỏ 98% tia hồng ngoại, 99% tia UV bảo vệ da, đồng thời giảm chói lên đến 88%. COOL N LITE tin rằng các sản phẩm dòng TITAN X là lựa chọn tốt nhất cho người tiêu dùng. 
            </p>
          </section>
        </section>
      </div>
    </section>
    <!-- SETION 3 -->
    <!-- SETION 2-->
    <section class="section built" id="section-2">
      <section class="box-built">
        <div class="container-slide titanx-slide">
          <div class="slider-container">
            <div class="slider sizes-slider">
              <img src="./shared/img/titan-x-series-01.jpg" alt="Image">
            </div>
            <div class="slider sizes-slider">
              <img src="./shared/img/titan-x-series-02.jpg" alt="Image">
            </div>
            <div class="slider sizes-slider">
              <img src="./shared/img/titan-x-series-03.jpg" alt="Image">
            </div>
            <div class="slider sizes-slider">
              <img src="./shared/img/titan-x-series-04.jpg" alt="Image">
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
              <div class="line" onclick="currentSlide(3)">
              </div>
              <div class="line" onclick="currentSlide(4)">
              </div>
            </div>
          </div>
        </div>
        <section class="box-right-built">
          <div class="main-box-right-button">
            <span class="title-right-built">
              <span class="text-heading">Sản phẩm lắp đặt COOL N LITE TITAN X SERIES
              </span>
            </span>
            <div class="txt-main">
              <p class="txt-top-b">
                Với hiệu quả cách nhiệt vượt trội đồng thời nâng cao tính thẩm mỹ, đẳng cấp cho người dùng mà dòng phim cách nhiệt TITAN X thường được các hãng siêu xe như Lamborghini, Ferrari, Mercedes, McLaren,…lắp đặt trên xecủa mình. TITAN X hiện cũng là 1 trong những dòng sản phẩm phim cách nhiệt có chỉ số cách nhiệt cao nhất trên thị trường, loại bỏ 98% tia hồng ngoại, ngăn tia UV 99% giúp bảo vệ nội thất ô tô, bảo vệ sức khỏe, đem lại sự thỏa mái, an toàn vượt trên mọi mong đợi. 
              </p>
            </div>
          </div>
          <div class="right-built-button">
            <a class="btn btn-size-100 btn-size btn-built btn-secondary btn-show-form"><span>Liên hệ tư vấn</span></a>
          </div>
        </section>
      </section>
    </section>
    <!-- SETION 5-->
    
  </div>
  <?php 
    require_once('./pages/footer.php');
    require_once('./pages/popup_form.php');
  ?>
  <!-- javasript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="./public/js/form.js"></script>
  <script src="./public/js/slider.js"></script>
  <script src="./public/js/script.js"></script>
  <!-- javasript -->
</body>

</html>