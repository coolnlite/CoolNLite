<div style="margin: 0 auto; width : 94%">
  <h4>Chọn từ khóa cho bài viết</h4>
  <form id="fAddTagNews" class="needs-validation" enctype="multipart/form-data" novalidate>
    <div class="form-group">
        <label for="url">Từ khóa :</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">1</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">2</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Thêm Từ Khóa</button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Thêm Từ Khóa Khác
    </button>
  </form>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
    <h4 class="text-center">Thêm từ khóa</h4>
    <form id="fAddNews" class="needs-validation" novalidate>
        <div class="form-group">
        <label for="keyword">Từ khóa :</label>
        <input type="text" class="form-control" id="keyword" placeholder="Nhập tên từ khóa" name="keyword" required>
        <div class="invalid-feedback">Vui lòng từ khóa mới cho bài viết</div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
    </div>
  </div>
  <h4 class="text-center mt-3">Danh sách từ khóa</h4>
  <div class="row">
    <div class="col-xl-12">
    <table id="example" class="table table-striped table-bordered" style="width: 100%;">
        <thead>
        <th>Id</th>
        <th>Tên Từ Khóa</th>
        <th>Thao Tác</th>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
    <div class="col-md-2"></div>
</div>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
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

