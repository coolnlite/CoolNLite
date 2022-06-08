<?php 
    require_once('./config/config.php');
    require_once('./config/dbhelper.php');
    require_once('./admin/modules/function.php');
    $base_url = 'http://localhost/CoolNLite';
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    if(isset($_GET['url'])){
        $posts = $_GET['url'] = !"" ? mysqli_real_escape_string($conn, $_GET['url']) : '';
    }
    $sql = "SELECT * FROM `news` WHERE `url` = '$posts'";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($result);
    
    if (isset($rowcount) && $rowcount != 0) { // Kiểm tra có bài viết này không
        $sql = "SELECT `id`,`title`,`time` FROM `news` WHERE `url` = '$posts'";
        $list = executeResult($sql);
        foreach($list as $lt){ 
            $title = $lt['title'];
            $id_news = $lt['id'];
            $time = $lt['time'];
        }
        if (!empty($id_news))
            $cookieView='posts_'.$id_news;

            if(!isset($_COOKIE["$cookieView"]))
            {
                setcookie("$cookieView","1",time() + 1800);
                $sql = "UPDATE `news` SET `view`=`view`+1 WHERE `id`='$id_news'";
                mysqli_query($conn,$sql);
            }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- meta main -->
    <title><?php print $title.' - Phim cách nhiệt COOL N LITE'?></title>
    <?php
        $sql = "SELECT * FROM `seo_news` WHERE `id_news` = '$id_news'";
        $seo_news = executeResult($sql);
        foreach($seo_news as $sn){
            
    ?>
    <meta name="description" content="<?php print $sn['description']?>"/>
    <meta name="keywords" content="<?php print $sn['keyword']?>"/>
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
    <meta property="article:publisher" content="<?php print $sn['link_fb']?>"/>
    <meta property="article:published_time" content="<?php print $time ?>" />
    <meta property="og:url" itemprop="url" content="<?php print getCurrentPageURL() ?>"/>
    <meta property="og:image" itemprop="thumbnailUrl" content="<?php print $base_url.$sn['img_fb']?>"/>
    <meta property="og:image:width" content="800"/>
    <meta property="og:image:height" content="354"/>
    <meta content="<?php print $sn['title_fb']?>" itemprop="headline" property="og:title"/>
    <meta content="<?php print $sn['description_fb']?>" itemprop="description" property="og:description"/>
    <meta property="article:tag" content="<?php print $sn['keyword_fb']?>"/>
    <!-- FACEBOOK -->
    <!-- Twitter Card -->
    <meta name="twitter:card" value="summary"/>
    <meta name="twitter:url" content="<?php print getCurrentPageURL() ?>"/>
    <meta name="twitter:title" content="<?php print $sn['title_tw']?>"/>
    <meta name="twitter:description" content="<?php print $sn['description_tw']?>"/>
    <meta name="twitter:image" content="<?php print $base_url.$sn['img_tw']?>"/>
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
    <link rel="stylesheet" href="<?php print $base_url?>/public/css/slider.css">
    <link rel="stylesheet" href="<?php print $base_url?>/public/css/news.css">
    <!-- css -->
</head>

<body class="body">
    <div id="main">
        <!-- SETION 1 -->
        <section class="section" id="details">
        <?php 
            require_once('./pages/menu.php');
         ?> 
        </section>
        <!-- SETION 1 -->
        <main class="default-page-width">
            <section class="tag-main">
                <?php
                    $sql = "SELECT * FROM `news` WHERE `url` = '$posts'";
                    $posts = executeResult($sql);
                    foreach($posts as $ps){
                ?>
                <div class="posts-main">
                    <div class="posts-top">
                        <div class="posts-heading">
                            <h1 title="<?php echo ''.$ps['title'].''?>">
                               <?php echo ''.$ps['title'].''?>
                            </h1>
                        </div>
                        <div class="posts-user">
                            <div class="user-info">
                            <?php
                                $id_users = $ps['id_user'];
                                $sql = "SELECT `full_name`, `image` FROM users WHERE id = '$id_users'";
                                $users = executeResult($sql);
                                foreach($users as $us){
                            ?>
                                <a>
                                    <div class="card-img">
                                        <img class="users" src="<?php echo ''.$base_url.$us['image'].''?>" alt="avatar">
                                    </div>
                                    <div class="card-title">
                                        <h6>Chia sẻ bởi</h6>
                                        <h3><?php echo ''.$us['full_name'].''?></h3>
                                    </div>
                                </a>
                                <?php
                                 }
                                ?>
                            </div>

                            <div class="users-time">
                                <h5>
                                    Ngày đăng :<span>
                                    <?php echo ''.date_format_vn($ps['time']).''?></span>
                                </h5>
                                <span class="view">
                                    <i class="far fa-eye"></i>
                                    <?php echo ''.$ps['view'].''?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="content-posts" class="content-posts">
                        <?php echo ''.$ps['content'].''?>
                    </div>

                    <div class="tag-box">
                        <ul class="banner-tag">
                            <li class="name-tag">
                                <span class="fas fa-tags"></span>
                                <span class="keyword">Từ khóa :</span>
                            </li>
                            <?php
                                $id_posts = $ps['id'];
                                $sql = "SELECT `id_news`, `id_tag` FROM `news_keyword` WHERE id_news = '$id_posts'";
                                $news_keyword = executeResult($sql);
                                foreach( $news_keyword as $nk){
                            ?>
                            <?php
                                $id_tag = $nk['id_tag'];
                                $sql = "SELECT `id`, `name` FROM `keyword` WHERE id = '$id_tag'";
                                $keyword = executeResult($sql);
                                foreach($keyword as $kw){
                            ?>
                            <li class="tag-items">
                                
                                <a href="tu-khoa/<?php echo ''.$kw['id'].''?>/<?php
                                    echo str_replace(' ', '+', $kw['name']);
                                ?>.html">
                                    <?php echo ''.$kw['name'].''?>
                                </a>
                            </li>
                            <?php
                                }//Kết thúc vòng lặp keyword
                            }//Kết thúc vòng lặp news_keyword
                            ?>
                        </ul>
                    </div>
                </div>
                <?php
                    }//Kết thúc vòng lặp posts
                ?>
                <!-- Phần tin khác -->
                <div class="other-news-box">
                    <nav class="title-items">
                        <div class="heading-title">
                            <h3>Bài viết khác</h3>
                        </div>
                    </nav>
                    <div class="wrapper">
                    <?php
                        $row = 6;
                        $posts = $posts[0]['id'];
                        $sql = "SELECT * FROM `news` WHERE `url` != $posts
                         ORDER BY RAND() LIMIT 0, $row ";
                        $posts = executeResult($sql);
                        foreach($posts as $ps){
                    ?>
                        <div class="card-columns">
                            <a href="post.php?url=<?php echo ''.$ps['url'].''?>">
                                <div class="card-img">
                                    <img src=".<?php echo ''.$ps['thumnail'].''?>" alt="">
                                </div>
                                <div class="card-title">
                                    <h4>
                                    <?php echo ''.$ps['title'].''?>
                                    </h4>
                                    <p>
                                    <?php echo ''.$ps['description'].''?>
                                    </p>
                                    <div class="box-users">
                                    <?php
                                        $id_users = $ps['id_user'];
                                        $sql = "SELECT `full_name`, `image` FROM users WHERE id = '$id_users'";
                                        $users = executeResult($sql);
                                        foreach($users as $us){
                                        ?>
                                        <div class="box-img">
                                            <img src=".<?php echo ''.$us['image'].''?>" alt="Người viết">
                                        </div>
                                        <span>
                                            <?php echo ''.$us['full_name'].''?>
                                        </span>
                                        <?php
                                            }//Kết thúc vòng lặp users
                                        ?>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php
                        }//Kết thúc vòng lặp posts
                    ?>
                    </div>
                </div>
                <!-- Kết thúc phần tin khác -->
    </div>
    </section>
    </main>
    </div>
    <?php 
        require_once('./pages/footer.php');
    ?>
    <!-- javasript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./public/js/slider.js"></script>
    <script src="./public/js/script.js"></script>
    <!-- javasript -->
</body>

</html>