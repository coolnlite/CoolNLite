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
  <form id="fedithome" class="needs-validation" enctype="multipart/form-data" novalidate>

                <div class="form-group">
                <label for="title">Tiêu đề :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-title" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" name="title" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#home-title')" 
                onkeydown="limit(this,100,'#home-title')" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho trang chủ</div>
                </div>

                <div class="form-group">
                <label for="description">Mô tả:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-description" class="text-danger">250</span> ký tự</span>
                <input type="text" maxlength="250" class="form-control" name="description" 
                placeholder="Nhập mô tả cho bài viết" onkeyup="limit(this,250,'#home-description')" 
                onkeydown="limit(this,250,'#home-description')" required>
                <div class="invalid-feedback">Vui lòng nhập mô tả cho trang chủ</div>
                </div>
                
                <div class="form-group">
                <label for="keyword">Từ khóa :</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-keyword" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" name="keyword" 
                placeholder="COOL N LITE, phim cách nhiệt, MTFLIM" onkeyup="limit(this,100,'#home-keyword')" 
                onkeydown="limit(this,100,'#home-keyword')" required>
                <div class="invalid-feedback">Vui lòng nhập từ khóa cho trang chủ</div>
                </div>
                
                <div class="form-group">
                <label for="link-fb">Đường dẫn fanpage facebook:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-link-fb" class="text-danger">100</span> ký tự</span>
                <input type="url" maxlength="100" class="form-control" id="link-fb" name="link-fb" 
                placeholder="https://www.facebook.com/..." onkeyup="limit(this,100,'#home-link-fb')" 
                onkeydown="limit(this,100,'#home-link-fb')" required>
                <div class="invalid-feedback">Vui lòng nhập đường dẫn fanpage</div>
                </div>

                <div class="form-group">
                <label for="img-fb">Ảnh đại diện facebook:</label>
                <input type="file" class="form-control" name="img-fb" required>
                <div class="invalid-feedback">Vui lòng nhập ảnh đại diện cho trang chủ</div>
                </div>
                
                <div class="form-group">
                <label for="title-fb">Tiêu đề facebook:</label>
                <span class="ml-1 font-weight-bold">Bạn còn tối đa <span id="home-title-fb" class="text-danger">100</span> ký tự</span>
                <input type="text" maxlength="100" class="form-control" name="title-fb" 
                placeholder="Nhập tiêu đề cho bài viết" onkeyup="limit(this,100,'#home-title-fb')" 
                onkeydown="limit(this,100,'#home-title-fb')" required>
                <div class="invalid-feedback">Vui lòng nhập tiêu đề cho trang chủ</div>
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