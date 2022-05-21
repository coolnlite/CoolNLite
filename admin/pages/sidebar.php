<?php
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<div class="navigation">
    <ul>
        <li>
            <a>
                <img src="../shared/img/logo.png" alt="Cool N Lite">
            </a>
        </li>

        <li class="<?php
                if($curPageName == 'dashboard.php'){
                    echo '"hovered"';
                }else{
                    echo '';
                }
            ?>" >
            <a href="<?php echo ''.$DOMAIN.'dashboard.php'?>">
                <span class="icon">
                    <i class="fas fa-home"></i>
                </span>
                <span class="title">Bảng điều khiển</span>
            </a>
        </li>

        <li class="<?php
                if($curPageName == 'news.php'){
                    echo '"hovered"';
                }else{
                    echo '';
                }
            ?>">
            <a href="<?php echo ''.$DOMAIN.'news.php'?>">
                <span class="icon">
                    <i class="fas fa-books"></i>
                </span>
                <span class="title">Bài viết</span>
            </a>
        </li>

        <li class="<?php
                if($curPageName == 'customers.php'){
                    echo '"hovered"';
                }else{
                    echo '';
                }
            ?>">
            <a href="<?php echo ''.$DOMAIN.'customers.php'?>">
                <span class="icon">
                    <i class="fas fa-users"></i>
                </span>
                <span class="title">Khách hàng</span>
            </a>
        </li>
        <li class="<?php
                if($curPageName == 'account.php'){
                    echo '"hovered"';
                }else{
                    echo '';
                }
            ?>">
            <a href="<?php echo ''.$DOMAIN.'account.php'?>">
                <span class="icon">
                    <i class="fas fa-user-cog"></i>
                </span>
                <span class="title">Tài khoản</span>
            </a>
        </li>
        <li class="<?php
                if($curPageName == 'setting.php'){
                    echo '"hovered"';
                }else{
                    echo '';
                }
            ?>">
            <a href="<?php echo ''.$DOMAIN.'setting.php'?>">
                <span class="icon">
                    <i class="fas fa-cog"></i>
                </span>
                <span class="title">Cài đặt</span>
            </a>
        </li>

        <li>
            <a href="./modules/logout.php">
                <span class="icon">
                    <i class="fas fa-sign-out-alt"></i>
                </span>
                <span class="title">Đăng xuất</span>
            </a>
        </li>
    </ul>
</div>