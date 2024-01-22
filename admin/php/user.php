<html>
<!-- List Tài khoản -->
<div class="row listuser is-hidden" id="listuser">
    <div class="col-lg-12">
        <!-- /.card-header -->
        <div class="card-header" id="mau-info-form">
            <h3 class="card-title"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;
                Danh sách tài khoản
            </h3>
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
            <table border="0" style="width: 100%;">
                <tr>
                    <td class="col-sm-4">
                        <div class="input-group input-group-sm">
                            <input type="text" class="timuser">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-outline-info btn-flat btntimuser"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Tìm</button>
                            </span>
                        </div>
                    </td>
                    <td class="col-sm-4">
                        <button type="button" class="btn btn-outline-success btn-sm float-right btnthemuser"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Thêm</button>
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
                        <th>Email</th>
                        <th>Tên tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Chức vụ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody class="addListUser">

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- kết thúc List Tài khoản -->

<!-- Form Tài khoản -->

<div class="row formuser is-hidden" id="formuser">
  <div class="col-lg-12">
    <div class="card card-info">
      <!-- /.card-header -->
      <div class="card-header" id="mau-info-form">
        <h3 class="card-title"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;
          Điền thông tin tài khoản
        </h3>
      </div>
      <!-- form start -->
      <form class="form-horizontal">
        <!-- /.card-body -->
        <div class="card-body ">
          <div class="row">
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">ID</label>
              <div class="col-sm-8">
                <input type="text" class="form-control id_user" placeholder="ID tài khoản" readonly>
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Tên tài khoản</label>
              <div class="col-sm-8">
                <input type="text" class="form-control username" placeholder="Tên tài khoản">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-6 col-form-label">Chức vụ</label>
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control chucvu">
                    <option value="0">Người dùng</option>
                    <option value="1">Quản trị viên</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control email" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Mật khẩu</label>
              <div class="col-sm-8">
                <input type="password" class="form-control password" placeholder="Mật khẩu">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
          <button type="button" class="btn bg-gradient-success btnluuuser"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Lưu</button>
          <button type="button" class="btn btn-outline-info btnbackuser"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Quay lại</button>
          <button type="button" class="btn btn-outline-secondary float-right btnlamlaiuser"><i class="fa fa-refresh"></i>&nbsp;Làm Lại</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- kết thúc Form Tài khoản -->

</html>