 <!-- Popup Form -->
 <div class="modal-form" id="modal-form">
    <div class="modal-bg-form">
    </div>
    <div class="modal-container modal-content">
      <div class="modal-rows">
        <section class="box-main-form" id="box-main-form">
          <header class="header-form">
            <button type="button" class="txt-left">
              <span class="fas fa-times"></span>
            </button>
            <div class="txt-center">
              <span>
                LIÊN HỆ CHÚNG TÔI
              </span>
            </div>
            <button type="button" class="txt-right">
              <span class="fas fa-times"></span>
            </button>
          </header>
          <form method="POST" id="form-contact" novalidate="novalidate">
            <div class="title-form">
              <h3>VUI LÒNG ĐỂ LẠI THÔNG TIN LIÊN HỆ THEO MẪU BÊN DƯỚI</h3>
            </div>
            <div class="all-group">

              <div class="form-group">
                <label class="title" for="fullname">Họ và tên<span> *</span></label>
                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nhập họ và tên"
                  autocomplete="off">
              </div>

              <div class="form-group">
                <label class="title" for="tel">Số điện thoại<span> *</span></label>
                <input type="text" name="tel" class="form-control" id="tel" placeholder="Nhập số điện thoại">
              </div>

              <div class="dropdown models form-group">
                <label class="title">Dòng xe</label>
                <div class="select-btn">
                  <span>Vui lòng chọn dữ liệu</span>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <div class="content">
                  <div class="search">
                    <i class="fas fa-search"></i>
                    <input spellcheck="false" type="text" placeholder="Tìm kiếm">
                  </div>
                  <ul class="options"></ul>
                </div>
              </div>

              <div class="dropdown area form-group">
                <label class="title">Khu vực</label>
                <div class="select-btn">
                  <span>Vui lòng chọn dữ liệu</span>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <div class="content">
                  <div class="search">
                    <i class="fas fa-search"></i>
                    <input spellcheck="false" type="text" placeholder="Tìm kiếm">
                  </div>
                  <ul class="options"></ul>
                </div>
              </div>

              <div class="form-group">
                <label class="title" for="password">Tin nhắn</label>
                <textarea name="messenger" class="form-control" id="messenger"></textarea>
              </div>

              <button type="submit" class="btn-send btn-submit btn-contact">Gửi Đi <span
                  class="fas fa-paper-plane"></span></button>

            </div>
          </form>
        </section>
        <section class="notify-box">

          <div class="container-notify" id="success">
            <div class="box-btn-notify">
              <button type="button" class="btn-close-notify">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="box-icons">
              <i class="fas fa-check"></i>
            </div>
            <div class="box-content">
              <h1>Gửi thông tin thành công</h1>
              <p>Chúng tôi sẽ liên hệ với bạn sớm nhất</p>
            </div>
          </div>

          <div class="container-notify" id="error">
            <div class="box-btn-notify">
              <button type="button" class="btn-close-notify">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="box-icons">
              <i class="fas fa-times"></i>
            </div>
            <div class="box-content">
              <h1>Gửi thông tin không thành công !</h1>
              <p>Vui lòng thử lại sau</p>
            </div>
          </div>

        </section>
      </div>
    </div>
  </div>
  <!-- Popup Form -->