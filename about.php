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
    <link rel="stylesheet" href="./public/css/news.css" />
    <link rel="stylesheet" href="./public/css/slider.css">
    <!-- css -->
    <title>VỀ CHÚNG TÔI</title>
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
                <h1>COOL N LITE</h1>
                <p class="text-about">
                    COOL N LITE được thành lập năm 2003. Với nền tảng công nghệ vượt trội và tiêu chuẩn chất lượng cao
                    cấp, COOL N LITE nhanh chóng được công nhận là <b>CÔNG TY HÀNG ĐẦU TRONG LĨNH VỰC PHIM CÁCH NHIỆT TẠI
                        SINGAPORE</b>.
                    <span class="hide-text">
                        COOL N LITE hợp tác với các cơ sở sản xuất phim công nghệ cao hàng đầu Hoa Kỳ cùng các kỹ sư tài
                    năng nổi tiếng của Nhật để nghiên cứu và sản xuất thành công phim cách nhiệt siêu cấp công nghệ
                    Titanium đầu tiên và duy nhất. Hơn thế nữa, COOL N LITE liên tục phát triển và sản xuất các loại
                    phim cách nhiệt chất lượng cao, có khả năng cách nhiệt tốt trong mọi điều kiện thời tiết.
                    </span>
                </p>
            </div>
        </section>
        <section class="control">
            <div class="ab-container">
                <section class="block-policy">
                    <div class="box-video-about">
                        <video loop autoplay muted controls src="./shared/video/quytrinhlapdat.mp4"></video>
                    </div>
                </section>
                <section class="box-text">
                    <h1 class="box-text-l">
                        <span>LẮP ĐẶT CHUYÊN NGHIỆP</span>
                    </h1>
                    <div class="box-text-r">
                        <p>
                            Khách hàng có thể hoàn toàn yên tâm với chất lượng thi công sản phẩm phim cách nhiệt COOL N
                            LITE. Chúng tôi cam kết sự chuyên nghiệp về mặt thời gian cũng như không gian, đảm bảo đem
                            đến những sản phẩm hoàn mỹ nhất.
                            <span class="hide-text">
                            Phim cách nhiệt COOL N LITE là một trong những nhà tiên phong đầu tiên tại Châu Á có khả
                            năng xử lý sản phẩm trong môi trường KHÔNG BỤI, một công nghệ cao cấp từ các đối tác Nhật
                            Bản và Hoa Kỳ. Các chuyên gia hàng đầu của COOL N LITE được đào tạo và cấp chứng chỉ trực
                            tiếp từ Hoa Kỳ, một niềm tự hào cho chất lượng sản phẩm cao cấp.
                            </span>
                        </p>
                    </div>
                </section>
            </div>
        </section>

        <section class="policy_section">
            <div class="policy_container">
                <div class="policy_wrap">
                    <h1 class="text-title">
                        CHÍNH SÁCH BẢO HÀNH
                    </h1>
                    <div class="box-btn-policy">
                        <a href="https://baohanh.mtfilm.vn/" class="btn-policy btn-detail"><span>Chi tiết bảo
                                hành</span></a>
                        <a target="_blank" href="https://baohanh.mtfilm.vn/" class="btn-policy btn-search"><span>Tra cứu
                                bảo hành</span></a>
                    </div>
                    <div class="policy_list">
                        <ul class="policy_rows">
                            <li class="policy_col">
                                <a href="javascript:void(0)" class="policy_link">
                                    <div class="policy_ico">
                                        <div class="blue_area">

                                        </div>
                                        <div class="box-icons">
                                            <span class="fas fa-award"></span>
                                        </div>
                                    </div>
                                    <div class="policy_txt">
                                        <h2>
                                            10 NĂM BẢO HÀNH BONG TRÓC
                                        </h2>
                                        <p>
                                           COOL N LITE sẽ thay mới khi phim cách nhiệt xuất hiện hiện tượng bóng khí, bong tróc, ô xy hóa, rạn nứt, mất màu hay màu sắc phim không còn đạt tính thẩm mỹ như ban đầu.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="policy_col">
                                <a href="javascript:void(0)" class="policy_link">
                                    <div class="policy_ico">
                                        <div class="blue_area">

                                        </div>
                                        <div class="box-icons">
                                            <span class="fas fa-award"></span>
                                        </div>
                                    </div>
                                    <div class="policy_txt">
                                        <h2>
                                            7 năm bảo hành thông số kỹ thuật
                                        </h2>
                                        <p>
                                            Thời gian bảo hành theo thông số kỹ thuật của phim cách nhiệt COOL N LITE là 7 năm. Đây là chính sách bảo hành đầu tiên và duy nhất tại Việt Nam, hướng đến lợi ích người tiêu dùng.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="policy_col">
                                <a href="javascript:void(0)" class="policy_link">
                                    <div class="policy_ico">
                                        <div class="blue_area">

                                        </div>
                                        <div class="box-icons">
                                            <span class="fas fa-award"></span>
                                        </div>
                                    </div>
                                    <div class="policy_txt">
                                        <h2>
                                            Tem chống giả HOLOGRAM
                                        </h2>
                                        <p>
                                            Tem chống giả HOLOGRAM được dán tại 6 vị trí trên kính (Kính chắn gió, kính hông và kính lưng), nhằm đảm bảo cho khách hàng về quyền lợi và vấn đề hỗ trợ sản phẩm.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="policy_col">
                                <a href="javascript:void(0)" class="policy_link">
                                    <div class="policy_ico">
                                        <div class="blue_area">

                                        </div>
                                        <div class="box-icons">
                                            <span class="fas fa-award"></span>
                                        </div>
                                    </div>
                                    <div class="policy_txt">
                                        <h2>
                                            Kiểm tra thường xuyên và thay mới
                                        </h2>
                                        <p>
                                            Thường xuyên kiểm tra lại thông số kỹ thuật sản phẩm và thay mới hoàn toàn cũng như bảo hành thêm 7 năm nếu như phim bị giảm thông số cách nhiệt.
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="bh_section">
            <div class="bh_container">
                <div class="bh_row">
                    <div class="bh_col_top">
                        <h1>
                            CHÍNH SÁCH CHĂM SÓC KHÁCH HÀNG
                        </h1>
                    </div>
                    <section class="box-built">
                        <div class="container-slide about-slide">
                            <div class="slider-container">
                                <div class="slider sizes-slider3">
                                    <img src="./shared/img/crm-1.jpg" alt="Image">
                                </div>
                                <div class="slider sizes-slider3">
                                    <img src="./shared/img/crm-2.jpg" alt="Image">
                                </div>
                                <div class="box-btn">
                                    <div class="prev-button prev-button2" onclick="plusSlide(-1)">
                                        <i class="fas fa-chevron-left"></i>
                                    </div>
                                    <div class="next-button next-button2" onclick="plusSlide(1)">
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
                                <div class="txt-main">
                                    <p class="txt-top-b">
                                        Khi phim cách nhiệt có bất cứ vấn đề gì, khách hàng liên hệ trực tiếp với bộ
                                        phận chăm sóc khách hàng của MT FILM và bộ phận này sẽ trực tiếp xử lý vấn đề
                                        khách hàng một cách nhanh chóng, hiệu quả mà không phải thông qua các đại lý,
                                        nhà phân phối.
                                    </p>
                                </div>
                            </div>
                        </section>
                    </section>

                </div>
            </div>
        </section>

        <section class="fix-about">
            <div class="main-about">
                <h1>ĐẶT CÂU HỎI CHO COOL N LITE </h1>
                <p class="txt-about">
                    Nếu bạn có bất kỳ câu hỏi nào, hãy liên hệ với chúng tôi. Chúng tôi luôn sẵn sàng trả lời
                </p>
                <a class="btn-lh btn-show-form"><span>Liên hệ ngay</span></a>
            </div>
        </section>

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