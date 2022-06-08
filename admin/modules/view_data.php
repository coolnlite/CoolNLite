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
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    }
?>        

<?php 
//Chỉnh sửa tài khoản người dùng
    if(isset($_POST['view_users']) && isset($_POST['id_users'])){
        $id_users = $_POST['id_users'];
        $sql = "SELECT `id`,`status` FROM `users` WHERE `id` = '$id_users'";
        $users = executeResult($sql);
        foreach($users as $us){
?>
    <input type="hidden" class="form-control" name="id_users" value="<?php print $us['id']?>" >
    <div class="form-group">
        <label for="">Trạng thái tài khoản :</label>
        <div class="custom-control custom-radio">
    <input type="radio" id="customRadio1" name="status" value="0"
    <?php $us['status'] == 0 ? print 'checked' : print '' ?> class="custom-control-input">
    <label class="custom-control-label" for="customRadio1">Ngủ</label>
    </div>
    <div class="custom-control custom-radio">
    <input type="radio" id="customRadio2" name="status" value="1"
    <?php $us['status'] == 1 ? print 'checked' : print '' ?> class="custom-control-input" >
    <label class="custom-control-label" for="customRadio2">Hoạt động</label>
    </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary text-left">Cập nhật</button>
    </div>
<?php 
    }
}
?>

<?php 
    //View menu
    if(isset($_POST['view_menu']) && !empty($_POST['id_menu'])){
        $id_menu = $_POST['id_menu'];
        $sql = "SELECT * FROM `menu` WHERE `id` = '$id_menu'";
        $menu = executeResult($sql);
        foreach($menu as $mn){
?>
            <input type="hidden" value="<?php print $mn['id']?>" name="id_menu">
            <div class="form-group">
            <label for="name">Tên menu :</label>
            <input type="text" class="form-control" value="<?php print $mn['name']?>" name="name_menu" 
            placeholder="Nhập tên menu" required>
            <div class="invalid-feedback">Vui lòng nhập tên menu</div>
            </div>

            <div class="form-group">
            <label for="url">Đường dẫn :</label>
            <input type="text" class="form-control" value="<?php print $mn['url']?>" name="url_menu" 
            placeholder="Nhập địa chỉ menu" required>
            <div class="invalid-feedback">Vui lòng nhập đường dẫn</div>
            </div>

            <div class="form-group">
            <label for="position">Vị trí :</label>
            <label class="text-danger">Vui lòng nhập số</label>
            <input type="text" class="form-control" name="position_menu"
            maxlength="1" placeholder="Nhập vị trí menu" value="<?php print $mn['position']?>"  required>
            <div class="invalid-feedback">Vui lòng nhập vị trí</div>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>
<?php 
    }
}
?>

<?php 
    //View footer
    if(isset($_POST['view_footer']) && !empty($_POST['id_footer'])){
        $id_footer = $_POST['id_footer'];
        $sql = "SELECT * FROM `footer` WHERE `id` = '$id_footer'";
        $footer = executeResult($sql);
        foreach($footer as $ft){
?>
            <input type="hidden" value="<?php print $ft['id']?>" name="id_footer">

            <div class="form-group">
            <label for="copyright">Copyright :</label>
            <input type="text" class="form-control" value="<?php print $ft['copyright']?>" name="copyright" 
            placeholder="Nhập copyright" required>
            <div class="invalid-feedback">Vui lòng nhập copyright</div>
            </div>

            <div class="form-group">
            <label for="address">Địa chỉ :</label>
            <input type="text" class="form-control" value="<?php print $ft['address']?>" name="address" 
            placeholder="Nhập địa chỉ" required>
            <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
            </div>

            <div class="form-group">
            <label for="phone">Số điện thoại :</label>
            <input type="text" class="form-control" value="<?php print $ft['phone']?>" name="phone" 
            placeholder="Nhập số điện thoại" maxlength="10" required>
            <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
            </div>

            <div class="form-group">
            <label for="mail">Email :</label>
            <input type="email" class="form-control" value="<?php print $ft['mail']?>" name="mail" 
            placeholder="Nhập mail" required>
            <div class="invalid-feedback">Vui lòng nhập mail</div>
            </div>

            <div class="form-group">
            <label for="title">Tiêu đề :</label>
            <input type="text" class="form-control" value="<?php print $ft['title']?>" name="title" 
            placeholder="Nhập tiêu đề" required>
            <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
            </div>

            <div class="form-group">
            <label for="subtitle">Tiêu đề con :</label>
            <textarea class="form-control" name="subtitle" rows="3" required><?php print $ft['subtitle']?></textarea>
            <div class="invalid-feedback">Vui lòng nhập tiêu đề con</div>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>
<?php 
    }
}
?>