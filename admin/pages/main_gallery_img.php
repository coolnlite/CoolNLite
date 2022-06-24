<?php
    $sql = "SELECT * FROM `gallery` WHERE `id_gallery` = '$id'";
    $result = mysqli_query($conn,$sql);
?>
<div style="margin: 0 auto; width : 94%">
  <h3>Thêm ảnh cho dòng xe</h3>


  <form id="fAddGallery" class="needs-validation" enctype="multipart/form-data" novalidate>
   
    <div class="form-group">
      <label for="thumnail">Ảnh dòng xe :</label>
      <input type="file" class="form-control" name="gallery_img[]" id="gallery_img" multiple required>
      <div class="invalid-feedback">Vui lòng nhập ảnh dòng xe</div>
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