<div class="container-fluid">
    <div class="row">
      <div style="width: 94%; margin : 0 auto">
      <!-- MENU -->

      <div class="d-flex justify-content-between align-items-center pb-3">
        <span class="text-center h5">MENU</span>
        <button type="button" class="btn btn-outline-success" data-toggle="modal" 
        data-target="#addMenu">Thêm menu</button>
      </div>
        <div class="row">
          <div class="col-xl-12">
            <table id="menu" class="table table-striped table-bordered" style="width: 100%;">
              <thead>
                <th>Id</th>
                <th>Tên</th>
                <th>Đường dẫn</th>
                <th>Vị trí</th>
                <th>Thời gian tạo</th>
                <th>Thao tác</th>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>

        <!-- FOOTER -->

        <div class="d-flex justify-content-between align-items-center pb-3">
        <span class="text-center h5">FOOTER</span>
        </div>
          <div class="row">
            <div class="col-xl-12">
              <table id="footer" class="table table-striped table-bordered" style="width: 100%;">
                <thead>
                  <th>Id</th>
                  <th>Copyright</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Email</th>
                  <th>Tiêu đề</th>
                  <th>Mô tả</th>
                  <th>Thời gian cập nhật</th>
                  <th>Thao tác</th>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <div class="col-md-2"></div>
          </div>

          <!-- SIDEBAR -->

        <div class="d-flex justify-content-between align-items-center pb-3">
        <span class="text-center h5">SIDEBAR</span>
        <button type="button" class="btn btn-outline-success" data-toggle="modal" 
        data-target="#addSidebar">Thêm sidebar</button>
        </div>
          <div class="row">
            <div class="col-xl-12">
              <table id="sidebar" class="table table-striped table-bordered" style="width: 100%;">
                <thead>
                <th>Id</th>
                <th>Đường dẫn</th>
                <th>Icons</th>
                <th>Tên</th>
                <th>Vị trí</th>
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

  <div class="modal fade" id="addMenu" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width : 700px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thêm menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="faddMenu" class="needs-validation" novalidate>

            <div class="form-group">
            <label for="name">Tên menu :</label>
            <input type="text" class="form-control" name="name_menu" 
            placeholder="Nhập tên menu" required>
            <div class="invalid-feedback">Vui lòng nhập tên menu</div>
            </div>

            <div class="form-group">
            <label for="url">Đường dẫn :</label>
            <input type="text" class="form-control" name="url_menu" 
            placeholder="Nhập địa chỉ menu" required>
            <div class="invalid-feedback">Vui lòng nhập đường dẫn</div>
            </div>

            <div class="form-group">
            <label for="position">Vị trí :</label>
            <label class="text-danger">Vui lòng nhập số</label>
            <input type="text" class="form-control" name="position_menu"
            maxlength="1" placeholder="Nhập vị trí menu"  required>
            <div class="invalid-feedback">Vui lòng nhập vị trí</div>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editMenu" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width : 700px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Chỉnh sửa menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="feditMenu" class="needs-validation" novalidate>

            <div class="form-group">
            <label for="name">Tên menu :</label>
            <input type="text" class="form-control" name="name_menu" 
            placeholder="Nhập tên menu" required>
            <div class="invalid-feedback">Vui lòng nhập tên menu</div>
            </div>

            <div class="form-group">
            <label for="url">Đường dẫn :</label>
            <input type="text" class="form-control" name="url_menu" 
            placeholder="Nhập địa chỉ menu" required>
            <div class="invalid-feedback">Vui lòng nhập đường dẫn</div>
            </div>

            <div class="form-group">
            <label for="position">Vị trí :</label>
            <label class="text-danger">Vui lòng nhập số</label>
            <input type="text" class="form-control" name="position_menu"
            maxlength="1" placeholder="Nhập vị trí menu"  required>
            <div class="invalid-feedback">Vui lòng nhập vị trí</div>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="addSidebar" tabindex="-1" role="dialog">
  <div class="modal-dialog" style="max-width : 700px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thêm sidebar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="faddSidebar" class="needs-validation" novalidate>

            <div class="form-group">
            <label for="url">Đường dẫn :</label>
            <input type="text" class="form-control" name="url_sidebar" 
            placeholder="Nhập đường dẫn" required>
            <div class="invalid-feedback">Vui lòng nhập đường dẫn</div>
            </div>

            <div class="form-group">
            <label for="icon"> Icon :</label>
            <input type="text" class="form-control" name="icon_sidebar" 
            placeholder="Nhập icon" required>
            <div class="invalid-feedback">Vui lòng nhập icon</div>
            </div>

            <div class="form-group">
            <label for="name">Tên sidebar :</label>
            <input type="text" class="form-control" name="name_sidebar" 
            placeholder="Nhập tên sidebar" required>
            <div class="invalid-feedback">Vui lòng nhập tên sidebar</div>
            </div>

            <div class="form-group">
            <label for="position">Vị trí :</label>
            <label class="text-danger">Vui lòng nhập số</label>
            <input type="text" class="form-control" name="position_sidebar"
            maxlength="1" placeholder="Nhập vị trí sidebar"  required>
            <div class="invalid-feedback">Vui lòng nhập vị trí</div>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
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