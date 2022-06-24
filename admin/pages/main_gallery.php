<div class="container-fluid">
    <div class="row">
      <div style="width: 94%; margin : 0 auto">
      <!-- DÒNG XE -->
      <div class="d-flex justify-content-between align-items-center pb-3">
        <span class="text-center h5">DÒNG XE</span>
        <button type="button" class="btn btn-outline-success" data-toggle="modal" 
        data-target="#addGallery">Thêm dòng xe</button>
      </div>
        <div class="row">
          <div class="col-xl-12">
            <table id="gallery" class="table table-striped table-bordered" style="width: 100%;">
              <thead>
                <th>Id</th>
                <th>Tên dòng xe</th>
                <th>Thời gian cập nhật</th>
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

  <div class="modal fade" id="addGallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm dòng xe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body-view">
        <form id="fAddGallery" class="needs-validation" enctype="multipart/form-data" novalidate>

        <div class="form-group">
        <label for="img">Tên dòng xe :</label>
        <input type="text" class="form-control" name="gallery_name" maxlength="30" required>
        <div class="invalid-feedback">Vui lòng nhập tên dòng xe</div>
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