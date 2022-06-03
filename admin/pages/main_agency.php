<div class="container-fluid">
    <div class="row d-flex justify-content-end ">
    <a type="button" data-toggle="modal" data-target="#addAgency" class="btn btn-outline-success mb-3 mr-5">Thêm đại lý</a>
      <div style="width: 94%; margin : 0 auto">
        <div class="row">
          <div class="col-xl-12">
            <table id="example" class="table table-striped table-bordered" style="width: 100%;">
              <thead>
                <th>Id</th>
                <th>Ảnh đại lý</th>
                <th>Tên đại lý</th>
                <th>Địa chỉ đại lý</th>
                <th>Số điện thoại</th>
                <th>Thời gian đăng</th>
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

  <div class="modal fade" id="addAgency" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm đại lý</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body-view">
        <form id="fAddAgency" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>

        <div class="form-group">
        <label for="img">Ảnh đại lý :</label>
        <input type="file" class="form-control" name="img" id="img" required>
        <div class="invalid-feedback">Vui lòng nhập ảnh đại đại lý</div>
        </div>

        <div class="form-group">
        <label for="name">Tên đại lý :</label>
        <input type="text" class="form-control" name="name"  id="name" 
        placeholder="Nhập tên đại lý" required>
        <div class="invalid-feedback">Vui lòng nhập tên đại lý</div>
        </div>

        <div class="form-group">
        <label for="adrress">Địa chỉ :</label>
        <input type="text" class="form-control" id="adrress" name="adrress" 
        placeholder="Nhập địa chỉ đại lý" required>
        <div class="invalid-feedback">Vui lòng nhập địa chỉ đại lý</div>
        </div>

        <div class="form-group">
        <label for="phone">Số điện thoại :</label>
        <input type="text" class="form-control" name="description" id="description"
        maxlength="10" placeholder="Nhập mô tả bài viết"  required>
        <div class="invalid-feedback">Vui lòng nhập mô tả bài viết</div>
        </div>

        <button type="button" class="btn btn-primary">Thêm</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

