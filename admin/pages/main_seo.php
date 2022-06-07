<div style="margin: 0 auto; width : 94%">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab">Trang Chủ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#premier" role="tab">Premier Series</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#titanx" role="tab">Titan X Series</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#news" role="tab">Tin Tức</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#about" role="tab">Chúng Tôi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#agency" role="tab">Đại Lý</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tag" role="tab">Từ Khóa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#search" role="tab">Tìm Kiếm</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel">
    <?php
      $sql = "SELECT * FROM `seo_pages` WHERE `id` = 1 ";
      $seo_pages = executeResult($sql);
      foreach ($seo_pages as $sp){

    ?>
  <form id="fedithome" class="needs-validation" enctype="multipart/form-data" novalidate>

            <input type="hidden" class="form-control" value="" name="id_pages">
            <div class="form-group">
            <label for="title">Tiêu đề :</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-title" class="text-danger">100</span> ký tự</span>
            <input type="text" maxlength="100" class="form-control" name="title" 
            placeholder="Nhập tiêu đề cho trang chủ" onkeyup="limit(this,100,'#home-title')" 
            onkeydown="limit(this,100,'#home-title')" value="<?php print $sp['title']?>" required>
            <div class="invalid-feedback">Vui lòng nhập tiêu đề cho trang chủ</div>
            </div>

            <div class="form-group">
            <label for="description">Mô tả:</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-description" class="text-danger">250</span> ký tự</span>
            <input type="text" maxlength="250" class="form-control" name="description" 
            placeholder="Nhập mô tả cho trang chủ" onkeyup="limit(this,250,'#home-description')" 
            onkeydown="limit(this,250,'#home-description')" value="<?php print $sp['description']?>" required>
            <div class="invalid-feedback">Vui lòng nhập mô tả cho trang chủ</div>
            </div>
            
            <div class="form-group">
            <label for="keyword">Từ khóa :</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-keyword" class="text-danger">100</span> ký tự</span>
            <input type="text" maxlength="100" class="form-control" name="keyword" 
            placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#home-keyword')" 
            onkeydown="limit(this,100,'#home-keyword')" value="<?php print $sp['keyword']?>" required>
            <div class="invalid-feedback">Vui lòng nhập từ khóa cho trang chủ</div>
            </div>
            
            <div class="form-group">
            <label for="link-fb">Đường dẫn fanpage facebook:</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-link-fb" class="text-danger">100</span> ký tự</span>
            <input type="url" maxlength="100" class="form-control" name="link-fb" 
            placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#home-link-fb')" 
            onkeydown="limit(this,100,'#home-link-fb')" value="<?php print $sp['link-fb']?>" required>
            <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
            </div>

            <div class="form-group">
            <label for="img-fb">Ảnh đại diện facebook:</label>
            <input type="file" class="form-control" name="img-fb" required>
            <input type="hidden" class="form-control" value="<?php print '..'.$sp['img_fb']?>" name="img-fb-old">
            <div class="invalid-feedback">Vui lòng nhập ảnh đại diện cho bài viết</div>
            <?php 
            if($sp['img_fb'] != ''){
            ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php print '..'.$sp['img_fb']?>" alt="Ảnh đại diện">
            </div>
            </div>
            <?php
              }
            ?>
            
            <div class="form-group">
            <label for="title-fb">Tiêu đề facebook:</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-title-fb" class="text-danger">100</span> ký tự</span>
            <input type="text" maxlength="100" class="form-control" name="title-fb" 
            placeholder="Nhập tiêu đề cho trang chủ" onkeyup="limit(this,100,'#home-title-fb')" 
            onkeydown="limit(this,100,'#home-title-fb')" value="<?php print $sp['title-fb']?>" required>
            <div class="invalid-feedback">Vui lòng nhập tiêu đề cho trang chủ</div>
            </div>
            
            <div class="form-group">
            <label for="description-fb">Mô tả facebook:</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-description-fb" class="text-danger">250</span> ký tự</span>
            <input type="text" maxlength="250" class="form-control" name="description-fb" 
            placeholder="Nhập mô tả cho trang chủ" onkeyup="limit(this,250,'#home-description-fb')" 
            onkeydown="limit(this,250,'#home-description-fb')" value="<?php print $sp['description-fb']?>" required>
            <div class="invalid-feedback">Vui lòng nhập mô tả cho trang chủ</div>
            </div>
            
            <div class="form-group">
            <label for="keyword-fb">Từ khóa facebook:</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-keyword-fb" class="text-danger">100</span> ký tự</span>
            <input type="text" maxlength="100" class="form-control" name="keyword-fb" 
            placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#home-keyword-fb')" 
            onkeydown="limit(this,100,'#home-keyword-fb')" value="<?php print $sp['keyword-fb']?>" required>
            <div class="invalid-feedback">Vui lòng nhập từ khóa cho trang chủ</div>
            </div>

            <div class="form-group">
            <label for="title-tw">Tiêu đề twitter:</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-title-tw" class="text-danger">100</span> ký tự</span>
            <input type="text" maxlength="100" class="form-control" name="title-tw" 
            placeholder="Nhập tiêu đề cho trang chủ" onkeyup="limit(this,100,'#home-title-tw')" 
            onkeydown="limit(this,100,'#home-title-tw')" required>
            <div class="invalid-feedback">Vui lòng nhập tiêu đề cho trang chủ</div>
            </div>
            
            <div class="form-group">
            <label for="description-tw">Mô tả twitter:</label>
            <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-description-tw" class="text-danger">250</span> ký tự</span>
            <input type="text" maxlength="250" class="form-control" name="description-tw" 
            placeholder="Nhập mô tả cho trang chủ" onkeyup="limit(this,250,'#home-description-tw')" 
            onkeydown="limit(this,250,'#home-description-tw')" required>
            <div class="invalid-feedback">Vui lòng nhập mô tả cho trang chủ</div>
            </div>
            
            <div class="form-group">
            <label for="img-tw">Ảnh đại diện twitter:</label>
            <input type="file" class="form-control" name="img-tw" required>
            <div class="invalid-feedback">Vui lòng nhập ảnh đại diện cho trang chủ</div>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
        <?php  
        }
      ?>
  </div>
  <div class="tab-pane fade" id="premier" role="tabpanel">

  </div>
  <div class="tab-pane fade" id="titanx" role="tabpanel">

  </div>
  <div class="tab-pane fade" id="news" role="tabpanel">

  </div>
  <div class="tab-pane fade" id="about" role="tabpanel">

  </div>
  <div class="tab-pane fade" id="agency" role="tabpanel">

  </div>
  <div class="tab-pane fade" id="tag" role="tabpanel">

  </div>
  <div class="tab-pane fade" id="search" role="tabpanel"></div>
</div>
</div>