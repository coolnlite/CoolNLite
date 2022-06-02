<div  style="width: 94%; margin : 0 auto">
<?php
    $sql = "SELECT `id_news` FROM `seo_news` WHERE `id_news` = '$id'";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($result);
    if (isset($rowcount) && $rowcount == 0) { // Chưa tồn tại id trên
    
?>
  <h2>SEO Cho Bài Viết</h2>

            <form id="faddseomain" class="needs-validation" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="id_news" value="<?php print $id?>"  required>

                <div class="form-group">
                <label for="title">Tiêu đề :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-title" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="title" name="title" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#n-title')" 
                onkeydown="limit(this,100,'#n-title')" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho bài viết</div>
                </div>

                <div class="form-group">
                <label for="description">Mô tả:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-description" class="text-danger">250</span> ký tự</span>
                <input type="text" maxlength="250" class="form-control" id="description" name="description" 
                placeholder="Nhập mô tả cho bài viết" onkeyup="limit(this,250,'#n-description')" 
                onkeydown="limit(this,250,'#n-description')" required>
                <div class="invalid-feedback">Vui lòng nhập mô tả cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="keyword">Từ khóa :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-keyword" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="keyword" name="keyword" 
                placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#n-keyword')" 
                onkeydown="limit(this,100,'#n-keyword')" required>
                <div class="invalid-feedback">Vui lòng nhập từ khóa cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="link-fb">Đường dẫn fanpage facebook:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-link-fb" class="text-danger">100</span> ký tự</span>
                <input type="url" maxlength="100" class="form-control" id="link-fb" name="link-fb" 
                placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#n-link-fb')" 
                onkeydown="limit(this,100,'#n-link-fb')" required>
                <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
                </div>

                <div class="form-group">
                <label for="img-fb">Ảnh đại diện facebook:</label>
                <input type="file" class="form-control" name="img-fb" id="img-fb" required>
                <div class="invalid-feedback">Vui lòng nhập ảnh đại diện cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="title-fb">Tiêu đề facebook:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-title-fb" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="title-fb" name="title-fb" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#n-title-fb')" 
                onkeydown="limit(this,100,'#n-title-fb')" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="description-fb">Mô tả facebook:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-description-fb" class="text-danger">250</span> ký tự</span>
                <input type="text" maxlength="250" class="form-control" id="description-fb" name="description-fb" 
                placeholder="Nhập mô tả cho bài viết" onkeyup="limit(this,250,'#n-description-fb')" 
                onkeydown="limit(this,250,'#n-description-fb')" required>
                <div class="invalid-feedback">Vui lòng nhập mô tả cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="keyword-fb">Từ khóa facebook:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-keyword-fb" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="keyword-fb" name="keyword-fb" 
                placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#n-keyword-fb')" 
                onkeydown="limit(this,100,'#n-keyword-fb')" required>
                <div class="invalid-feedback">Vui lòng nhập từ khóa cho bài viết</div>
                </div>
  
                <div class="form-group">
                <label for="title-tw">Tiêu đề twitter:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-title-tw" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="title-tw" name="title-tw" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#n-title-tw')" 
                onkeydown="limit(this,100,'#n-title-tw')" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="description-tw">Mô tả twitter:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-description-tw" class="text-danger">250</span> ký tự</span>
                <input type="text" maxlength="250" class="form-control" id="description-tw" name="description-tw" 
                placeholder="Nhập mô tả cho bài viết" onkeyup="limit(this,250,'#n-description-tw')" 
                onkeydown="limit(this,250,'#n-description-tw')" required>
                <div class="invalid-feedback">Vui lòng nhập mô tả cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="img-tw">Ảnh đại diện twitter:</label>
                <input type="file" class="form-control" name="img-tw" id="img-tw" required>
                <div class="invalid-feedback">Vui lòng nhập ảnh đại diện cho bài viết</div>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>

    <?php 
        }else{//Đã tồn tại bài viết
    ?>

<h2>Chỉnh Sửa SEO Cho Bài Viết</h2>

  <?php
                    $sql = "SELECT * FROM `seo_news` WHERE `id_news` = '$id'";
                    $seo_news = executeResult($sql);
                    foreach($seo_news as $sn){

                ?>
            <form id="feditseomain" class="needs-validation"novalidate>
                <input type="hidden" name="id_news" value="<?php print $id?>"  required>
                <input type="hidden" name="id_tag" value="<?php print $sn['id']?>"  required>

                <div class="form-group">
                <label for="title">Tiêu đề :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-title" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="title" name="title" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#n-title')" 
                onkeydown="limit(this,100,'#n-title')" value="<?php print $sn['title']?>" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho bài viết</div>
                </div>

                <div class="form-group">
                <label for="description">Mô tả:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-description" class="text-danger">250</span> ký tự</span>
                <input type="text" maxlength="250" class="form-control" id="description" name="description" 
                placeholder="Nhập mô tả cho bài viết" onkeyup="limit(this,250,'#n-description')" 
                onkeydown="limit(this,250,'#n-description')" value="<?php print $sn['description']?>" required>
                <div class="invalid-feedback">Vui lòng nhập mô tả cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="keyword">Từ khóa :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-keyword" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="keyword" name="keyword" 
                placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#n-keyword')" 
                onkeydown="limit(this,100,'#n-keyword')" value="<?php print $sn['keyword']?>" required>
                <div class="invalid-feedback">Vui lòng nhập từ khóa cho bài viết</div>
                </div>
               
                <div class="form-group">
                <label for="link-fb">Đường dẫn fanpage :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-link-fb" class="text-danger">100</span> ký tự</span>
                <input type="url" maxlength="100" class="form-control" id="link-fb" name="link-fb" 
                placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#n-link-fb')" 
                onkeydown="limit(this,100,'#n-link-fb')" value="<?php print $sn['link_fb']?>" required>
                <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
                </div>

                <div class="form-group">
                <label for="img-fb">Ảnh đại diện:</label>
                <input type="file" class="form-control" name="img-fb" id="img-fb">
                <div class="invalid-feedback">Vui lòng nhập ảnh đại diện cho bài viết</div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php print '..'.$sn['img_fb']?>" alt="Image">
                </div>
                </div>
                
                <div class="form-group">
                <label for="title-fb">Tiêu đề :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-title-fb" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="title-fb" name="title-fb" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#n-title-fb')" 
                onkeydown="limit(this,100,'#n-title-fb')" value="<?php print $sn['title_fb']?>" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="description-fb">Mô tả:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-description-fb" class="text-danger">250</span> ký tự</span>
                <input type="text" maxlength="250" class="form-control" id="description-fb" name="description-fb" 
                placeholder="Nhập mô tả cho bài viết" onkeyup="limit(this,250,'#n-description-fb')" 
                onkeydown="limit(this,250,'#n-description-fb')" value="<?php print $sn['description_fb']?>" required>
                <div class="invalid-feedback">Vui lòng nhập mô tả cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="keyword-fb">Từ khóa :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-keyword-fb" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="keyword-fb" name="keyword-fb" 
                placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#n-keyword-fb')" 
                onkeydown="limit(this,100,'#n-keyword-fb')" value="<?php print $sn['keyword_fb']?>" required>
                <div class="invalid-feedback">Vui lòng nhập từ khóa cho bài viết</div>
                </div>

                <div class="form-group">
                <label for="title-tw">Tiêu đề :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-title-tw" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" id="title-tw" name="title-tw" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#n-title-tw')" 
                onkeydown="limit(this,100,'#n-title-tw')" value="<?php print $sn['title_tw']?>" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="description-tw">Mô tả:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="n-description-tw" class="text-danger">250</span> ký tự</span>
                <input type="text" maxlength="250" class="form-control" id="description-tw" name="description-tw" 
                placeholder="Nhập mô tả cho bài viết" onkeyup="limit(this,250,'#n-description-fb')" 
                onkeydown="limit(this,250,'#n-description-tw')" value="<?php print $sn['description_tw']?>" required>
                <div class="invalid-feedback">Vui lòng nhập mô tả cho bài viết</div>
                </div>
                
                <div class="form-group">
                <label for="img-tw">Ảnh đại diện:</label>
                <input type="file" class="form-control" name="img-tw" id="img-tw">
                <div class="invalid-feedback">Vui lòng nhập ảnh đại diện cho bài viết</div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php print '..'.$sn['img_tw']?>" alt="Image">
                </div>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
    <?php 
        }//Kết thúc vòng lặp
    ?>
<?php } //Kết thúc kiểm tra ?>
</div>

<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
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