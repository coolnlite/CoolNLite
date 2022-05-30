<div style="margin: 0 auto; width : 94%">
<?php
  $sql = "SELECT id, `name`, id_tag, id_news FROM news_keyword INNER JOIN keyword ON id = id_tag WHERE id_news = $id";
  $result = mysqli_query($conn, $sql);
  if($result){
  echo '<h5>Bài viết này hiện có các từ khóa là :';
   while ($row = mysqli_fetch_array($result)) {
    echo '<span class="text-primary"> #'.$row['name'].' </span>';
   }
  }else{
    echo  '<h5>Bài viết này hiện chưa có từ khóa nào. Vui lòng thêm từ khóa</h5>';
  }
?>
   <div class="mt-3">
   <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAddNewsTag" aria-expanded="false" aria-controls="collapseExample">
    Thêm Từ Khóa Cho Bài Viết
    </button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseUpdateNewsTag" aria-expanded="false" aria-controls="collapseExample">
    Cập Nhật Từ Khóa
    </button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAddTag" aria-expanded="false" aria-controls="collapseExample">
    Thêm Từ Khóa Mới
    </button>
   </div>

    <div class="collapse" id="collapseAddNewsTag">
    <div class="card card-body">
    <h4 class="text-center">Thêm từ khóa cho bài viết</h4>
    <form id="fAddTagNews" class="needs-validation" novalidate>
    <div class="form-group">
        <label>Từ Khóa</label>
        <?php
            $sql = "SELECT * FROM news_keyword WHERE id_news = $id";
            $result = mysqli_query($conn,$sql);
            $rowcount = mysqli_num_rows($result);
            if(isset($rowcount) && $rowcount > 0){
              $sql = "SELECT * FROM keyword";
              $keyword = executeResult($sql);
              foreach($keyword as $kw){
                echo ' <div class="form-check form-check-inline">
                <input class="form-check-input" name="add_key[]" type="checkbox" id="inlineCheckbox1" value="'.$kw['id'].'">
                <label class="form-check-label" for="inlineCheckbox1">'.$kw['name'].'</label>
              </div>';
              }
            }else{
              $sql = "SELECT * FROM keyword";
              $keyword = executeResult($sql);
              foreach($keyword as $kw){
                echo ' <div class="form-check form-check-inline">
                <input class="form-check-input" name="add_key[]" type="checkbox" id="inlineCheckbox1" value="'.$kw['id'].'">
                <label class="form-check-label" for="inlineCheckbox1">'.$kw['name'].'</label>
              </div>';
              }
            }
        ?>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
    </div>
  </div>

    <div class="collapse" id="collapseUpdateNewsTag">
    <div class="card card-body">
    <h4 class="text-center">Cập nhật từ khóa cho bài viết</h4>
    <form id="fAddTagNews" class="needs-validation" enctype="multipart/form-data" novalidate>
    <div class="form-group">
        <label>Từ khóa :</label>
        <?php 
             $sql = "SELECT id, `name`, id_tag, id_news FROM news_keyword INNER JOIN keyword ON id = id_tag WHERE id_news = $id";
             $key = executeResult($sql);
             foreach($key as $k){
              echo '<div class="form-check form-check-inline">
              <input class="form-check-input" name="update_key[]" type="checkbox" id="inlineCheckbox1" value="'.$k['id'].'" >
              <label class="form-check-label" for="inlineCheckbox1">'.$k['name'].'</label>
              </div>';
             }
        ?>
        
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
    </div>
  </div>

  <div class="collapse" id="collapseAddTag">
    <div class="card card-body">
    <h4 class="text-center">Thêm từ khóa mới</h4>
    <form id="fAddTagNews" class="needs-validation" novalidate>
    <div class="form-group">
    <div class="form-group">
      <label for="thumnail">Tên từ khóa :</label>
      <input type="text" class="form-control" name="name" id="name" required>
      <div class="invalid-feedback">Vui lòng nhập tên từ khóa</div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
    </div>
  </div>

</div>

<div class="container-fluid mt-4">
    <div class="row">
      <div style="width: 94%; margin : 0 auto">
        <div class="row">
          <div class="col-xl-12">
            <table id="example" class="table table-striped table-bordered" style="width: 100%;">
              <thead>
                <th>Id</th>
                <th>Tên Từ Khóa</th>
                <th>Thời gian thêm </th>
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

