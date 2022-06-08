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
  <title>Premier Series - COOL N LITE</title>
</head>

<body class="body">
  <div id="main">
    <!-- SETION 1 -->
    <section class="section menu bg-premier-1">
    <?php 
        require_once('./pages/menu.php');
    ?> 
      <div class="box-title-menu">
        <h1 class="title">PREMIER SERIES</h1>
        <div class="block-bottom">
          <section class="main-list-menu">
            <div class="item-parameter">
              <div class="box-para-top">
                <img src="./shared/icon/Icon-hongngoai.png" alt="icons">
                <span>Tỉ lệ chống tia hồng ngoại 85%
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
                <span>Sang trọng với lớp màu ánh kim
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
      <section class="box-built  fix-100vh">
        <div class="box-left-built bg-pre"></div>
        <section class="box-right-built">
          <div class="main-box-right-button">
            <span class="title-right-built">
            </span>
            <div class="txt-main">
              <p class="txt-top-b">
                Nhờ ứng dụng phương pháp phún xạ kim loại quý Titanium kết hợp đồng, crom và các hợp kim chất lượng cao
                giúp PREMIER đạt tính kháng nhiệt tuyệt đối. Đồng thời, dòng phim cách nhiệt PREMIER SERIES được kim
                loại hóa để tăng tính thẩm mỹ cho ô tô bằng lớp màu sang trọng ánh kim trên kính xe, cùng sức bền vượt
                trội trong suốt quá trình sử dụng xe.
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
            <img src="./shared/img/premier/MA-MAU-PREMIER.png" alt="Image">
          </div>
          <div class="slider2 sizes-slider2">
            <img src="./shared/img/premier/TITLE-PREMIER.png" alt="Image">
          </div>
          <div class="slider2 sizes-slider2">
            <img src="./shared/img/premier/THONG-SO-KY-THUAT-PREMIER-SERIES.png" alt="Image">
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
      <div class="box-title-menu gird-top bg-premier-2">
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
                <a href="post.php" class="btn-learn-more btn-built btn-secondary"><i
                    class="fas fa-plus"></i></a>
                <p class="txt-more">Xem Thêm</p>
                <a class="btn btn-size btn-built btn-secondary btn-show-form"><span>Báo giá ngay</span></a>
              </div>
            </div>
          </section>
          <section class="main-box-quick-right">
            <p>
              Gói phim cách nhiệt dòng PREMIER với khả năng cách nhiệt tốt, loại bỏ tia cực tím trong cabin gần như là
              tuyệt đối (99%), đồng thời tỉ lệ chống chói lên đến 95%. Hiệu quả sản phẩm tốt và giá cả sản phẩm phù hợp
              với mọi dòng xe.
            </p>
          </section>
        </section>
      </div>
    </section>
    <!-- SETION 3 -->
    <!-- SETION 5-->
    <section class="section built" id="section-2">
      <section class="box-built">
        <div class="container-slide titanx-slide">
          <div class="slider-container">
            <div class="slider sizes-slider">
              <img src="./shared/img/premier/01.jpg" alt="Image">
            </div>
            <div class="slider sizes-slider">
              <img src="./shared/img/premier/02.jpg" alt="Image">
            </div>
            <div class="slider sizes-slider">
              <img src="./shared/img/premier/03.jpg" alt="Image">
            </div>
            <div class="slider sizes-slider">
              <img src="./shared/img/premier/04.jpg" alt="Image">
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
              <span class="text-heading">Sản phẩm lắp đặt COOL N LITE PREMIER SERIES
              </span>
            </span>
            <div class="txt-main">
              <p class="txt-top-b">
                Với màu sắc sang trọng, giá cả hợp lý và khả năng chống nóng vượt trội, dòng phim cách nhiệt PREMIER
                SERIES được sử dụng cho nhiều dòng xe từ tầm trung đến sang trọng như: Toyota, Vinfast, Hyundai, Kia,
                Ford, Mazda, Honda, Subaru, Chevrolet, Suzuki, Bentley, BMW, Mercedes, Audi, Lexus,…với tỷ lệ truyền
                sáng lên đến 80%, tỷ lệ chống chói đạt tới 95%, tỷ lệ chống tia hồng ngoại là 85% và tỷ lệ chống tia cực
                tím gần như tối ưu 99%.
              </p>
            </div>
          </div>
          <div class="right-built-button">
            <a href="./post.php" class="btn btn-size-100 btn-size btn-built btn-secondary btn-show-form"><span>Liên hệ tư
                vấn</span></a>
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

  

  ScrollReveal().reveal(".btn-menu", {
    duration: 3000,
    origin: "right",
    distance: "30px",
    easing: "ease-in-out"
  });


  </script>
  <!-- css on sroll pages -->
</body>

</html>