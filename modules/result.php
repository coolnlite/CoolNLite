<?php
require_once('../config/config.php');
require_once('../config/dbhelper.php');
require_once('../admin/modules/function.php');

//Tìm theo từ khóa

if (
    isset($_POST['page']) && isset($_POST['id_keyword']) && isset($_POST['keyword'])
) {
    $page = mysqli_real_escape_string($conn, $_POST['page']);
    $id_keyword = mysqli_real_escape_string($conn, $_POST['id_keyword']);
    $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);

    $sql = "SELECT * FROM `news_keyword` WHERE id_news =  $id_keyword AND id_tag = $keyword ";

    $sql = "SELECT COUNT(id_posts) AS total 
    FROM posts WHERE id_users = $id_users";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_record = $row['total']; //Tổng sổ mẫu tin

    $limit = 5; //Số mẫu tin giới hạn
    $page = 1; //trang hiện tại mặc định là 1
    if ($_POST['page'] > 1) { //trang gửi lên lớn hơn 1
        $start = (($_POST['page'] - 1) * $limit); //vị trí bắt đầu
        $page = $_POST['page']; //gán trang hiện tại cho trang gửi lên
    } else {
        $start = 0; //gán vị trí bắt đầu bằng 0
    }

    //Đã có vị trí bắt đầu và kết thúc thì view dữ liệu lên
    $output = '';
    $sql = "SELECT * FROM posts WHERE 
    id_users = $id_users ORDER BY created_at DESC LIMIT $start,$limit";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
            $sql = 'SELECT img_user,fullname,id_users 
            FROM users WHERE id_users = ' . $row['id_users'] . '';
            $users = mysqli_query($conn, $sql);
            foreach ($users as $us) {
                $img = $us['img_user'];
                $fullname = $us['fullname'];
            }
            $output .= '<article class="card-columns posts">
                <div class="card-rows">
                    <a href="posts.php?p=' . $row['url'] . '">
                        <h4>
                        ' . $row['title'] . '
                        </h4>
                        <div class="img-list">
                            <img src="' . $row['image_S'] . '" alt="" />
                        </div>
                    </a>
                    <div class="content-list">
                        <h6>
                        ' . $row['summary'] . ' 
                            </h6>
                        <nav class="nav-users">
                            <div class="users-info">
                                <a href="users.php?u=' . $row['id_users'] . '">
                                    <img src="' . $img . '" alt="" />
                                    <span>' . $fullname . '</span>
                                </a>
                            </div>
                            <span class="time">'.facebook_time_ago($row['created_at']). ' </span>
                        </nav>
                    </div>
                </div>
            </article>';
        } //posts
    } else {
        $output .= '<p style="margin: 2em 0em;">Không tìm thấy dữ liệu</p>';
    }
    $output .= '<ul class="pagination">';
    $total_links = ceil($total_record / $limit); //Tổng số trang
    $previous_link = ''; //Trang trước
    $next_link = ''; //Trang kế tiếp
    $page_link = ''; //các trang 

    if ($total_links > 4) {
        if ($page < 5) {
            for ($count = 1; $count <= 5; $count++) {
                $page_array[] = $count;
            }
            $page_array[] = '...';
            $page_array[] = $total_links;
        } else {
            $end_limit = $total_links - 5; //
            if ($page > $end_limit) {
                $page_array[] = 1;
                $page_array[] = '...';
                for ($count = $end_limit; $count <= $total_links; $count++) {
                    $page_array[] = $count;
                }
            } else {
                $page_array[] = 1;
                $page_array[] = '...';
                for ($count = $page - 1; $count <= $page + 1; $count++) {
                    $page_array[] = $count;
                }
                $page_array[] = '...';
                $page_array[] = $total_links;
            }
        }
    } else {
        for ($count = 1; $count <= $total_links; $count++) {
            $page_array[] = $count;
        }
    }

    for ($count = 0; $count < count($page_array); $count++) {
        if ($page == $page_array[$count]) {
            $page_link .= '
    <li class="page-item active">
      <a class="page-link" href="#">' . $page_array[$count] . ' <span class="sr-only">(current)</span></a>
    </li>
    ';

            $previous_id = $page_array[$count] - 1;
            if ($previous_id > 0) {
                $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' . $previous_id . '"><i class="fas fa-chevron-left"></i></a></li>';
            } else {
                $previous_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
      </li>
      ';
            }
            $next_id = $page_array[$count] + 1;
            if ($next_id >= $total_links) {
                $next_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
      </li>
        ';
            } else {
                $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' . $next_id . '"><i class="fas fa-chevron-right"></i></a></li>';
            }
        } else {
            if ($page_array[$count] == '...') {
                $page_link .= '
      <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
      </li>
      ';
            } else {
                $page_link .= '
      <li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' . $page_array[$count] . '">' . $page_array[$count] . '</a></li>
      ';
            }
        }
    }

    $output .= $previous_link . $page_link . $next_link;
    $output .= '
  </ul>
';

    echo $output;
}

?>
