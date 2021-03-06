<?php 
    $sql = "SELECT * FROM `users` WHERE `id` = '$id' AND `token` = '$tk'";
    $users = executeResult($sql);
    foreach($users as $us){

    }
?>
<div style="margin: 0 auto; width : 94%">
    <div class="rounded bg-white mb-3 mt-3">
        <div class="row">
            <div class="col-xl-3 border-right">
                <div class="d-flex flex-column align-items-center text-center">
                    <img class="rounded-circle" alt="Ảnh đại diện" 
                    width="150px" src="<?php print $base_url.$us['image']?>">
                    <span class="font-weight-bold">Võ Đông Thái</span>
                    <span class="text-black-50">Administrator</span>
                    <a class="btn btn-outline-primary mt-1" data-toggle="modal" data-target="#changImage">Thay đổi ảnh đại diện</a>
                </div>
            </div>
            <div class="col-xl-9 border-right">
            <div class="form-row mb-3 d-flex justify-content-center">
              <button type="button" class="btn btn-primary" 
              data-toggle="modal" data-target="#changePass">Đổi mật khẩu</button>
            </div>
            <h5>Thông Tin Tài Khoản</h5>
            <form>
                <div class="form-row">
                    <div class="col-xl-6 mb-3">
                    <label for="validationCustomUsername">Tên tài khoản</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" 
                        value="<?php print $us['user_name']?>" readonly>
                    </div>
                    </div>

                    <div class="col-xl-6 mb-3">
                    <label for="validationCustom02">Email</label>
                    <input type="email" class="form-control" 
                    value="<?php print $us['email']?>" readonly>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-xl-6 mb-3">
                    <label for="validationCustom04">Vị trí</label>
                    <input type="text" class="form-control" 
                    value="<?php $us['position'] == 2 ? print 'Administrator' : print 'Users'?>" readonly>
                    </div>
                    <div class="col-xl-6 mb-3">
                    <label for="validationCustom05">Tên đầy đủ</label>
                    <input type="text" class="form-control" 
                    value="<?php print $us['full_name']?>" readonly>
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="col-xl-12 mb-12">
                    <label for="validationCustom03">Trạng thái</label>
                    <input type="text" class="form-control" 
                    value="<?php $us['status'] == 1 ? print 'Đang hoạt động' : print 'Đang ngủ'?>" readonly>
                    </div>
                </div>
                <div class="form-row mb-3 d-flex justify-content-center">
                    <button type="button" class="btn btn-success" 
                    data-toggle="modal" data-target="#editUsers">Thay đổi thông tin</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    <div class="row d-flex justify-content-between">
        <h5>Danh sách tài khoản</h5>
        <?php if($permission == 2) { ?>
        <button title="Thêm tài khoản" type="button" data-toggle="modal" data-target="#AddUsers"
            class="btn btn-outline-success mb-3">
                <i class="fas fa-plus"></i>
        </button>
        <?php }?>
    </div>
    <div class="row d-flex justify-content-end ">
      <div style="width: 100%">
        <div class="row">
          <div class="col-xl-12">
            <table id="example" class="table table-striped table-bordered" style="width: 100%;">
              <thead>
                <th>Id</th>
                <th>Tên tài khoản</th>
                <th>Email</th>
                <th>Vị trí</th>
                <th>Tên đầy đủ</th>
                <th>Ảnh đại diện</th>
                <th>Trạng thái</th>
                <th>Thời gian tạo</th>
                <?php if($permission == 2){?>
                <th>Thao tác</th>
                <?php } ?>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="changImage" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thay đổi ảnh đại diện</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="fchangeImg" class="needs-validation" novalidate>
      <input type="hidden" value="<?php print $us['id']?>" name="id_users" >
      <input type="hidden" value="<?php print $us['image']?>" name="image_old" >
      <div class="form-group">
        <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Chọn file</label>
        <div class="invalid-feedback">Vui lòng chọn hình ảnh</div>
        </div>
      </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary text-left">Cập nhật</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="editUsers" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cập nhật thông tin người dùng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="feditUsers" class="needs-validation" novalidate>

      <input type="hidden" value="<?php print $us['id']?>" name="id_users" >

      <div class="form-group">
      <label for="full_name_edit">Tên đầy đủ :</label>
      <input type="text" class="form-control" name="full_name_edit" 
      placeholder="Nhập tên đầy đủ" maxlength="30" 
      value="<?php print $us['full_name']?>" required>
      <div class="invalid-feedback">Vui lòng nhập tên đầy đủ</div>
      </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary text-left">Cập nhật thông tin</button>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AddUsers" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thêm tài khoản</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="fAddUsers">

      <div class="form-group">
      <label for="user_name">Tên tài khoản :</label>
      <input type="text" class="form-control" name="user_name" 
      placeholder="Nhập tên tài khoản" required>
      </div>

      <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" name="email" placeholder="Nhập email" required>
      </div>

      <div class="form-group">
      <label for="pass_word">Mật khẩu :</label>
      <input type="password" class="form-control" id="pass_word" name="pass_word" placeholder="Nhập mật khẩu" required>
      </div>

      <div class="form-group">
      <label for="pass_word_confirm">Nhập lại mật khẩu :</label>
      <input type="password" class="form-control" id="pass_word_confirm" name="pass_word_confirm" placeholder="Nhập mật khẩu" required>
      </div>

      <div class="form-group">
        <label for="">Phân quyền người dùng :</label>
        <select class="custom-select" name="position" title="Chọn quyền" required>
        <option value="">Chọn quyền...</option>
            <option value="0" >CRM</option>
            <option value="1" >SEO & POSTS</option>
            <option value="2" >Administrator</option>
        </select>
  </div>
      <div class="form-group">
      <label for="full_name">Tên đầy đủ :</label>
      <input type="text" class="form-control" name="full_name" 
      placeholder="Nhập tên đầy đủ" maxlength="30" required>
      </div>

      <div class="form-group">
          <label for="">Ảnh đại diện</label>
      <div class="custom-file">
        <input type="file" name="image" id="image" class="custom-file-input" required>
        <label class="custom-file-label">Chọn file</label>
        </div>
      </div>

     <div class="form-group">
        <label for="">Trạng thái tài khoản :</label>
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="customControlValidation1" 
          name="status" value="0" required>
          <label class="custom-control-label" for="customControlValidation1">Ngủ</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="customControlValidation2" 
          name="status" value="1" required>
          <label class="custom-control-label" for="customControlValidation2">Hoạt động</label>
        </div>
      </div>
      <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary text-left">Cập nhật</button>
        </div>

        </form>
    </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="changeUsers" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Vô hiệu hóa tài khoản</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="fchangeUsers" class="needs-validation" novalidate>
      
      </form>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="changePass" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Đổi mật khẩu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="fchangePass">

      <input type="hidden" value="<?php print $id?>" name="id_users" >
      <input type="hidden" value="<?php print $tk?>" name="token_users" >

      <div class="form-group">
      <label for="pass_old">Mật khẩu cũ :</label>
      <input type="password" class="form-control" name="pass_old" 
      placeholder="Nhập mật khẩu cũ">
      </div>

      <div class="form-group">
      <label for="pass_news">Mật khẩu mới :</label>
      <input type="password" class="form-control"id="pass_news" name="pass_news" 
      placeholder="Nhập mật khẩu mới">
      </div>

      <div class="form-group">
      <label for="confirm_pass_news">Nhập lại mật khẩu mới :</label>
      <input type="password" class="form-control" name="confirm_pass_news" 
      placeholder="Nhập lại mật khẩu mới">
      </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary text-left">Cập nhật</button>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>