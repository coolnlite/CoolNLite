<div class="box-menu">
        <header class="header">
          <h1 class="logo">
            <a href="<?php print $base_url?>" class="logo-link">
              <img src="<?php print $base_url?>/shared/img/logo.png" alt="Logo Cool N Lite" />
            </a>
          </h1>
          <div class="block-menu">
            <ul class="list-menu">
                <?php
                 $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                 $sql = "SELECT * FROM `menu` ORDER BY `position` ASC";
                 $menu = executeResult($sql);
                 foreach($menu as $mn){
                ?>
                <li class="items-menu">
                    <a class="link-menu <?php $mn['url'] == $curPageName ? print "hovered" : print '' ?>" href="<?php echo ''.$mn['url'].''?>" title="<?php echo ''.$mn['name'].''?>">
                    <?php echo ''.$mn['name'].''?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div title="Tìm kiếm" class="search-box search-box-desktop" id="search-box-desktop">
            <input type="search" name="search-text" id="search-text" placeholder="Tìm kiếm" autocomplete="off" />
            <button type="submit" id="btn-search">
              <i class="far fa-search"></i>
            </button>
            <div class="result-search" id="result-search">
            </div>
          </div>
          <button class="btn-menu-mobile btn-open" type="button">
            <span>Menu</span>
          </button>
        </header>

        <div class="modal-menu list-mobile-menu">
        <div class="block-close">
        <span class="fas fa-times click-close"></span>
        </div>
        <div class="block-search-mb" id="block-search-mb" title="Tìm kiếm">
            <input type="search" name="search-txt" id="search-txt" placeholder="Tìm kiếm" autocomplete="off" />
            <button type="submit" id="btn-search-mb">
              <i class="far fa-search"></i>
            </button>
            <div class="result-search-mb" id="result-search-mb">
            </div>
            <div class="bg-search-mb" id="bg-search-mb">
            </div>
        </div>
        <ul class="list-menu">
        <?php
          $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
        ?>
        <li class="items-menu">
            <a class="link-menu <?php $curPageName == 'index.php' ? print "hovered" : print '' ?>" href="./">Home</a>
        </li>
        <?php
            $sql = "SELECT * FROM `menu` ORDER BY `position` ASC";
            $menu = executeResult($sql);
            foreach($menu as $mn){
        ?>
            <li class="items-menu">
                <a class="link-menu <?php $mn['url'] == $curPageName ? print "hovered" : print '' ?>" href="<?php echo ''.$mn['url'].''?>"><?php echo ''.$mn['name'].''?></a>
            </li>
        <?php } ?>
        </ul>
    </div>
    <div class="modal-background"></div>
</div>