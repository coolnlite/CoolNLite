<div class="container-fluid">
    <div class="row">
      <div style="width: 94%; margin : 0 auto">
      <!-- DÒNG XE -->
      <div class="d-flex justify-content-between align-items-center pb-3">
        <span class="text-center h5">DÒNG XE</span>
        <button type="button" class="btn btn-outline-success" data-toggle="modal" 
        data-target="#addMenu">Thêm dòng xe</button>
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