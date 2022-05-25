<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');
    require_once('function.php');

    if(isset($_POST['news'])){
        $output= array();
        $sql = "SELECT * FROM `news` ";

        $totalQuery = mysqli_query($conn,$sql);
        $total_all_rows = mysqli_num_rows($totalQuery);
       
        $columns = array(
            0 => 'id',
            1 => 'url',
            2 => 'title',
            3 => 'description',
            4 => 'content',
            5 => 'view',
            6 => 'id_user',
            7 => 'time'
        );
        
        if(isset($_POST['search']['value']))
        {
            $search_value = $_POST['search']['value'];
            $sql .= " WHERE `url` like '%".$search_value."%'";
            $sql .= " OR `title` like '%".$search_value."%'";
            $sql .= " OR `description` like '%".$search_value."%'";
            $sql .= " OR `content` like '%".$search_value."%'";
            $sql .= " OR `view` like '%".$search_value."%'";
            $sql .= " OR `id_user` like '%".$search_value."%'";
            $sql .= " OR `time` like '%".$search_value."%'";
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
            $sub_array[] = $row['title'];
            $sub_array[] = $row['description'];
            $sub_array[] = $row['content'];
            $sub_array[] = $row['view'] ;
            $sub_array[] = $full_name ;
            $sub_array[] = facebook_time_ago($row['time']);
            $sub_array[] = 
            '
            <a title="Xóa" href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >
            <i class="fas fa-trash-alt"></i>
            </a>
            <a title="Xem" data-toggle="modal" data-target="#viewNews" href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm viewBtn" >
            <i class="fas fa-eye"></i>
            </a>
            <a title="Xem" data-toggle="modal" data-target="#editNews" href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-warning btn-sm editBtn" >
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



?>