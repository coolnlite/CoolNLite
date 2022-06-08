<!-- ======================= Cards ================== -->
<div class="cardBox">
    <div class="card">
        <div>
            <?php
                $sql = "SELECT count(*) AS allcount FROM `contact`";
                $fetch = executeResult($sql);
                $allcount = $fetch[0]['allcount'];
            ?>
            <div class="numbers"><?php print $allcount?></div>
            <div class="cardName">Tổng số khách hàng</div>
        </div>

        <div class="iconBx">
            <i class="far fa-users"></i>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">0</div>
            <div class="cardName">Tổng số bình luận</div>
        </div>

        <div class="iconBx">
            <i class="far fa-comments"></i>
        </div>
    </div>

    <div class="card">
        <div>
            <?php
                $sql = "SELECT count(*) AS allcount FROM `news`";
                $fetch = executeResult($sql);
                $allcount = $fetch[0]['allcount'];
            ?>
            <div class="numbers"><?php print $allcount?></div>
            <div class="cardName">Tổng số bài viết</div>
        </div>

        <div class="iconBx">
            <i class="far fa-book-reader"></i>
        </div>
    </div>

    <div class="card">
        <div>
            <?php
                $sql = "SELECT MAX(view) FROM news WHERE `status` = 1 ";
                $view = executeResult($sql);
                foreach($view as $v){
                    
                }

            ?>
            <div class="numbers"><?php print $v['MAX(view)']?></div>
            <div class="cardName">Bài viết có lượt xem cao nhất</div>
        </div>

        <div class="iconBx">
            <i class="far fa-eye"></i>
        </div>
    </div>
</div>