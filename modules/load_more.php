<?php
require_once('../config/config.php');
require_once('../config/dbhelper.php');
require_once('../admin/modules/function.php');

    if (isset($_POST['news'])) {
        $row = $_POST['row'];
        $rowperpage = 5;
        $sql = "SELECT * FROM  news ORDER BY id DESC LIMIT $row, $rowperpage";
        $news = executeResult($sql);
        foreach ($news as $ns) {
    ?>
       <li class="items-news news">
                <a class="link-news" href="./post.php?url=<?php echo ''.$ns['url'].''?>">
                    <article class="posts">
                        <figure class="box-img fix">
                        <img src=".<?php echo ''.$ns['thumnail'].''?>" alt="ảnh đại điện">
                        <i class="fas fa-eye"></i>
                        </figure>
                        <div class="box-content">
                        <h3 class="limit-2">
                            <?php echo ''.$ns['title'].''?>
                        </h3>
                        <div class="box-all">
                            <div class="arthur">
                                <?php
                                    $id_users = $ns['id_user'];
                                    $sql = "SELECT `full_name`, `image` FROM users WHERE id = '$id_users'";
                                    $users = executeResult($sql);
                                    foreach($users as $us){

                                ?>
                                <div class="box-arthur">
                                    <img src=".<?php echo ''.$us['image'].''?>" alt="Avatar">
                                </div>
                                <span class="name">
                                    <?php echo ''.$us['full_name'].''?>
                                </span>
                                <?php
                                } 
                                ?>
                            </div>
                            <div class="time-ago">
                                <span>
                                    <?php echo ''.facebook_time_ago($ns['time']).''?>
                                </span>
                            </div>
                        </div>
                        <div class="describe">
                            <p class="limit-3">
                            <?php echo ''.$ns['description'].''?>
                            </p>
                        </div>
                        </div>
                    </article>
                </a>
            </li>     
        <?php }
         //Kết thúc foreach
        echo '<a class="btn-show btn-news">Xem Thêm</a>';
    } //Kết thúc if hot
?>