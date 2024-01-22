<html>
<!-- List Khách hàng -->
<div class="row listkhach is-hidden" id="listkhach">
  <div class="col-lg-12">
    <!-- /.card-header -->
    <div class="card-header" id="mau-info-form">
      <h3 class="card-title"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;
        Danh sách khách hàng
      </h3>
    </div>
    <div class="card-footer">
      <table border="0" style="width: 100%;">
        <tr>
          <td class="col-sm-4">
            <div class="input-group input-group-sm">
              <input type="text" class="timkhach">
              <span class="input-group-append">
                <button type="button" class="btn btn-outline-info btn-flat btntimkhach"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Tìm</button>
              </span>
            </div>
          </td>
          <td class="col-sm-4">
            <button type="button" class="btn btn-outline-success btn-sm float-right btnloadkhach"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Tải lại dữ liệu</button>
          </td>
        </tr>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">STT</th>
            <th>Tên khách hàng</th>
            <th>Email tài khoản</th>
            <th>Tên tài khoản</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody class="addListKH">

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- kết thúc List Khách hàng -->

<!-- Form Khách hàng -->
<div class="row formkhach is-hidden" id="formkhach">
  <div class="col-lg-12">
    <div class="card card-info">
      <!-- /.card-header -->
      <div class="card-header" id="mau-info-form">
        <h3 class="card-title"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;
          Điền thông tin khách hàng
        </h3>
      </div>
      <!-- form start -->
      <form class="form-horizontal">
        <!-- /.card-body -->
        <div class="card-body ">
          <div class="row">
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">ID khách hàng</label>
              <div class="col-sm-8">
                <input type="text" class="form-control id_user" placeholder="Mã khách hàng" readonly>
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Tên khách hàng</label>
              <div class="col-sm-8">
                <input type="text" class="form-control hoten" placeholder="Tên khách hàng">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-6 col-form-label">Giới tính</label>
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control gioitinh">
                    <option value="0">Chọn giới tính</option>
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Email tài khoản</label>
              <div class="col-sm-8">
                <input type="email" class="form-control email" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Tên tài khoản</label>
              <div class="col-sm-8">
                <input type="text" class="form-control username" placeholder="Tên tài khoản">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Số điện thoại</label>
              <div class="col-sm-8">
                <input type="number" class="form-control sdt" placeholder="Số điện thoại">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Ngày sinh</label>
              <div class="col-sm-8">
                <input type="date" class="form-control ngaysinh" placeholder="ngày/tháng/năm">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-11">
              <label class="col-sm-4 col-form-label">Địa chỉ</label>
              <div class="col-sm-11">
                <input type="text" class="form-control diachi" placeholder="Địa chỉ">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
          <button type="button" class="btn bg-gradient-success btnluukhach"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Lưu</button>
          <button type="button" class="btn btn-outline-info btnbackkhach"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Quay lại</button>
          <button type="button" class="btn btn-outline-secondary float-right btnlamlaikhach"><i class="fa fa-refresh"></i>&nbsp;Làm Lại</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- kết thúc Form Khách hàng -->

</html>