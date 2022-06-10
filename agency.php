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
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 6";
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
    <link rel="icon" sizes="32x32" href="<?php print $base_url?>/shared/img/icon.png">
    <link rel="stylesheet" href="<?php print $base_url?>/public/css/style.css" />
    <link rel="stylesheet" href="<?php print $base_url?>/public/css/reponsive.css" />
    <link rel="stylesheet" href="<?php print $base_url?>/public/css/news.css" />
    <link rel="stylesheet" href="<?php print $base_url?>/public/css/slider.css">
    <!-- css -->
</head>

<body class="body">
    <div id="main">
        <!-- SETION 1 -->
        <section class="section agency" id="agency">
            <?php 
                require_once('./pages/menu.php');
            ?> 
        </section>
        <!-- SETION 1 -->
        <section class="main-agency" id="main-agency">
        <?php 
            $sql = "SELECT * FROM `agency` ORDER BY `time` DESC ";
            $agency = executeResult($sql);
            foreach($agency as $ag){
        ?>
            <div class="item-agency">
                <div class="container-agency">

                    <div class="col-img">
                        <div class="box-img">
                            <img src="<?php print $base_url?><?php print $ag['img'] ?>" alt="đại lý">
                        </div>
                    </div>
                    <div class="col-content">
                        <div class="box-content">
                            <p>
                                Tên cửa hàng :
                                <span>
                                    <?php print $ag['name'] ?>
                                </span>
                            </p>
                            <p>
                                Địa chỉ cửa hàng :
                                <span>
                                    <?php print $ag['address'] ?>
                                </span>
                            </p>
                            <p>
                                Số điện thoại :
                                <span>
                                    <?php print $ag['phone'] ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                }
            ?>
        </section>
    </div>
    <?php 
        require_once('./pages/footer.php');
        require_once('./pages/popup_form.php');
    ?>
    <!-- javasript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="<?php print $base_url?>/public/js/slider.js"></script>
    <script src="<?php print $base_url?>/public/js/script.js"></script>
    <!-- javasript -->
    <!-- css on sroll pages -->
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script>
      function scrollReveal() {
	var revealPoint = 150;
	var revealElement = document.querySelectorAll(".item-agency");
	for (var i = 0; i < revealElement.length; i++) {
		var windowHeight = window.innerHeight;
		var revealTop = revealElement[i].getBoundingClientRect().top;
		if (revealTop < windowHeight - revealPoint) {
			revealElement[i].classList.add("active");
		} else {
			revealElement[i].classList.remove("active");
		}
	}
}

window.addEventListener("scroll", scrollReveal);
scrollReveal();
  </script>
  <!-- css on sroll pages -->
</body>

</html>