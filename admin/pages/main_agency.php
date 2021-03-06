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

<!-- MODAL ADD AGENCY -->

  <div class="modal fade" id="addAgency" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width : 700px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm đại lý</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body-view">
        <form id="fAddAgency" class="needs-validation" enctype="multipart/form-data" novalidate>

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
        <label for="address">Địa chỉ :</label>
        <input type="text" class="form-control" id="address" name="address" 
        placeholder="Nhập địa chỉ đại lý" required>
        <div class="invalid-feedback">Vui lòng nhập địa chỉ đại lý</div>
        </div>

        <div class="form-group">
        <label for="phone">Số điện thoại :</label>
        <input type="text" class="form-control" name="phone" id="phone"
        maxlength="10" placeholder="Nhập số điện thoại đại lý"  required>
        <div class="invalid-feedback">Vui lòng nhập số điện thoại đại lý</div>
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

<!-- MODAL EDIT AGENCY -->

<div class="modal fade" id="editAgency" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width : 700px" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Chỉnh sửa đại lý</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body-view-1">
      <form id="fEditAgency" class="needs-validation" enctype="multipart/form-data" novalidate>
            <input type="hidden" name="id-agency" id="id-agency" value="" required>
            <input type="hidden" name="img-old" id="img-old" value="" required>

            <div class="form-group">
            <label for="edit-img">Ảnh đại lý :</label>
            <input type="file" class="form-control" name="edit-img" id="edit-img" required>
            <div class="invalid-feedback">Vui lòng nhập ảnh đại đại lý</div>
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" id="card-img-top" src="" alt="Image">
            </div>
            </div>

            <div class="form-group">
            <label for="edit-name">Tên đại lý :</label>
            <input type="text" class="form-control" value="" name="edit-name"  id="edit-name" 
            placeholder="Nhập tên đại lý" required>
            <div class="invalid-feedback">Vui lòng nhập tên đại lý</div>
            </div>

            <div class="form-group">
            <label for="edit-address">Địa chỉ :</label>
            <input type="text" class="form-control" value="" id="edit-address" name="edit-address" 
            placeholder="Nhập địa chỉ đại lý" required>
            <div class="invalid-feedback">Vui lòng nhập địa chỉ đại lý</div>
            </div>

            <div class="form-group">
            <label for="edit-phone">Số điện thoại :</label>
            <input type="text" class="form-control" value="" name="edit-phone" id="edit-phone"
            maxlength="10" placeholder="Nhập số điện thoại đại lý"  required>
            <div class="invalid-feedback">Vui lòng nhập số điện thoại đại lý</div>
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

