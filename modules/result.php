<?php
require_once('../config/config.php');
require_once('../config/dbhelper.php');
require_once('../admin/modules/function.php');

//Live search

if (isset($_POST['text'])) {
    $text = mysqli_real_escape_string($conn, $_POST['text']);

    $sql = "SELECT * FROM `news` WHERE title LIKE '$text%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
            echo '
              <article class="card-columns">
              <a href="'.$base_url.'/' . $row['url'] . '.html">
                <div class="card-img" title="' . $row['title'] . ' ">
                    <img src="'.$base_url.''.$row['thumnail'].'" alt ="thumnail"/>
                </div>
                  <div class="card-title" title="' . $row['title'] . ' ">
                      <h5>
                        ' . $row['title'] . ' 
                      </h5>
                  </div>
              </a>
          </article>
              ';
        }
    } else {
        echo '<p class="not-data">Không tìm thấy kết quả</p>';
    }
}

//Search chuyển trang 

if (
    isset($_POST['page']) && isset($_POST['search'])
) {
    $page = mysqli_real_escape_string($conn, $_POST['page']);
    $search = mysqli_real_escape_string($conn, $_POST['search']);


    $sql = "SELECT COUNT(id) AS total 
    FROM news WHERE title LIKE '$search%' ";
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
    $sql = "SELECT * FROM `news` WHERE title LIKE '$search%' LIMIT $start,$limit";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
            $sql = 'SELECT * FROM users WHERE id = ' . $row['id_user'] . '';
            $users = mysqli_query($conn, $sql);
            foreach ($users as $us) {
                $img = $us['image'];
                $fullname = $us['full_name'];
            }
            $output .= '
            <li class="items-news news">
                           <a class="link-news" href="'.$base_url.'/' . $row['url'] . '.html">
                              <article class="posts">
                                 <figure class="box-img fix title="'.$row['title'].'">
                                    <img src="'.$base_url.''.$row['thumnail'].'" alt="thumnail">
                                    <i class="fas fa-eye"></i>
                                 </figure>
                                 <div class="box-content">
                                    <h3 class="limit-2" title="'.$row['title'].'">
                                      '.$row['title'].'
                                    </h3>
                                    <div class="box-all">
                                       <div class="arthur">
                                          <div class="box-arthur">
                                             <img src="'.$base_url.''.$img.'" alt="avatar">
                                          </div>
                                          <span class="name">
                                             '.$fullname.'
                                          </span>
                                          <?php
                                            } 
                                          ?>
                                       </div>
                                       <div class="time-ago">
                                          <span>
                                             '.facebook_time_ago($row['time']).'
                                          </span>
                                       </div>
                                    </div>
                                    <div class="describe">
                                       <p class="limit-3">
                                      '.$row['description'].'
                                       </p>
                                    </div>
                                 </div>
                              </article>
                           </a>
                        </li>
            ';
        } //posts
    } else {
        $output .= '<p style="margin: 2em 0em;">Không tìm thấy từ khóa trên</p>';
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

//Search trên điện thoại

//Live search

if (isset($_POST['text_mb'])) {
    $text = mysqli_real_escape_string($conn, $_POST['text_mb']);

    $sql = "SELECT * FROM `news` WHERE title LIKE '$text%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
            echo '
                <article class="card-search" title=" '.$row['title'].'">
                <a href="'.$base_url.'/' . $row['url'] . '.html">
                <div class="img-search" >
                <img src="'.$base_url.$row['thumnail'].'" alt="thumnail">
                </div>
                <div class="content-search">
                <h3 title=" '.$row['title'].'">
                    '.$row['title'].'
                </h3>
                </div>
                </a>
            </article>
              ';
        }
    } else {
        echo '<p class="not-data">Không tìm thấy kết quả</p>';
    }
}

//Search đại lý

if (isset($_POST['text_agency'])) {
    $text = mysqli_real_escape_string($conn, $_POST['text_agency']);

    $sql = "SELECT * FROM `agency` WHERE `address` LIKE '%$text%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
            echo '
            <div class="card_agency">
            <a href="#agency_'.$row['id'].'">
                <div class="card-img">
                    <img src="'.$base_url.$row['img'].'" alt="ảnh đại lý">
                </div>
                <div class="card-title">
                    <h6>
                        Tên cửa hàng : 
                        <span>
                            '.$row['name'].'
                        </span>
                    </h6>
                    <p>
                        Địa chỉ :
                        <span>
                        '.$row['address'].'
                        </span>
                    </p>
                </div>
            </a>
        </div>
              ';
        }
    } else {
        echo '<p class="not-data">Không tìm thấy đại lý gần đây</p>';
    }
}

?>
