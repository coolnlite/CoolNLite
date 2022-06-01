<div style="margin: 0 auto; width : 94%">
<?php
  $sql = "SELECT id, `name`, id_tag, id_news FROM news_keyword INNER JOIN keyword ON id = id_tag WHERE id_news = $id";
  $result = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($result);
  if(isset($rows) && $rows != 0){
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
   </div>

    <div class="collapse" id="collapseAddNewsTag">
    <div class="card card-body">
    <h4 class="text-center">Thêm từ khóa cho bài viết</h4>
    <form id="fAddTagNews" class="needs-validation" novalidate>
    <div class="form-group">
        <label>Từ Khóa : </label>
        <?php
            $sql = "SELECT * FROM news_keyword WHERE id_news = $id";
            $result = mysqli_query($conn,$sql);
            $rowcount = mysqli_num_rows($result);
            if(isset($rowcount) && $rowcount > 0){
              $sql = "SELECT * FROM keyword";
              $keyword = executeResult($sql);
              foreach($keyword as $kw){
                echo ' <div class="form-check form-check-inline">
                <input class="form-check-input" name="add_key[]" type="checkbox" value="'.$kw['id'].'">
                <label class="form-check-label" >'.$kw['name'].'</label>
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
        <input type="hidden" name="id_news" value="<?php print $id ;?>" >
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
    </div>
  </div>

    <div class="collapse" id="collapseUpdateNewsTag">
    <div class="card card-body">
    <h4 class="text-center">Cập nhật từ khóa cho bài viết</h4>
    <form id="fUpdateTagNews" class="needs-validation" enctype="multipart/form-data" novalidate>
    <div class="form-group">
        <label>Từ khóa :</label>
        <?php 
             $sql = "SELECT id, `name`, id_tag, id_news FROM news_keyword INNER JOIN keyword ON id = id_tag WHERE id_news = $id";
             $result = mysqli_query($conn,$sql);
             $row = mysqli_num_rows($result);
             if(isset($row) && $row != 0){
              $key = executeResult($sql);
              foreach($key as $k){
               echo '<div class="form-check form-check-inline">
               <input class="form-check-input" name="update_key[]" type="checkbox" id="inlineCheckbox1" value="'.$k['id'].'" >
               <label class="form-check-label" for="inlineCheckbox1">'.$k['name'].'</label>
               </div>';
              }
             }else{
              echo '<span>Chưa có từ khóa nào cho bài viết này</span>';
             }

        ?>
      <input type="hidden" name="id_news" value="<?php print $id ;?>" >
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
    </div>
  </div>


<div class="container-fluid mt-4">
<div class="row d-flex justify-content-end ">
    <a type="button" data-toggle="modal" data-target="#addKey" class="btn btn-outline-success mb-3 mr-5">Thêm từ khóa</a>
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

<!-- MODAL  -->

  <div class="modal fade" id="editKey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thông tin từ khóa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body-view">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addKey" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thông tin từ khóa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body-view">
      <h4 class="text-center">Thêm từ khóa mới</h4>
      <form id="fAddTag" class="needs-validation" novalidate>
      <div class="form-group">
      <div class="form-group">
        <label for="thumnail">Tên từ khóa :</label>
        <input type="text" class="form-control" maxlength="50" name="name_key" id="name_key" required>
        <div class="invalid-feedback">Vui lòng nhập tên từ khóa</div>
      </div>
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
<!-- MODAL  -->

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

