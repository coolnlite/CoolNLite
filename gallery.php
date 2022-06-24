<?php 
    require_once('./config/config.php');
    require_once('./config/dbhelper.php');
    require_once('./admin/modules/function.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
    $sql = "SELECT * FROM `seo_pages` WHERE `id` = 5";
    $result = mysqli_query($conn,$sql);
        if($result){
          while ($sp = mysqli_fetch_array($result)){
        
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
    }
    ?>
    <!-- fontawesome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
    <!-- fontawesome -->
    <!-- css -->
    <link rel="icon" sizes="32x32" href="<?php print $base_url?>shared/img/icon.png">
    <link rel="stylesheet" href="<?php print $base_url?>public/css/style.css" />
    <link rel="stylesheet" href="<?php print $base_url?>public/css/reponsive.css" />
    <link rel="stylesheet" href="<?php print $base_url?>public/css/news.css" />
    <link rel="stylesheet" href="<?php print $base_url?>public/css/select.css" />
    <!-- css -->
    <style>
        .title-gallery{
            position: relative;
        }
        .title-gallery::after{
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: var(--color-blue);
            height: 2px;
        }
        .color{
            color:var(--color-blue);
        }
        .gallery{
            padding-bottom: 3.2em;
        }
        .popup-gallery a img{
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body class="body">
    <div id="main">
        <!-- SETION 1 -->
        <section class="section about-mb" id="about-us">
        <?php 
            require_once('./pages/menu.php');
        ?> 
        </section>
        <section class="fix-about">
            <div class="main-about">
                <h1 class="title-gallery">HÌNH ẢNH LẮP ĐẶT</h1>
                <p class="text-about">
                    Kho tổng hợp những hình ảnh thực tế về các dòng phim cách nhiệt khi được lắp lên các dòng xe trên thị trường của
                    <b class="color">COOL N LITE</b>.
                </p>
            </div>
        </section>

        <section class="fix-about gallery" id="gallery">
            <select id='selGallery' class="selGallery" name="selGallery">
                <option>Vui lòng chọn dòng xe</option>          
                <option value='1'>COLORADO</option>  
                <option value='2'>GLC 200</option>  
                <option value='3'>GLB35</option>
            </select>   
        </section>

        <section class="fix-about gallery" id="result_gallery">
            <div class="popup-gallery">
                <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg">
                    <img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" >
                </a>
                <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg">
                    <img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" >
                </a>
                <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg">
                    <img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg">
                </a>
                <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg">
                    <img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" >
                </a>
                <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg">
                    <img src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" >
                </a>
                <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg">
                    <img src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" >
                </a>
                <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg">
                    <img src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" >
                </a>
            </div>
        </section>

    </div>
    <?php 
        require_once('./pages/footer.php');
        require_once('./pages/popup_form.php');
    ?>
    <!-- javasript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="<?php print $base_url?>public/js/script.js"></script>
    <script src="<?php print $base_url?>public/js/select.js"></script>
    <!-- javasript -->
    <script>
        $(document).ready(function(){
            // Gọi hàm
            $("#selGallery").select2();
        });
    </script>
    <script>
        $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Đang tải ảnh #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">Ảnh #%curr%</a> không thể tải được.',
		}
	});
});
    </script>
</body>

</html>