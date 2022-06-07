<div style="margin: 0 auto; width : 94%">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab">Trang Chủ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-premier-tab" data-toggle="pill" href="#premier" role="tab">Premier Series</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-titanx-tab" data-toggle="pill" href="#titanx" role="tab">Titan X Series</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#news" role="tab">Tin Tức</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-about-tab" data-toggle="pill" href="#about" role="tab">Chúng Tôi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-agency-tab" data-toggle="pill" href="#agency" role="tab">Đại Lý</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-tag-tab" data-toggle="pill" href="#tag" role="tab">Từ Khóa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-search-tab" data-toggle="pill" href="#search" role="tab">Tìm Kiếm</a>
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

              <input type="hidden" class="form-control" value="1" name="id_pages_home">
              <div class="form-group">
              <label for="title">Tiêu đề :</label>
              <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-title" class="text-danger">100</span> ký tự</span>
              <input type="text" maxlength="100" class="form-control" name="title" 
              placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#home-title')" 
              onkeydown="limit(this,100,'#home-title')" value="<?php print $sp['title']?>" required>
              <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
              </div>

              <div class="form-group">
              <label for="description">Mô tả:</label>
              <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-description" class="text-danger">250</span> ký tự</span>
              <input type="text" maxlength="250" class="form-control" name="description" 
              placeholder="Nhập mô tả" onkeyup="limit(this,250,'#home-description')" 
              onkeydown="limit(this,250,'#home-description')" value="<?php print $sp['description']?>" required>
              <div class="invalid-feedback">Vui lòng nhập mô tả</div>
              </div>
              
              <div class="form-group">
              <label for="keyword">Từ khóa :</label>
              <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-keyword" class="text-danger">100</span> ký tự</span>
              <input type="text" maxlength="100" class="form-control" name="keyword" 
              placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#home-keyword')" 
              onkeydown="limit(this,100,'#home-keyword')" value="<?php print $sp['keyword']?>" required>
              <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
              </div>
              
              <div class="form-group">
              <label for="link-fb">Đường dẫn fanpage facebook:</label>
              <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-link-fb" class="text-danger">100</span> ký tự</span>
              <input type="url" maxlength="100" class="form-control" name="link_fb" 
              placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#home-link-fb')" 
              onkeydown="limit(this,100,'#home-link-fb')" value="<?php print $sp['link_fb']?>" required>
              <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
              </div>

              <div class="form-group">
              <label for="img-fb">Ảnh đại diện facebook:</label>
              <input type="file" class="form-control" name="img_fb" required>
              <input type="hidden" class="form-control" value="<?php print $sp['img_fb']?>" name="img_fb_old">
              <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
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
              <input type="text" maxlength="100" class="form-control" name="title_fb" 
              placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#home-title-fb')" 
              onkeydown="limit(this,100,'#home-title-fb')" value="<?php print $sp['title_fb']?>" required>
              <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
              </div>
              
              <div class="form-group">
              <label for="description-fb">Mô tả facebook:</label>
              <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-description-fb" class="text-danger">250</span> ký tự</span>
              <input type="text" maxlength="250" class="form-control" name="description_fb" 
              placeholder="Nhập mô tả" onkeyup="limit(this,250,'#home-description-fb')" 
              onkeydown="limit(this,250,'#home-description-fb')" value="<?php print $sp['description_fb']?>" required>
              <div class="invalid-feedback">Vui lòng nhập mô tả</div>
              </div>
              
              <div class="form-group">
              <label for="keyword-fb">Từ khóa facebook:</label>
              <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-keyword-fb" class="text-danger">100</span> ký tự</span>
              <input type="text" maxlength="100" class="form-control" name="keyword_fb" 
              placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#home-keyword-fb')" 
              onkeydown="limit(this,100,'#home-keyword-fb')" value="<?php print $sp['keyword_fb']?>" required>
              <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
              </div>

              <div class="form-group">
              <label for="title-tw">Tiêu đề twitter:</label>
              <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-title-tw" class="text-danger">100</span> ký tự</span>
              <input type="text" maxlength="100" class="form-control" name="title_tw" 
              placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#home-title-tw')" 
              onkeydown="limit(this,100,'#home-title-tw')" value="<?php print $sp['title_tw']?>" required>
              <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
              </div>
              
              <div class="form-group">
              <label for="description-tw">Mô tả twitter:</label>
              <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-description-tw" class="text-danger">250</span> ký tự</span>
              <input type="text" maxlength="250" class="form-control" name="description_tw" 
              placeholder="Nhập mô tả" onkeyup="limit(this,250,'#home-description-tw')" 
              onkeydown="limit(this,250,'#home-description-tw')" value="<?php print $sp['description_tw']?>" required>
              <div class="invalid-feedback">Vui lòng nhập mô tả</div>
              </div>
              
              <div class="form-group">
              <label for="img-tw">Ảnh đại diện twitter:</label>
              <input type="file" class="form-control" name="img_tw" required>
              <input type="hidden" class="form-control" value="<?php print $sp['img_tw']?>" name="img_tw_old">
              <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
              <?php 
              if($sp['img_tw'] != ''){
              ?>
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="<?php print '..'.$sp['img_tw']?>" alt="Ảnh đại diện">
              </div>
              </div>
              <?php
                }
              ?>

              <button type="submit" class="btn btn-primary">Cập nhật</button>
          </form>
          <?php  
          }
        ?>
    </div>
    <div class="tab-pane fade" id="premier" role="tabpanel">
    <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 2 ";
        $seo_pages = executeResult($sql);
        foreach ($seo_pages as $sp){

      ?>
     <form id="feditpremier" class="needs-validation" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="form-control" value="2" name="id_pages_premier" >

        <div class="form-group">
        <label for="title">Tiêu đề :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-title" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#premier-title')" 
        onkeydown="limit(this,100,'#premier-title')" value="<?php print $sp['title']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description">Mô tả:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-description" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#premier-description')" 
        onkeydown="limit(this,250,'#premier-description')" value="<?php print $sp['description']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword">Từ khóa :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-keyword" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#premier-keyword')" 
        onkeydown="limit(this,100,'#premier-keyword')" value="<?php print $sp['keyword']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="link-fb">Đường dẫn fanpage facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-link-fb" class="text-danger">100</span> ký tự</span>
        <input type="url" maxlength="100" class="form-control" name="link_fb" 
        placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#premier-link-fb')" 
        onkeydown="limit(this,100,'#premier-link-fb')" value="<?php print $sp['link_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
        </div>

        <div class="form-group">
        <label for="img-fb">Ảnh đại diện facebook:</label>
        <input type="file" class="form-control" name="img_fb" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_fb']?>" name="img_fb_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
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
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-title-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_fb" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#premier-title-fb')" 
        onkeydown="limit(this,100,'#premier-title-fb')" value="<?php print $sp['title_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-fb">Mô tả facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-description-fb" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_fb" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#premier-description-fb')" 
        onkeydown="limit(this,250,'#premier-description-fb')" value="<?php print $sp['description_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword-fb">Từ khóa facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-keyword-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword_fb" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#premier-keyword-fb')" 
        onkeydown="limit(this,100,'#premier-keyword-fb')" value="<?php print $sp['keyword_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="title-tw">Tiêu đề twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-title-tw" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_tw" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#premier-title-tw')" 
        onkeydown="limit(this,100,'#premier-title-tw')" value="<?php print $sp['title_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-tw">Mô tả twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="premier-description-tw" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_tw" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#premier-description-tw')" 
        onkeydown="limit(this,250,'#premier-description-tw')" value="<?php print $sp['description_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="img-tw">Ảnh đại diện twitter:</label>
        <input type="file" class="form-control" name="img_tw" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_tw']?>" name="img_tw_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
        <?php 
        if($sp['img_tw'] != ''){
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php print '..'.$sp['img_tw']?>" alt="Ảnh đại diện">
        </div>
        </div>
        <?php
          }
        ?>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        <?php  
        }
        ?>
    </div>
    <div class="tab-pane fade" id="titanx" role="tabpanel">
    <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 3 ";
        $seo_pages = executeResult($sql);
        foreach ($seo_pages as $sp){

      ?>
     <form id="fedittitanx" class="needs-validation" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="form-control" value="3" name="id_pages_titanx" >

        <div class="form-group">
        <label for="title">Tiêu đề :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-title" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#titanx-title')" 
        onkeydown="limit(this,100,'#titanx-title')" value="<?php print $sp['title']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description">Mô tả:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-description" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#titanx-description')" 
        onkeydown="limit(this,250,'#titanx-description')" value="<?php print $sp['description']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword">Từ khóa :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-keyword" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#titanx-keyword')" 
        onkeydown="limit(this,100,'#titanx-keyword')" value="<?php print $sp['keyword']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="link-fb">Đường dẫn fanpage facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-link-fb" class="text-danger">100</span> ký tự</span>
        <input type="url" maxlength="100" class="form-control" name="link_fb" 
        placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#titanx-link-fb')" 
        onkeydown="limit(this,100,'#titanx-link-fb')" value="<?php print $sp['link_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
        </div>

        <div class="form-group">
        <label for="img-fb">Ảnh đại diện facebook:</label>
        <input type="file" class="form-control" name="img_fb" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_fb']?>" name="img_fb_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
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
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-title-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_fb" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#titanx-title-fb')" 
        onkeydown="limit(this,100,'#titanx-title-fb')" value="<?php print $sp['title_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-fb">Mô tả facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-description-fb" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_fb" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#titanx-description-fb')" 
        onkeydown="limit(this,250,'#titanx-description-fb')" value="<?php print $sp['description_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword-fb">Từ khóa facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-keyword-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword_fb" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#titanx-keyword-fb')" 
        onkeydown="limit(this,100,'#titanx-keyword-fb')" value="<?php print $sp['keyword_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="title-tw">Tiêu đề twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-title-tw" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_tw" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#titanx-title-tw')" 
        onkeydown="limit(this,100,'#titanx-title-tw')" value="<?php print $sp['title_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-tw">Mô tả twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="titanx-description-tw" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_tw" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#titanx-description-tw')" 
        onkeydown="limit(this,250,'#titanx-description-tw')" value="<?php print $sp['description_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="img-tw">Ảnh đại diện twitter:</label>
        <input type="file" class="form-control" name="img_tw" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_tw']?>" name="img_tw_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
        <?php 
        if($sp['img_tw'] != ''){
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php print '..'.$sp['img_tw']?>" alt="Ảnh đại diện">
        </div>
        </div>
        <?php
          }
        ?>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        <?php  
        }
        ?>
    </div>
    <div class="tab-pane fade" id="news" role="tabpanel">
    <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 4 ";
        $seo_pages = executeResult($sql);
        foreach ($seo_pages as $sp){

      ?>
     <form id="feditnews" class="needs-validation" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="form-control" value="4" name="id_pages_news" >

        <div class="form-group">
        <label for="title">Tiêu đề :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-title" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#news-title')" 
        onkeydown="limit(this,100,'#news-title')" value="<?php print $sp['title']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description">Mô tả:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-description" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#news-description')" 
        onkeydown="limit(this,250,'#news-description')" value="<?php print $sp['description']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword">Từ khóa :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-keyword" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#news-keyword')" 
        onkeydown="limit(this,100,'#news-keyword')" value="<?php print $sp['keyword']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="link-fb">Đường dẫn fanpage facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-link-fb" class="text-danger">100</span> ký tự</span>
        <input type="url" maxlength="100" class="form-control" name="link_fb" 
        placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#news-link-fb')" 
        onkeydown="limit(this,100,'#news-link-fb')" value="<?php print $sp['link_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
        </div>

        <div class="form-group">
        <label for="img-fb">Ảnh đại diện facebook:</label>
        <input type="file" class="form-control" name="img_fb" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_fb']?>" name="img_fb_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
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
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-title-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_fb" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#news-title-fb')" 
        onkeydown="limit(this,100,'#news-title-fb')" value="<?php print $sp['title_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-fb">Mô tả facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-description-fb" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_fb" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#news-description-fb')" 
        onkeydown="limit(this,250,'#news-description-fb')" value="<?php print $sp['description_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword-fb">Từ khóa facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-keyword-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword_fb" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#news-keyword-fb')" 
        onkeydown="limit(this,100,'#news-keyword-fb')" value="<?php print $sp['keyword_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="title-tw">Tiêu đề twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-title-tw" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_tw" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#news-title-tw')" 
        onkeydown="limit(this,100,'#news-title-tw')" value="<?php print $sp['title_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-tw">Mô tả twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="news-description-tw" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_tw" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#news-description-tw')" 
        onkeydown="limit(this,250,'#news-description-tw')" value="<?php print $sp['description_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="img-tw">Ảnh đại diện twitter:</label>
        <input type="file" class="form-control" name="img_tw" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_tw']?>" name="img_tw_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
        <?php 
        if($sp['img_tw'] != ''){
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php print '..'.$sp['img_tw']?>" alt="Ảnh đại diện">
        </div>
        </div>
        <?php
          }
        ?>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        <?php  
        }
        ?>
    </div>
    <div class="tab-pane fade" id="about" role="tabpanel">
    <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 5 ";
        $seo_pages = executeResult($sql);
        foreach ($seo_pages as $sp){

      ?>
     <form id="feditabout" class="needs-validation" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="form-control" value="5" name="id_pages_about" >

        <div class="form-group">
        <label for="title">Tiêu đề :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-title" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#about-title')" 
        onkeydown="limit(this,100,'#about-title')" value="<?php print $sp['title']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description">Mô tả:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-description" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#about-description')" 
        onkeydown="limit(this,250,'#about-description')" value="<?php print $sp['description']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword">Từ khóa :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-keyword" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#about-keyword')" 
        onkeydown="limit(this,100,'#about-keyword')" value="<?php print $sp['keyword']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="link-fb">Đường dẫn fanpage facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-link-fb" class="text-danger">100</span> ký tự</span>
        <input type="url" maxlength="100" class="form-control" name="link_fb" 
        placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#about-link-fb')" 
        onkeydown="limit(this,100,'#about-link-fb')" value="<?php print $sp['link_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
        </div>

        <div class="form-group">
        <label for="img-fb">Ảnh đại diện facebook:</label>
        <input type="file" class="form-control" name="img_fb" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_fb']?>" name="img_fb_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
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
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-title-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_fb" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#about-title-fb')" 
        onkeydown="limit(this,100,'#about-title-fb')" value="<?php print $sp['title_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-fb">Mô tả facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-description-fb" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_fb" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#about-description-fb')" 
        onkeydown="limit(this,250,'#about-description-fb')" value="<?php print $sp['description_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword-fb">Từ khóa facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-keyword-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword_fb" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#about-keyword-fb')" 
        onkeydown="limit(this,100,'#about-keyword-fb')" value="<?php print $sp['keyword_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="title-tw">Tiêu đề twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-title-tw" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_tw" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#about-title-tw')" 
        onkeydown="limit(this,100,'#about-title-tw')" value="<?php print $sp['title_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-tw">Mô tả twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="about-description-tw" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_tw" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#about-description-tw')" 
        onkeydown="limit(this,250,'#about-description-tw')" value="<?php print $sp['description_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="img-tw">Ảnh đại diện twitter:</label>
        <input type="file" class="form-control" name="img_tw" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_tw']?>" name="img_tw_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
        <?php 
        if($sp['img_tw'] != ''){
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php print '..'.$sp['img_tw']?>" alt="Ảnh đại diện">
        </div>
        </div>
        <?php
          }
        ?>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        <?php  
        }
        ?>
    </div>
    <div class="tab-pane fade" id="agency" role="tabpanel">
    <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 6 ";
        $seo_pages = executeResult($sql);
        foreach ($seo_pages as $sp){

      ?>
     <form id="feditagency" class="needs-validation" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="form-control" value="6" name="id_pages_agency" >

        <div class="form-group">
        <label for="title">Tiêu đề :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-title" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#agency-title')" 
        onkeydown="limit(this,100,'#agency-title')" value="<?php print $sp['title']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description">Mô tả:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-description" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#agency-description')" 
        onkeydown="limit(this,250,'#agency-description')" value="<?php print $sp['description']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword">Từ khóa :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-keyword" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#agency-keyword')" 
        onkeydown="limit(this,100,'#agency-keyword')" value="<?php print $sp['keyword']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="link-fb">Đường dẫn fanpage facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-link-fb" class="text-danger">100</span> ký tự</span>
        <input type="url" maxlength="100" class="form-control" name="link_fb" 
        placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#agency-link-fb')" 
        onkeydown="limit(this,100,'#agency-link-fb')" value="<?php print $sp['link_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
        </div>

        <div class="form-group">
        <label for="img-fb">Ảnh đại diện facebook:</label>
        <input type="file" class="form-control" name="img_fb" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_fb']?>" name="img_fb_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
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
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-title-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_fb" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#agency-title-fb')" 
        onkeydown="limit(this,100,'#agency-title-fb')" value="<?php print $sp['title_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-fb">Mô tả facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-description-fb" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_fb" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#agency-description-fb')" 
        onkeydown="limit(this,250,'#agency-description-fb')" value="<?php print $sp['description_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword-fb">Từ khóa facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-keyword-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword_fb" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#agency-keyword-fb')" 
        onkeydown="limit(this,100,'#agency-keyword-fb')" value="<?php print $sp['keyword_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="title-tw">Tiêu đề twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-title-tw" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_tw" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#agency-title-tw')" 
        onkeydown="limit(this,100,'#agency-title-tw')" value="<?php print $sp['title_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-tw">Mô tả twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="agency-description-tw" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_tw" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#agency-description-tw')" 
        onkeydown="limit(this,250,'#agency-description-tw')" value="<?php print $sp['description_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="img-tw">Ảnh đại diện twitter:</label>
        <input type="file" class="form-control" name="img_tw" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_tw']?>" name="img_tw_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
        <?php 
        if($sp['img_tw'] != ''){
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php print '..'.$sp['img_tw']?>" alt="Ảnh đại diện">
        </div>
        </div>
        <?php
          }
        ?>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        <?php  
        }
        ?>
    </div>
    <div class="tab-pane fade" id="tag" role="tabpanel">
    <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 7 ";
        $seo_pages = executeResult($sql);
        foreach ($seo_pages as $sp){

      ?>
     <form id="fedittag" class="needs-validation" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="form-control" value="7" name="id_pages_tag" >

        <div class="form-group">
        <label for="description">Mô tả:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-description" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#tag-description')" 
        onkeydown="limit(this,250,'#tag-description')" value="<?php print $sp['description']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword">Từ khóa :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-keyword" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#tag-keyword')" 
        onkeydown="limit(this,100,'#tag-keyword')" value="<?php print $sp['keyword']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="link-fb">Đường dẫn fanpage facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-link-fb" class="text-danger">100</span> ký tự</span>
        <input type="url" maxlength="100" class="form-control" name="link_fb" 
        placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#tag-link-fb')" 
        onkeydown="limit(this,100,'#tag-link-fb')" value="<?php print $sp['link_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
        </div>

        <div class="form-group">
        <label for="img-fb">Ảnh đại diện facebook:</label>
        <input type="file" class="form-control" name="img_fb" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_fb']?>" name="img_fb_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
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
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-title-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_fb" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#tag-title-fb')" 
        onkeydown="limit(this,100,'#tag-title-fb')" value="<?php print $sp['title_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-fb">Mô tả facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-description-fb" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_fb" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#tag-description-fb')" 
        onkeydown="limit(this,250,'#tag-description-fb')" value="<?php print $sp['description_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword-fb">Từ khóa facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-keyword-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword_fb" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#tag-keyword-fb')" 
        onkeydown="limit(this,100,'#tag-keyword-fb')" value="<?php print $sp['keyword_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="title-tw">Tiêu đề twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-title-tw" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_tw" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#tag-title-tw')" 
        onkeydown="limit(this,100,'#tag-title-tw')" value="<?php print $sp['title_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-tw">Mô tả twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-description-tw" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_tw" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#tag-description-tw')" 
        onkeydown="limit(this,250,'#tag-description-tw')" value="<?php print $sp['description_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="img-tw">Ảnh đại diện twitter:</label>
        <input type="file" class="form-control" name="img_tw" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_tw']?>" name="img_tw_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
        <?php 
        if($sp['img_tw'] != ''){
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php print '..'.$sp['img_tw']?>" alt="Ảnh đại diện">
        </div>
        </div>
        <?php
          }
        ?>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        <?php  
        }
        ?>
    </div>
    <div class="tab-pane fade" id="search" role="tabpanel">
    <?php
        $sql = "SELECT * FROM `seo_pages` WHERE `id` = 8 ";
        $seo_pages = executeResult($sql);
        foreach ($seo_pages as $sp){

      ?>
     <form id="feditsearch" class="needs-validation" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="form-control" value="8" name="id_pages_search" >

        <div class="form-group">
        <label for="description">Mô tả:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-description" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#tag-description')" 
        onkeydown="limit(this,250,'#tag-description')" value="<?php print $sp['description']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword">Từ khóa :</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-keyword" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#tag-keyword')" 
        onkeydown="limit(this,100,'#tag-keyword')" value="<?php print $sp['keyword']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="link-fb">Đường dẫn fanpage facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-link-fb" class="text-danger">100</span> ký tự</span>
        <input type="url" maxlength="100" class="form-control" name="link_fb" 
        placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#tag-link-fb')" 
        onkeydown="limit(this,100,'#tag-link-fb')" value="<?php print $sp['link_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
        </div>

        <div class="form-group">
        <label for="img-fb">Ảnh đại diện facebook:</label>
        <input type="file" class="form-control" name="img_fb" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_fb']?>" name="img_fb_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
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
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-title-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_fb" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#tag-title-fb')" 
        onkeydown="limit(this,100,'#tag-title-fb')" value="<?php print $sp['title_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-fb">Mô tả facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-description-fb" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_fb" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#tag-description-fb')" 
        onkeydown="limit(this,250,'#tag-description-fb')" value="<?php print $sp['description_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="keyword-fb">Từ khóa facebook:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-keyword-fb" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="keyword_fb" 
        placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#tag-keyword-fb')" 
        onkeydown="limit(this,100,'#tag-keyword-fb')" value="<?php print $sp['keyword_fb']?>" required>
        <div class="invalid-feedback">Vui lòng nhập từ khóa</div>
        </div>

        <div class="form-group">
        <label for="title-tw">Tiêu đề twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-title-tw" class="text-danger">100</span> ký tự</span>
        <input type="text" maxlength="100" class="form-control" name="title_tw" 
        placeholder="Nhập tiêu đề" onkeyup="limit(this,100,'#tag-title-tw')" 
        onkeydown="limit(this,100,'#tag-title-tw')" value="<?php print $sp['title_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập tiêu đề</div>
        </div>

        <div class="form-group">
        <label for="description-tw">Mô tả twitter:</label>
        <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="tag-description-tw" class="text-danger">250</span> ký tự</span>
        <input type="text" maxlength="250" class="form-control" name="description_tw" 
        placeholder="Nhập mô tả" onkeyup="limit(this,250,'#tag-description-tw')" 
        onkeydown="limit(this,250,'#tag-description-tw')" value="<?php print $sp['description_tw']?>" required>
        <div class="invalid-feedback">Vui lòng nhập mô tả</div>
        </div>

        <div class="form-group">
        <label for="img-tw">Ảnh đại diện twitter:</label>
        <input type="file" class="form-control" name="img_tw" required>
        <input type="hidden" class="form-control" value="<?php print $sp['img_tw']?>" name="img_tw_old">
        <div class="invalid-feedback">Vui lòng nhập ảnh đại diện</div>
        <?php 
        if($sp['img_tw'] != ''){
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php print '..'.$sp['img_tw']?>" alt="Ảnh đại diện">
        </div>
        </div>
        <?php
          }
        ?>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        <?php  
        }
        ?>
    </div>
  </div>
</div>