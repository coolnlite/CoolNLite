<?php
 require_once('../../config/config.php');
 require_once('../../config/dbhelper.php');

//view contact
    if(isset($_POST['view_customer']) && isset($_POST['id_contact'])){
        $id_contact = $_POST['id_contact'];
        $sql = "SELECT `full_name`,`tel`,`models`,`area`,`message`,`time`
        FROM `contact` WHERE `id_contact` =  $id_contact";
        $view = executeResult($sql);
        foreach ($view as $v) {
            echo '
            <form>
                <div class="form-group">
                <label for="exampleInputEmail1">Họ và tên</label>
                <input type="text" class="form-control" value=" '.$v['full_name'].'" readonly>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Số điện thoại</label>
                <input type="number" class="form-control" value="'.$v['tel'].'" readonly>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Dòng xe</label>
                <input type="text" class="form-control" value="'.$v['models'].'" readonly>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Khu vực</label>
                <input type="text" class="form-control" value="'.$v['area'].'" readonly>
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Tin nhắn</label>
                <textarea class="form-control" rows="4" readonly>'.$v['message'].'</textarea>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Thời gian gửi</label>
                <input type="text" class="form-control" value="'.$v['time'].'" readonly>
                </div>
            </form>
            ';
        }
    }

    //view contact
    if(isset($_POST['view_key']) && isset($_POST['id_key'])){
        $id_key = $_POST['id_key'];
        $sql = "SELECT `id`,`name` FROM `keyword` WHERE `id` =  $id_key";
        $view = executeResult($sql);
        foreach ($view as $v) {
            echo '
            <form lass="needs-validation" novalidate >
                <div class="form-group">
                <label for="thumnail">Tên từ khóa :</label>
                <input type="text" class="form-control" maxlength="50" 
                name="name_key" id="name_key" value="'.$v['name'].'" required>
                <div class="invalid-feedback">Vui lòng nhập tên từ khóa</div>
                </div>
                <input type="hidden" class="form-control" name="id_key" id="id_key" 
                value="'.$v['id'].'">
                </div>
                <button type="button" class="btn btn-primary" id="UpdateKey">Thêm</button>
            </form>
            ';
        }
    }

    //view edit agency
    if(isset($_POST['view_agency']) && isset($_POST['id_agency'])){
        $id_agency = $_POST['id_agency'];
        $sql = "SELECT * FROM `agency` WHERE `id` = '$id_agency'";
        $agency = executeResult($sql);
        foreach ($agency as $ag) {
            echo '
        <form id="fEditAgency" class="needs-validation" enctype="multipart/form-data" novalidate>
            <input type="hidden" name="id-agency" value="'.$ag['id'].'" required>
            <input type="hidden" name="img-old" value="'.$ag['img'].'" required>

            <div class="form-group">
            <label for="edit-img">Ảnh đại lý :</label>
            <input type="file" class="form-control" name="edit-img" id="edit-img" required>
            <div class="invalid-feedback">Vui lòng nhập ảnh đại đại lý</div>
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..'.$ag['img'].'" alt="Image">
            </div>
            </div>

            <div class="form-group">
            <label for="edit-name">Tên đại lý :</label>
            <input type="text" class="form-control" value="'.$ag['name'].'" name="edit-name"  id="edit-name" 
            placeholder="Nhập tên đại lý" required>
            <div class="invalid-feedback">Vui lòng nhập tên đại lý</div>
            </div>

            <div class="form-group">
            <label for="edit-address">Địa chỉ :</label>
            <input type="text" class="form-control" value="'.$ag['address'].'" id="edit-address" name="edit-address" 
            placeholder="Nhập địa chỉ đại lý" required>
            <div class="invalid-feedback">Vui lòng nhập địa chỉ đại lý</div>
            </div>

            <div class="form-group">
            <label for="edit-phone">Số điện thoại :</label>
            <input type="text" class="form-control" value="'.$ag['phone'].'" name="edit-phone" id="edit-phone"
            maxlength="10" placeholder="Nhập số điện thoại đại lý"  required>
            <div class="invalid-feedback">Vui lòng nhập số điện thoại đại lý</div>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>

        </form>
            ';
        }
    }

?>        
