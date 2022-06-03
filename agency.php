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
    <title>Đại Lý - COOL N LITE</title>
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
            $sql = "SELECT * FROM `agency`";
            $agency = executeResult($sql);
            foreach($agency as $ag){
        ?>
            <div class="item-agency">
                <div class="container-agency">

                    <div class="col-img">
                        <div class="box-img">
                            <img src=".<?php print $ag['img'] ?>" alt="Đại lý">
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
    <script src="./public/js/slider.js"></script>
    <script src="./public/js/script.js"></script>
    <!-- javasript -->
</body>

</html>