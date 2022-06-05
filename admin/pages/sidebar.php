<div class="navigation">
    <ul>
        <li>
            <a>
                <img src="../shared/img/logo.png" alt="Cool N Lite">
            </a>
        </li>
        <?php
            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
            
            $sql = "SELECT `url`,`icon`,`name` FROM `sidebar` ORDER BY `position` ASC";
            $sidebar = executeResult($sql);
            foreach($sidebar as $sb){
        ?>
        <li class="<?php $sb['url'] == $curPageName ? print "hovered" : print '' ?>" >
            <a href="<?php
             if($sb['url'] == 'account.php'){
                print $DOMAIN.$sb['url'].'?u='.$user_id.'&token='.$token.'';
             }else{
                print $DOMAIN.$sb['url'];
             }
            ?>">
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