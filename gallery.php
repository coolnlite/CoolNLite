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
    <link rel="stylesheet" href="<?php print $base_url?>public/css/magnific-popup.css" />
    <!-- css -->
    <style>
        .selGallery{
            background-color: transparent;
            width: 350px;
            height: 40px;
            outline: none;
            font-size: 16px;
            color: var(--color-blue);
            text-align: center;
            border: 1px solid var(--color-blue);
            cursor: pointer;
            border-radius: 20px;
        }
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
            max-width: 300px;
            max-height: 300px;
        }
        @media screen and (max-width : 768px){
            .popup-gallery a img{
                max-width: 250px;
                max-height: 250px;
            }
        }
        @media screen and (max-width : 600px){
            .popup-gallery a img{
                max-width: 180px;
                max-height: 180px;
            }
            section .main-about p{
                padding-bottom: 2em;
            }
        }
        @media screen and (max-width : 320px){
            .popup-gallery a img{
                max-width: 150px;
                max-height: 150px;
            }
            .select2-container{
                width: calc(100% - 20px) !important;
            }
        }

    </style>
</head>

<body class="body">
    <div id="main" style="background-color: var(--text-color-b);">
        <!-- SETION 1 -->
        <section class="section about-mb" id="gallery_bg">
        <?php 
            require_once('./pages/menu.php');
        ?> 
        </section>
        <section class="fix-about">
            <div class="main-about">
                <h1 class="title-gallery" style="color : var(--text-color)">HÌNH ẢNH LẮP ĐẶT</h1>
                <p class="text-about" style="color : var(--text-color)">
                    Kho tổng hợp những hình ảnh thực tế về các dòng phim cách nhiệt khi được lắp lên các dòng xe trên thị trường của
                    <b class="color">COOL N LITE</b>.
                </p>
            </div>
        </section>

        <section class="fix-about gallery" id="gallery">
            <select id='selGallery' class="selGallery" name="selGallery">
                <option value="0">Vui lòng chọn dòng xe</option>          
                <?php
                    $sql = "SELECT * FROM `gallery` ORDER BY `id_gallery` ASC";
                    $galllery = executeResult($sql);
                    foreach($galllery as $gl){
                        echo '<option value="'.$gl['id_gallery'].'">'.$gl['name'].'</option>';
                    }
                ?>
            </select>   
        </section>

        <section class="fix-about gallery" >
            <div class="popup-gallery" id="result_gallery">
                
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
    <script src="<?php print $base_url?>public/js/jquery.magnific-popup.min.js"></script>
    <!-- javasript -->
    <script>
        $(document).ready(function() {
            //Popup
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

            //Load gallery 
                load_gallery(0);
                    function load_gallery(id_gallery) {
                    $this = $('#result_gallery');
                    var id_gallery = $("#selGallery option:selected").val();
                    $.ajax({
                        type: "POST",
                        url: '<?php print $base_url.'modules/result.php'?>',
                        data: {
                            gallery : true,
                            id_gallery : id_gallery
                        },
                        success: function(data) {
                            $this.html(data);
                        }
                    })
                }
                
                $(document).on('change','#selGallery', function(){
                    var id_gallery = $("#selGallery option:selected").val();
                    load_gallery(id_gallery);
                })
            });

    </script>
</body>

</html>