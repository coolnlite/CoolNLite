<div style="margin: 0 auto; width : 94%">
  <h3>Thêm bài viết</h3>
  <form action="" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="url">Đường dẫn :</label><label class="text-danger">(Mẫu : vo-dong-thai-dep-trai-ahihi)</label>
      <input type="text" class="form-control" id="url" placeholder="Nhập đường dẫn bài viết" name="url" required>
      <div class="valid-feedback">OK</div>
      <div class="invalid-feedback">Vui lòng nhập đường dẫn bài viết</div>
    </div>
    <div class="form-group">
      <label for="title">Tiêu đề :</label> <label class="text-danger">không quá 200 ký tự</label>
      <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề bài viết" name="title" required>
      <div class="valid-feedback">OK</div>
      <div class="invalid-feedback">Vui lòng nhập tiêu đề bài viết</div>
    </div>
    <div class="form-group">
      <label for="thumnail">Ảnh đại diện :</label>
      <input type="file" class="form-control" name="thumnail" id="thumnail" required>
      <div class="valid-feedback">OK</div>
      <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
    </div>
    <div class="form-group">
      <label for="description">Mô tả :</label> <label class="text-danger">không quá 300 ký tự</label>
      <input type="text" class="form-control" id="description" placeholder="Nhập mô tả bài viết" name="description" required>
      <div class="valid-feedback">OK</div>
      <div class="invalid-feedback">Vui lòng nhập mô tả bài viết</div>
    </div>
    <div class="form-group">
      <label for="description">Nội dung :</label>
      <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
      <div class="valid-feedback">OK</div>
      <div class="invalid-feedback">Vui lòng nhập nội dung bài viết</div>
    </div>
    <div class="form-group">
      <input type="text" name="user_id" value="<?php echo '' .$user_id. '' ?>" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
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
