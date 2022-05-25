<div class="box-menu">
        <header class="header">
          <h1 class="logo">
            <a href="./index.php" class="logo-link">
              <img src="./shared/img/logo.png" alt="Logo Cool N Lite" />
            </a>
          </h1>
          <div class="block-menu">
            <ul class="list-menu">
                <?php
                 $sql = "SELECT * FROM `menu` ORDER BY `position` ASC";
                 $menu = executeResult($sql);
                 foreach($menu as $mn){
                ?>
                <li class="items-menu">
                    <a class="link-menu" href="<?php echo ''.$mn['url'].''?>"><?php echo ''.$mn['name'].''?></a>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div class="search-box search-box-desktop">
            <input type="text" name="search-text" id="search-text" placeholder="Tìm kiếm" autocomplete="off" />
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

        <ul class="list-menu">

        <li class="items-menu">
            <a class="link-menu" href="./index.php">Home</a>
        </li>
        <?php
            $sql = "SELECT * FROM `menu` ORDER BY `position` ASC";
            $menu = executeResult($sql);
            foreach($menu as $mn){
        ?>
            <li class="items-menu">
                <a class="link-menu" href="<?php echo ''.$mn['url'].''?>"><?php echo ''.$mn['name'].''?></a>
            </li>
        <?php } ?>
        </ul>
        <div class="search-box search-box-mobile">
        <input type="text" name="search-text" id="search-text" placeholder="Tìm kiếm" autocomplete="off" />
        <button type="submit" id="btn-search">
            <i class="far fa-search"></i>
        </button>
        <div class="result-search" id="result-search">
        </div>
        </div>
    </div>
    <div class="modal-background"></div>
</div>