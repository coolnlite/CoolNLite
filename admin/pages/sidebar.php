<div class="navigation">
    <ul>
        <li>
            <a>
                <img src="../shared/img/logo.png" alt="Cool N Lite">
            </a>
        </li>
        <?php
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
            
            $sql = "SELECT `url`,`icon`,`name` FROM `sidebar` ";
            $sidebar = executeResult($sql);
            foreach($sidebar as $sb){
        ?>
        <li class="" >
            <a href="<?php echo ''.$DOMAIN.$sb['url'].''?>">
                <span class="icon">
                    <?php echo ''.$sb['icon'].''?>
                </span>
                <span class="title"><?php echo ''.$sb['name'].''?></span>
            </a>
        </li>
        <?php
         }//Kết thúc vòng lặp sidebar
        ?>
    </ul>
</div>