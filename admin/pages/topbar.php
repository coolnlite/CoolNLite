<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="search">
        <label>
            <input type="text" placeholder="Tìm kiếm" autocomplete="off">
            <i class="far fa-search"></i>
        </label>
    </div>
    <?php
        if(isset($user_id) == true){
            
            $sql = "SELECT `full_name`,`image` FROM `users` WHERE `id` = $user_id";
            $user = executeResult($sql);
            foreach($user as $us){

       
    ?>
    <a href="../account.php?id=<?php echo '' .$user_id. '' ?>" class="box-user">
        <span class="name-user"><?php echo '' . $us['full_name'] . '' ?></span>
        <div class="user">
            <img src="<?php echo '' . $us['image'] . '' ?>" alt="Avatar">
        </div>
    </a>
    <?php
        }
    }
    ?>
</div>