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
        <main class="default-page-width">
            <section class="tag-main">
                <div class="posts-main">
                    <div class="posts-top">
                        <div class="posts-heading">
                            <h1>
                                Trải nghiệm đánh giá iOS 15 Beta 2: Đã có bản Public Beta cho người dùng cập
                                nhật miễn phí, bổ sung thêm tính năng mới </h1>
                        </div>
                        <div class="posts-user">
                            <div class="user-info">
                                <a>
                                    <div class="card-img">
                                        <img class="users" src="./uploads/avatar.jpg" alt="Người viết">
                                    </div>
                                    <div class="card-title">
                                        <h6>Chia sẻ bởi</h6>
                                        <h3>Võ Đông Thái</h3>
                                    </div>
                                </a>
                            </div>

                            <div class="users-time">
                                <h5>
                                    Đăng lúc<span>
                                        15:10 26-10-2021 </span>
                                </h5>
                                <span class="view">
                                    <i class="far fa-eye"></i>
                                    0 </span>
                            </div>
                        </div>
                    </div>
                    <div id="content-posts" class="content-posts">
                        <p>
                            <img src="./uploads/avatar.jpg" alt="hinh ảnh minh họa">
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,
                            sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae
                            quae. Hic ab dolorum temporibus expedita.</p>
                        <p>
                            <img src="./uploads/sieuxe.jpg" alt="hinh ảnh minh họa">
                        </p>
                    </div>

                    <div class="tag-box">
                        <ul class="banner-tag">
                            <li class="name-tag">
                                <span class="fas fa-tags"></span>
                                <span class="keyword">Từ khóa :</span>
                            </li>
                            <li class="tag-items">
                                <a href="tag.php?keyword=windows">
                                    Windows </a>
                            </li>
                            <li class="tag-items">
                                <a href="tag.php?keyword=hot-face">
                                    Hot face </a>
                            </li>
                            <li class="tag-items">
                                <a href="tag.php?keyword=ios">
                                    Ios </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Phần tin khác -->
                <div class="other-news-box">
                    <nav class="title-items">
                        <div class="heading-title">
                            <h3>Bài viết cùng thể loại</h3>
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