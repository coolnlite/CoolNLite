<?php
 require_once('../../config/config.php');
 require_once('../../config/dbhelper.php');
?>
<?php
//delete contact
    if(isset($_POST['view_customer']) && isset($_POST['id_contact'])){
        $id_contact = $_POST['id_contact'];
        $sql = "SELECT `full_name`,`tel`,`models`,`area`,`message`,`time`
        FROM `contact` WHERE `id_contact` =  $id_contact";
        $view = executeResult($sql);
        foreach ($view as $v) {
?>
 <form>
    <div class="form-group">
    <label for="exampleInputEmail1">Họ và tên</label>
    <input type="text" class="form-control" value="<?php print $v['full_name']?>" readonly>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Số điện thoại</label>
    <input type="number" class="form-control" value="<?php print $v['tel']?>" readonly>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Dòng xe</label>
    <input type="text" class="form-control" value="<?php print $v['models']?>" readonly>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Khu vực</label>
    <input type="text" class="form-control" value="<?php print $v['area']?>" readonly>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Tin nhắn</label>
    <textarea class="form-control" rows="4" readonly><?php print $v['message']?></textarea>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Thời gian gửi</label>
    <input type="text" class="form-control" value="<?php print $v['time']?>" readonly>
    </div>
</form>
<?php
        }
    }
?>        
