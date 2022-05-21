<?php
    require_once('../../config/config.php');
    require_once('../../config/dbhelper.php');

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
            $sub_array[] = $row['message'];
            $sub_array[] = $row['time'];
            $sub_array[] = '<a href="javascript:void();" data-id="'.$row['id_contact'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
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