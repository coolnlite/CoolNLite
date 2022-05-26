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
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
    <!-- fontawesome -->
    <!-- css -->
    <link rel="icon" sizes="32x32" href="./shared/img/icon.png">
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/reponsive.css" />
    <link rel="stylesheet" href="./public/css/slider.css">
    <link rel="stylesheet" href="./public/css/news.css">
    <!-- css -->
    <title>BÀI VIẾT</title>
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
        <?php
            $posts = $_GET['url'] = !"" ? mysqli_real_escape_string($conn, $_GET['url']) : '';
            $sql = "SELECT * FROM `news` WHERE `url` = '$posts'";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
        ?>
        <?php if ($rowcount != 0) { // Kiểm tra có bài viết này không 
        ?>
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
                            <h1>
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
                                        <img class="users" src=".<?php echo ''.$us['image'].''?>" alt="Người viết">
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
                                    <?php echo ''.$ps['view'].''?></span>
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
                                
                                <a href="tag.php?id=<?php echo ''.$kw['id'].''?>&keyword=<?php
                                    echo str_replace(' ', '+', $kw['name']);
                                ?>">
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
                        <div class="card-columns">
                            <a href="posts.php?p=trai-nghiem-danh-gia-ios-15-beta">
                                <div class="card-img">
                                    <img src="./uploads/sieuxe.jpg" alt="">
                                </div>
                                <div class="card-title">
                                    <h4>
                                        Trải nghiệm đánh giá iOS 15 Beta 2: Đã có bản Public Beta cho người dùng
                                        cập nhật miễn phí, bổ sung thêm tính năng mới
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur magnam aut
                                        placeat fugiat omnis esse illum labore quisquam. Saepe numquam aliquid cum
                                        veritatis modi dolorem quos consequuntur illum dolorum totam.
                                    </p>
                                    <div class="box-users">
                                        <div class="box-img">
                                            <img src="./uploads/avatar.jpg" alt="Người viết">
                                        </div>
                                        <span>
                                            Võ Đông Thái
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="card-columns">
                            <a href="posts.php?p=huong-dan-sua-wifi-bang-cac-cau-lenh-cmd-p-11">
                                <div class="card-img">
                                    <img src="./uploads/sieuxe.jpg" alt="">
                                </div>
                                <div class="card-title">
                                    <h4>
                                        Hướng dẫn cách sửa WiFi laptop bằng các câu lệnh, giúp bạn biết rõ
                                        nguyên nhân gây ra lỗi kết nối từ đâu
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur magnam aut
                                        placeat fugiat omnis esse illum labore quisquam. Saepe numquam aliquid cum
                                        veritatis modi dolorem quos consequuntur illum dolorum totam.
                                    </p>
                                    <div class="box-users">
                                        <div class="box-img">
                                            <img src="./uploads/avatar.jpg" alt="Người viết">
                                        </div>
                                        <span>
                                            Võ Đông Thái
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="card-columns">
                            <a href="posts.php?p=huong-dan-sua-wifi-bang-cac-cau-lenh-cmd-p-12">
                                <div class="card-img">
                                    <img src="./uploads/sieuxe.jpg" alt="">
                                </div>
                                <div class="card-title">
                                    <h4>
                                        Hướng dẫn cách sửa WiFi laptop bằng các câu lệnh, giúp bạn biết rõ
                                        nguyên nhân gây ra lỗi kết nối từ đâu
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur magnam aut
                                        placeat fugiat omnis esse illum labore quisquam. Saepe numquam aliquid cum
                                        veritatis modi dolorem quos consequuntur illum dolorum totam.
                                    </p>
                                    <div class="box-users">
                                        <div class="box-img">
                                            <img src="./uploads/avatar.jpg" alt="Người viết">
                                        </div>
                                        <span>
                                            Võ Đông Thái
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="card-columns">
                            <a href="posts.php?p=huong-dan-sua-wifi-bang-cac-cau-lenh-cmd-p-13">
                                <div class="card-img">
                                    <img src="./uploads/sieuxe.jpg" alt="">
                                </div>
                                <div class="card-title">
                                    <h4>
                                        Hướng dẫn cách sửa WiFi laptop bằng các câu lệnh, giúp bạn biết rõ
                                        nguyên nhân gây ra lỗi kết nối từ đâu
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur magnam aut
                                        placeat fugiat omnis esse illum labore quisquam. Saepe numquam aliquid cum
                                        veritatis modi dolorem quos consequuntur illum dolorum totam.
                                    </p>
                                    <div class="box-users">
                                        <div class="box-img">
                                            <img src="./uploads/avatar.jpg" alt="Người viết">
                                        </div>
                                        <span>
                                            Võ Đông Thái
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="card-columns">
                            <a href="posts.php?p=huong-dan-sua-wifi-bang-cac-cau-lenh-cmd-p-14">
                                <div class="card-img">
                                    <img src="./uploads/sieuxe.jpg" alt="">
                                </div>
                                <div class="card-title">
                                    <h4>
                                        Hướng dẫn cách sửa WiFi laptop bằng các câu lệnh, giúp bạn biết rõ
                                        nguyên nhân gây ra lỗi kết nối từ đâu
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur magnam aut
                                        placeat fugiat omnis esse illum labore quisquam. Saepe numquam aliquid cum
                                        veritatis modi dolorem quos consequuntur illum dolorum totam.
                                    </p>
                                    <div class="box-users">
                                        <div class="box-img">
                                            <img src="./uploads/avatar.jpg" alt="Người viết">
                                        </div>
                                        <span>
                                            Võ Đông Thái
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="card-columns">
                            <a href="posts.php?p=huong-dan-sua-wifi-bang-cac-cau-lenh-cmd-p-15">
                                <div class="card-img">
                                    <img src="./uploads/sieuxe.jpg" alt="">
                                </div>
                                <div class="card-title">
                                    <h4>
                                        Hướng dẫn cách sửa WiFi laptop bằng các câu lệnh, giúp bạn biết rõ
                                        nguyên nhân gây ra lỗi kết nối từ đâu
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur magnam aut
                                        placeat fugiat omnis esse illum labore quisquam. Saepe numquam aliquid cum
                                        veritatis modi dolorem quos consequuntur illum dolorum totam.
                                    </p>
                                    <div class="box-users">
                                        <div class="box-img">
                                            <img src="./uploads/avatar.jpg" alt="Người viết">
                                        </div>
                                        <span>
                                            Võ Đông Thái
                                        </span>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
                <!-- Kết thúc phần tin khác -->
    </div>
    </section>
    </main>
    <?php
        }else{
            require_once('./error_404.php');
        }
    ?>
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