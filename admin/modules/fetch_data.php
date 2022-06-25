<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('function.php');

//View Danh sách người dùng
if(isset($_POST['account']) && !empty($_POST['user_id']) && isset($_POST['permission'])){
    $user_id = $_POST['user_id'];
    $permission = $_POST['permission'];
    $output= array();
    $sql = "SELECT * FROM `users` ";
    $totalQuery = mysqli_query($conn,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);
    $columns = array(
        0 => 'id',
        1 => 'user_name',
        2 => 'email',
        3 => 'position',
        4 => 'full_name',
        5 => 'image',
        6 => 'status',
        7 => 'time'
    );
    
    if(isset($_POST['search']['value']))
    {
        $search_value = $_POST['search']['value'];
        $sql .= " WHERE `user_name` like '%".$search_value."%'";
        $sql .= " OR `email` like '%".$search_value."%'";
        $sql .= " OR `full_name` like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
        $column_name = $_POST['order'][0]['column'];
        $order = $_POST['order'][0]['dir'];
        $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
        $sql .= "ORDER BY `id` desc ";
    }

    if($_POST['length'] != -1)
    {
        $start = $_POST['start'];
        $length = $_POST['length'];
        $sql .= " LIMIT  ".$start.", ".$length;
    }	
   
    $query = mysqli_query($conn,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();

    while($row = mysqli_fetch_assoc($query))
    {
        $sub_array = array();
        $sub_array[] = $row['id'];
        $sub_array[] = $row['user_name'];
        $sub_array[] = $row['email'];
        $sub_array[] = $row['position'] == 2 ? 'Administrator' : 'Users' ;
        $sub_array[] = $row['full_name'] ;
        $sub_array[] = '<img src="'.$base_url.$row['image'].'" alt="ảnh đại diện">';
        $sub_array[] = $row['status'] == 1 ? 'Đang hoạt động'  : 'Đang ngủ' ;
        $sub_array[] = facebook_time_ago($row['time']);
        if($permission == 2){
            if($row['position'] == $permission){
                $sub_array[] = '';
            }
            if($row['id'] != $user_id ){
                $sub_array[] = '<a title="Xóa" href="javascript:void();" data-id="'.$row['id'].'"  
                class="btn btn-danger btn-sm deleteBtn" >
                <i class="fas fa-trash-alt"></i>
                </a>
                <a title="Trạng thái" href="javascript:void();" data-id="'.$row['id'].'" data-toggle="modal" 
                data-target="#changeUsers" class="btn btn-warning btn-sm editBtn"  >
                <i class="fas fa-ban"></i>
                </a>';
            }else{
                $sub_array[] = '';
            }
        }
        $data[] = $sub_array;
    }

    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' =>$count_rows ,
        'recordsFiltered'=>   $total_all_rows,
        'data'=>$data,
    );
    echo  json_encode($output);

}

//View Đại Lý
    if(isset($_POST['agency'])){
        $output= array();
        $sql = "SELECT * FROM `agency`";
        $totalQuery = mysqli_query($conn,$sql);
        $total_all_rows = mysqli_num_rows($totalQuery);
        $columns = array(
            0 => 'id',
            1 => 'img',
            2 => 'name',
            3 => 'address',
            4 => 'phone',
            5 => 'time',
        );
        
        if(isset($_POST['search']['value']))
        {
            $search_value = $_POST['search']['value'];
            $sql .= " WHERE `name` like '%".$search_value."%'";
            $sql .= " OR `address` like '%".$search_value."%'";
            $sql .= " OR `phone` like '%".$search_value."%'";
        }

        if(isset($_POST['order']))
        {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
        }
        else
        {
            $sql .= " ORDER BY `id` desc";
        }

        if($_POST['length'] != -1)
        {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT  ".$start.", ".$length;
        }	
       
        $query = mysqli_query($conn,$sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();

        while($row = mysqli_fetch_assoc($query))
        {
            $sub_array = array();
            $sub_array[] = $row['id'];
            $sub_array[] = '<img src="'.$base_url.$row['img'].'" alt="ảnh đại lý">';
            $sub_array[] = $row['name'];
            $sub_array[] = $row['address'];
            $sub_array[] = $row['phone'] ;
            $sub_array[] = facebook_time_ago($row['time']);
            $sub_array[] = 
            '
            <a title="Xóa" href="javascript:void();" data-id="'.$row['id'].'"  
            class="btn btn-danger btn-sm deleteBtn" >
            <i class="fas fa-trash-alt"></i>
            </a>
            <a title="Sửa" href="javascript:void();" data-id="'.$row['id'].'" data-toggle="modal" 
            data-target="#editAgency" class="btn btn-warning btn-sm editBtn"  >
            <i class="fas fa-user-edit"></i>
            </a>
            ';
            $data[] = $sub_array;
        }

        $output = array(
            'draw'=> intval($_POST['draw']),
            'recordsTotal' =>$count_rows ,
            'recordsFiltered'=>   $total_all_rows,
            'data'=>$data,
        );
        echo  json_encode($output);

    }

// VIEW KEYWORD

if(isset($_POST['tag_news'])){
    $output= array();
    $sql = "SELECT * FROM `keyword` ";

    $totalQuery = mysqli_query($conn,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);
   
    $columns = array(
        0 => 'id',
        1 => 'name',
        2 => 'time',
    );
    
    if(isset($_POST['search']['value']))
    {
        $search_value = $_POST['search']['value'];
        $sql .= " WHERE `id` like '%".$search_value."%'";
        $sql .= " OR `name` like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
        $column_name = $_POST['order'][0]['column'];
        $order = $_POST['order'][0]['dir'];
        $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
        $sql .= " ORDER BY `id` desc";
    }

    if($_POST['length'] != -1)
    {
        $start = $_POST['start'];
        $length = $_POST['length'];
        $sql .= " LIMIT  ".$start.", ".$length;
    }	
   
    $query = mysqli_query($conn,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();

    while($row = mysqli_fetch_assoc($query))
    {
        $sub_array = array();
        $sub_array[] = $row['id'];
        $sub_array[] = $row['name'];
        $sub_array[] = facebook_time_ago($row['time']);
        $sub_array[] = 
        '
        <a title="Xóa" href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >
        <i class="fas fa-trash-alt"></i>
        </a>
        <a title="Sửa" data-id="'.$row['id'].'" data-toggle="modal" data-target="#editKey"  class="btn btn-warning btn-sm viewBtn">
        <i class="fas fa-user-edit"></i>
        </a>
        ';
        $data[] = $sub_array;
    }

    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' =>$count_rows ,
        'recordsFiltered'=>   $total_all_rows,
        'data'=>$data,
    );
    echo  json_encode($output);

}
    // VIEW NEWS

    if(isset($_POST['news'])){
        $output= array();
        $sql = "SELECT * FROM `news` ";

        $totalQuery = mysqli_query($conn,$sql);
        $total_all_rows = mysqli_num_rows($totalQuery);
       
        $columns = array(
            0 => 'id',
            1 => 'url',
            2 => 'thumnail',
            3 => 'title',
            4 => 'description',
            5 => 'view',
            6 => 'status',
            7 => 'id_user',
            8 => 'time'
        );
        
        if(isset($_POST['search']['value']))
        {
            $search_value = $_POST['search']['value'];
            $sql .= " WHERE `url` like '%".$search_value."%'";
            $sql .= " OR `title` like '%".$search_value."%'";
            $sql .= " OR `description` like '%".$search_value."%'";
            $sql .= " OR `view` like '%".$search_value."%'";
            $sql .= " OR `status` like '%".$search_value."%'";
        }

        if(isset($_POST['order']))
        {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];
            $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
        }
        else
        {
            $sql .= " ORDER BY `id` desc";
        }

        if($_POST['length'] != -1)
        {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $sql .= " LIMIT  ".$start.", ".$length;
        }	
       
        $query = mysqli_query($conn,$sql);
        $count_rows = mysqli_num_rows($query);
        $data = array();

        while($row = mysqli_fetch_assoc($query))
        {
            $id_users = $row['id_user'];
            $sql = "SELECT `full_name` FROM `users` WHERE `id` = $id_users ";
            $users = executeResult($sql);
            foreach ($users as $us){
                $full_name = $us['full_name'];
            }

            $sub_array = array();
            $sub_array[] = $row['id'];
            $sub_array[] = $row['url'];
            $sub_array[] = '<img src="'.$base_url.$row['thumnail'].'" alt="ảnh đại diện">';
            $sub_array[] = $row['title'];
            $sub_array[] = $row['description'];
            $sub_array[] = $row['view'] ;
            $sub_array[] = status($row['status']);
            $sub_array[] = $full_name ;
            $sub_array[] = facebook_time_ago($row['time']);
            $sub_array[] = 
            '
            <a title="Xóa" href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >
            <i class="fas fa-trash-alt"></i>
            </a>
            <a title="Sửa" href="../admin/edit_news.php?id='.$row['id'].'" class="btn btn-warning btn-sm" >
            <i class="fas fa-user-edit"></i>
            </a>
            <a title="SEO Bài viết" href="../admin/seo_news.php?id='.$row['id'].'"  class="btn btn-primary btn-sm" >
                SEO
            </a>
            <a title="Thêm từ khóa" href="tag_news.php?id='.$row['id'].'"  class="btn btn-secondary btn-sm" >
                KEYWORD
            </a>
            ';
            $data[] = $sub_array;
        }

        $output = array(
            'draw'=> intval($_POST['draw']),
            'recordsTotal' =>$count_rows ,
            'recordsFiltered'=>   $total_all_rows,
            'data'=>$data,
        );
        echo  json_encode($output);

    }

// VIEW CUSTOMERS

if(isset($_POST['customers'])){
    $output= array();
    $sql = "SELECT * FROM `contact` ";

    $totalQuery = mysqli_query($conn,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);
   
    $columns = array(
        0 => 'id_contact',
        1 => 'full_name',
        2 => 'tel',
        3 => 'models',
        4 => 'area',
        5 => 'message',
        6 => 'time'
    );
    
    if(isset($_POST['search']['value']))
    {
        $search_value = $_POST['search']['value'];
        $sql .= " WHERE `full_name` like '%".$search_value."%'";
        $sql .= " OR `tel` like '%".$search_value."%'";
        $sql .= " OR `models` like '%".$search_value."%'";
        $sql .= " OR `area` like '%".$search_value."%'";
        $sql .= " OR `message` like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
        $column_name = $_POST['order'][0]['column'];
        $order = $_POST['order'][0]['dir'];
        $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
        $sql .= " ORDER BY `id_contact` desc";
    }

    if($_POST['length'] != -1)
    {
        $start = $_POST['start'];
        $length = $_POST['length'];
        $sql .= " LIMIT  ".$start.", ".$length;
    }	
   
    $query = mysqli_query($conn,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();

    while($row = mysqli_fetch_assoc($query))
    {
        $sub_array = array();
        $sub_array[] = $row['id_contact'];
        $sub_array[] = $row['full_name'];
        $sub_array[] = $row['tel'];
        $sub_array[] = $row['models'];
        $sub_array[] = $row['area'];
        $sub_array[] = countStr($row['message']) ;
        $sub_array[] = facebook_time_ago($row['time']);
        $sub_array[] = 
        '
        <a title="Xóa" href="javascript:void();" data-id="'.$row['id_contact'].'"  class="btn btn-danger btn-sm deleteBtn" >
        <i class="fas fa-trash-alt"></i>
        </a>
        <a title="Xem" data-toggle="modal" data-target="#viewCustomer" href="javascript:void();" data-id="'.$row['id_contact'].'"  class="btn btn-info btn-sm viewBtn" >
        <i class="fas fa-eye"></i>
        </a>
        ';
        $data[] = $sub_array;
    }

    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' =>$count_rows ,
        'recordsFiltered'=>   $total_all_rows,
        'data'=>$data,
    );
    echo  json_encode($output);

}

//Hiện thị menu

if(isset($_POST['menu'])){
    $output= array();
    $sql = "SELECT * FROM `menu` ";

    $totalQuery = mysqli_query($conn,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);
   
    $columns = array(
        0 => 'id',
        1 => 'name',
        2 => 'url',
        3 => 'url_real',
        4 => 'position',
        5 => 'time'
    );
    
    if(isset($_POST['search']['value']))
    {
        $search_value = $_POST['search']['value'];
        $sql .= " WHERE `name` like '%".$search_value."%'";
        $sql .= " OR `url` like '%".$search_value."%'";
        $sql .= " OR `url_real` like '%".$search_value."%'";
        $sql .= " OR `position` like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
        $column_name = $_POST['order'][0]['column'];
        $order = $_POST['order'][0]['dir'];
        $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
        $sql .= " ORDER BY `position` asc";
    }

    if($_POST['length'] != -1)
    {
        $start = $_POST['start'];
        $length = $_POST['length'];
        $sql .= " LIMIT  ".$start.", ".$length;
    }	
   
    $query = mysqli_query($conn,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();

    while($row = mysqli_fetch_assoc($query))
    {
        $sub_array = array();
        $sub_array[] = $row['id'];
        $sub_array[] = $row['name'];
        $sub_array[] = $row['url'];
        $sub_array[] = $row['url_real'];
        $sub_array[] = $row['position'];
        $sub_array[] = facebook_time_ago($row['time']);
        $sub_array[] = 
        '
        <a title="Xóa" href="javascript:void();" data-id="'.$row['id'].'"  
        class="btn btn-danger btn-sm deleteMenu" >
        <i class="fas fa-trash-alt"></i>
        </a>
        <a title="Sửa" data-toggle="modal" data-target="#editMenu" href="javascript:void();" data-id="'.$row['id'].'"
        class="btn btn-warning btn-sm editMenuBtn" >
        <i class="fas fa-user-edit"></i>
        </a>
        ';
        $data[] = $sub_array;
    }

    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' =>$count_rows ,
        'recordsFiltered'=>   $total_all_rows,
        'data'=>$data,
    );
    echo  json_encode($output);

}

//Hiện thị footer

if(isset($_POST['footer'])){
    $output= array();
    $sql = "SELECT * FROM `footer` ";

    $totalQuery = mysqli_query($conn,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);
   
    $columns = array(
        0 => 'id',
        1 => 'copyright',
        2 => 'address',
        3 => 'phone',
        4 => 'mail',
        5 => 'title',
        6 => 'subtitle',
        7 => 'time',
    );
    
    if(isset($_POST['search']['value']))
    {
        $search_value = $_POST['search']['value'];
        $sql .= " WHERE `copyright` like '%".$search_value."%'";
        $sql .= " OR `address` like '%".$search_value."%'";
        $sql .= " OR `phone` like '%".$search_value."%'";
        $sql .= " OR `mail` like '%".$search_value."%'";
        $sql .= " OR `title` like '%".$search_value."%'";
        $sql .= " OR `subtitle` like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
        $column_name = $_POST['order'][0]['column'];
        $order = $_POST['order'][0]['dir'];
        $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
        $sql .= " ORDER BY `id` desc";
    }

    if($_POST['length'] != -1)
    {
        $start = $_POST['start'];
        $length = $_POST['length'];
        $sql .= " LIMIT  ".$start.", ".$length;
    }	
   
    $query = mysqli_query($conn,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();

    while($row = mysqli_fetch_assoc($query))
    {
        $sub_array = array();
        $sub_array[] = $row['id'];
        $sub_array[] = $row['copyright'];
        $sub_array[] = $row['address'];
        $sub_array[] = $row['phone'];
        $sub_array[] = $row['mail'];
        $sub_array[] = $row['title'];
        $sub_array[] = $row['subtitle'];
        $sub_array[] = facebook_time_ago($row['time']);
        $sub_array[] = 
        '
        <a title="Sửa" data-toggle="modal" data-target="#editFooter" href="javascript:void();" data-id="'.$row['id'].'"
        class="btn btn-warning btn-sm editFooterBtn" >
        <i class="fas fa-user-edit"></i>
        </a>
        ';
        $data[] = $sub_array;
    }

    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' =>$count_rows ,
        'recordsFiltered'=>   $total_all_rows,
        'data'=>$data,
    );
    echo  json_encode($output);

}

//Hiện thị sidebar

if(isset($_POST['sidebar'])){
    $output= array();
    $sql = "SELECT * FROM `sidebar` ";

    $totalQuery = mysqli_query($conn,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);
   
    $columns = array(
        0 => 'id',
        1 => 'url',
        2 => 'icon',
        3 => 'name',
        4 => 'position',
        5 => 'time'
    );
    
    if(isset($_POST['search']['value']))
    {
        $search_value = $_POST['search']['value'];
        $sql .= " WHERE `url` like '%".$search_value."%'";
        $sql .= " OR `name` like '%".$search_value."%'";
        $sql .= " OR `position` like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
        $column_name = $_POST['order'][0]['column'];
        $order = $_POST['order'][0]['dir'];
        $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
        $sql .= " ORDER BY `position` asc";
    }

    if($_POST['length'] != -1)
    {
        $start = $_POST['start'];
        $length = $_POST['length'];
        $sql .= " LIMIT  ".$start.", ".$length;
    }	
   
    $query = mysqli_query($conn,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();

    while($row = mysqli_fetch_assoc($query))
    {
        $sub_array = array();
        $sub_array[] = $row['id'];
        $sub_array[] = $row['url'];
        $sub_array[] = $row['icon'];
        $sub_array[] = $row['name'];
        $sub_array[] = $row['position'];
        $sub_array[] = facebook_time_ago($row['time']);
        $sub_array[] = 
        '
        <a title="Xóa" href="javascript:void();" data-id="'.$row['id'].'"  
        class="btn btn-danger btn-sm deleteSidebar" >
        <i class="fas fa-trash-alt"></i>
        </a>
        <a title="Sửa" data-toggle="modal" data-target="#editSidebar" href="javascript:void();" data-id="'.$row['id'].'"
        class="btn btn-warning btn-sm editSidebarBtn" >
        <i class="fas fa-user-edit"></i>
        </a>
        ';
        $data[] = $sub_array;
    }

    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' =>$count_rows ,
        'recordsFiltered'=>   $total_all_rows,
        'data'=>$data,
    );
    echo  json_encode($output);

}

//Hiển thị dòng xe
if(isset($_POST['gallery'])){
    $output= array();
    $sql = "SELECT * FROM `gallery` ";

    $totalQuery = mysqli_query($conn,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);
   
    $columns = array(
        0 => 'id_gallery',
        1 => 'name',
        2 => 'time'
    );
    
    if(isset($_POST['search']['value']))
    {
        $search_value = $_POST['search']['value'];
        $sql .= " WHERE `name` like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
        $column_name = $_POST['order'][0]['column'];
        $order = $_POST['order'][0]['dir'];
        $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
        $sql .= " ORDER BY `id_gallery` asc";
    }

    if($_POST['length'] != -1)
    {
        $start = $_POST['start'];
        $length = $_POST['length'];
        $sql .= " LIMIT  ".$start.", ".$length;
    }	
   
    $query = mysqli_query($conn,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();

    while($row = mysqli_fetch_assoc($query))
    {
        $sub_array = array();
        $sub_array[] = $row['id_gallery'];
        $sub_array[] = $row['name'];
        $sub_array[] = facebook_time_ago($row['time']);
        $sub_array[] = 
        '
        <a title="Xóa" href="javascript:void();" data-id="'.$row['id_gallery'].'"  
        class="btn btn-danger btn-sm deleteGallery" >
        <i class="fas fa-trash-alt"></i>
        </a>

        <a title="Sửa" data-toggle="modal" data-target="#editGallery" href="javascript:void();" data-id="'.$row['id_gallery'].'"
        class="btn btn-warning btn-sm editGallery" >
        <i class="fas fa-user-edit"></i>
        </a>

        <a title="Thêm ảnh" href="gallery_img.php?id='.$row['id_gallery'].'" data-id="'.$row['id_gallery'].'"
        class="btn btn-primary btn-sm editGallery" >
        <i class="fas fa-image"></i>
        </a>
        ';
        $data[] = $sub_array;
    }

    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' =>$count_rows ,
        'recordsFiltered'=>   $total_all_rows,
        'data'=>$data,
    );
    echo  json_encode($output);

}

if(isset($_POST['gallery_img'])){
    $output= array();
    $sql = "SELECT * FROM `gallery_img` ";

    $totalQuery = mysqli_query($conn,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);
   
    $columns = array(
        0 => 'id',
        1 => 'name',
        2 => 'time'
    );
    
    if(isset($_POST['search']['value']))
    {
        $search_value = $_POST['search']['value'];
        $sql .= " WHERE `id` like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
        $column_name = $_POST['order'][0]['column'];
        $order = $_POST['order'][0]['dir'];
        $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
        $sql .= " ORDER BY `id` asc";
    }

    if($_POST['length'] != -1)
    {
        $start = $_POST['start'];
        $length = $_POST['length'];
        $sql .= " LIMIT  ".$start.", ".$length;
    }	
   
    $query = mysqli_query($conn,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();

    while($row = mysqli_fetch_assoc($query))
    {
        $sub_array = array();
        $sub_array[] = $row['id'];
        $sub_array[] = '<img src="'.$base_url.$row['image'].'" alt="ảnh đại diện">';
        $sub_array[] = facebook_time_ago($row['time']);
        $sub_array[] = 
        '
        <a title="Xóa" href="javascript:void();" data-id="'.$row['id_gallery'].'"  
        class="btn btn-danger btn-sm deleteGalleryImg" >
        <i class="fas fa-trash-alt"></i>
        </a>
        ';
        $data[] = $sub_array;
    }

    $output = array(
        'draw'=> intval($_POST['draw']),
        'recordsTotal' =>$count_rows ,
        'recordsFiltered'=>   $total_all_rows,
        'data'=>$data,
    );
    echo  json_encode($output);

}

?>