<div style="margin: 0 auto; width : 94%">
  <h3>Thêm bài viết</h3>
  <form action="../modules/add_data.php" method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="url">Đường dẫn :</label><label class="text-danger">(Mẫu : vo-dong-thai-dep-trai-ahihi)</label>
      <input type="text" class="form-control" id="url" placeholder="Nhập đường dẫn bài viết" name="url" required>
      <div class="invalid-feedback">Vui lòng nhập đường dẫn bài viết</div>
    </div>
    <div class="form-group">
      <label for="title">Tiêu đề :</label> <label class="text-danger">không quá 200 ký tự</label>
      <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề bài viết" name="title" required>
      <div class="invalid-feedback">Vui lòng nhập tiêu đề bài viết</div>
    </div>
    <div class="form-group">
      <label for="thumnail">Ảnh đại diện :</label>
      <input type="file" class="form-control" name="thumnail" id="thumnail" required>
      <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
    </div>
    <div class="form-group">
      <label for="description">Mô tả :</label> <label class="text-danger">không quá 300 ký tự</label>
      <input type="text" class="form-control" id="description" placeholder="Nhập mô tả bài viết" name="description" required>
      <div class="invalid-feedback">Vui lòng nhập mô tả bài viết</div>
    </div>
    <div class="form-group">
      <label for="description">Nội dung :</label>
      <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
      <div class="invalid-feedback">Vui lòng nhập nội dung bài viết</div>
    </div>
    <div class="form-group">
      <label for="description">Trạng thái bài viết :</label>
      <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" value="0" id="RadioOff" name="radio" class="custom-control-input">
      <label class="custom-control-label" for="RadioOff">Ẩn</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" value="1" id="RadioOn" name="radio" class="custom-control-input">
      <label class="custom-control-label" for="RadioOn">Hiện</label>
    </div>
    </div>
    <button type="submit" class="btn btn-primary" name="add_news">Thêm</button>
  </form>
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
