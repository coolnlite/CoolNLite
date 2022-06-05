<div style="margin: 0 auto; width : 94%">
    <div class="rounded bg-white mb-3 mt-3">
        <div class="row">
            <div class="col-xl-3 border-right">
                <div class="d-flex flex-column align-items-center text-center">
                    <img class="rounded-circle" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">Võ Đông Thái</span>
                    <span class="text-black-50">Administrator</span>
                    <a class="btn btn-outline-primary mt-1" data-toggle="modal" data-target="#changImage">Thay đổi ảnh đại diện</a>
                </div>
            </div>
            <div class="col-xl-9 border-right">
            <h5>Thông Tin Tài Khoản</h5>
            <form>
              <?php 
                $sql = "SELECT * FROM `users` WHERE `id` = '$id' AND `token` = '$tk'";
                $users = executeResult($sql);
                foreach($users as $us){

                }
              ?>
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
        <button title="Thêm tài khoản" type="button" data-toggle="modal" data-target="#AddUsers"
            class="btn btn-outline-success mb-3">
                <i class="fas fa-plus"></i>
        </button>
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
                <th>Thao tác</th>
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
      <div class="form-group">
        <div class="custom-file">
        <?php
          $sql = "SELECT `image`,`id` FROM `users` WHERE `id` = '$id' AND `token` = '$tk'";
          $users = executeResult($sql);
          foreach($users as $us){
            echo '
            <input type="hidden" value="'.$us['image'].'" name="image_old" >
            <input type="hidden" value="'.$us['id'].'" name="id_users" >
            ';
          }
        ?>
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
      <form class="needs-validation" novalidate>

      <div class="form-group">
      <label for="user_name">Tên tài khoản :</label>
      <input type="text" class="form-control" id="user_name" name="user_name" 
      placeholder="Nhập tên tài khoản" maxlength="30" required>
      <div class="invalid-feedback">Vui lòng nhập tên tài khoản</div>
      </div>

      <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
      <div class="invalid-feedback">Vui lòng nhập email</div>
      </div>

      <div class="form-group">
      <label for="full_name">Tên đầy đủ :</label>
      <input type="email" class="form-control" id="full_name" name="full_name" 
      placeholder="Nhập tên đầy đủ" maxlength="30" required>
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
      <form class="needs-validation" novalidate>

      <div class="form-group">
      <label for="user_name">Tên tài khoản :</label>
      <input type="text" class="form-control" name="user_name" 
      placeholder="Nhập tên tài khoản" maxlength="30" required>
      <div class="invalid-feedback">Vui lòng nhập tên tài khoản</div>
      </div>

      <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" name="email" placeholder="Nhập email" required>
      <div class="invalid-feedback">Vui lòng nhập email</div>
      </div>

      <div class="form-group">
      <label for="pass_word">Mật khẩu :</label>
      <input type="password" class="form-control" id="pass_word" name="pass_word" placeholder="Nhập mật khẩu" required>
      <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
      </div>

      <div class="form-group">
        <label for="">Phân quyền người dùng :</label>
        <select class="custom-select" required>
        <option value="">Chọn quyền...</option>
            <option value="0" name="position">CRM</option>
            <option value="1" name="position">SEO & POSTS</option>
            <option value="2" name="position">Administrator</option>
        </select>
        <div class="invalid-feedback">Vui lòng thiết lập quyền tài khoản</div>
  </div>
      <div class="form-group">
      <label for="full_name">Tên đầy đủ :</label>
      <input type="text" class="form-control" name="full_name" 
      placeholder="Nhập tên đầy đủ" maxlength="30" required>
      <div class="invalid-feedback">Vui lòng nhập tên đầy đủ</div>
      </div>

      <div class="form-group">
          <label for="">Ảnh đại diện</label>
      <div class="custom-file">
        <input type="file" name="image" id="image" class="custom-file-input" required>
        <label class="custom-file-label">Chọn file</label>
        <div class="invalid-feedback">Vui lòng chọn hình ảnh</div>
        </div>
      </div>

     <div class="form-group">
        <label for="">Trạng thái tài khoản :</label>
        <div class="custom-control custom-switch">
            <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Hiện</label>
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