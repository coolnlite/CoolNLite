<div style="margin: 0 auto; width : 94%">
  <h3>Chỉnh sửa bài viết</h3>
  <form id="fAddNews" class="needs-validation" enctype="multipart/form-data" novalidate>
  <?php
     $sql = "SELECT * FROM `news` WHERE `id` = '$id'";
     $news = executeResult($sql);
     foreach($news as $ns){
?>
    <div class="form-group">
      <label for="url">Đường dẫn :</label><label class="text-danger">(Mẫu : vo-dong-thai-dep-trai-ahihi)</label>
      <input type="text" class="form-control" value="<?php print $ns['url']?>" id="url" name="url" placeholder="Nhập đường dẫn bài viết" required>
      <div class="invalid-feedback">Vui lòng nhập đường dẫn bài viết</div>
    </div>
    <div class="form-group">
      <label for="title">Tiêu đề :</label> <label class="text-danger">không quá 200 ký tự</label>
      <input type="text"  class="form-control" value="<?php print $ns['title']?>" maxlength="200"
      name="title" id="title" placeholder="Nhập tiêu đề bài viết" required>
      <div class="invalid-feedback">Vui lòng nhập tiêu đề bài viết</div>
    </div>
    <div class="form-group">
      <label for="thumnail">Ảnh đại diện :</label>
      <input type="file" class="form-control" name="thumnail" id="thumnail" required>
      <div class="invalid-feedback">Vui lòng nhập ảnh đại diện bài viết</div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php print '..'.$ns['thumnail']?>" alt="Image">
        </div>
    </div>
    <div class="form-group">
      <label for="description">Mô tả :</label> <label class="text-danger">không quá 300 ký tự</label>
      <input type="text" class="form-control" id="description" name="description" maxlength="300"
      value="<?php print $ns['description']?>" placeholder="Nhập mô tả bài viết" required>
      <div class="invalid-feedback">Vui lòng nhập mô tả bài viết</div>
    </div>
      
    <label for="content">Nội dung :</label>
    <textarea class="form-control" id="content" name="content" rows="5" value="<?php print $ns['content']?>"></textarea>
    
    <div class="form-group">
      <label>Trạng thái bài viết :</label>
        <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" value="0" <?php $ns['status'] == 0 ? print 'checked': '' ?>
        id="customControlValidation2" name="radio-stacked" required>
        <label class="custom-control-label" for="customControlValidation2">Ẩn</label>
        </div>
        <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" value="1" <?php $ns['status'] == 1 ? print 'checked': '' ?>
        id="customControlValidation3" name="radio-stacked" required>
        <label class="custom-control-label" for="customControlValidation3">Hiện</label>
        </div>
        <div class="invalid-feedback">Vui lòng nhập trạng thái bài viết</div>
    </div>
    <?php 
        }
    ?>
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