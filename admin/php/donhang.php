<html>
<!-- List Hóa đơn -->
<div class="row listdonhang is-hidden" id="listdonhang">
  <div class="col-lg-12">
    <!-- /.card-header -->
    <div class="card-header" id="mau-info-form">
      <h3 class="card-title"><i class="fa fa-th" aria-hidden="true"></i>&nbsp;
        Danh sách các hóa đơn hiện có
      </h3>
    </div>
    <!-- /.card-footer -->
    <div class="card-footer">
      <table border="0" style="width: 100%;">
        <tr>
          <td class="col-sm-4">
            <div class="input-group input-group-sm">
              <input type="text" class="timdonhang">
              <span class="input-group-append">
                <button type="button" class="btn btn-outline-info btn-flat btntimdonhang"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Tìm</button>
              </span>
            </div>
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
            <th>Tên khách</th>
            <th>Số lượng</th>
            <th>Sản phẩm</th>
            <th>Số điện thoai</th>
            <th>Địa chỉ</th>
            <th>Ngày đặt hàng</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody class="addListHDon">

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- kết thúc Form Hóa đơn -->

<!-- Form Hóa đơn -->
<div class="row formdonhang is-hidden" id="formdonhang">
  <div class="col-lg-12">
    <div class="card card-info">
      <!-- /.card-header -->
      <div class="card-header" id="mau-info-form">
        <h3 class="card-title"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;
          Điền thông tin hóa đơn
        </h3>
      </div>
      <!-- form start -->
      <form class="form-horizontal">
        <!-- /.card-body -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Mã hóa đơn</label>
              <div class="col-sm-8">
                <input type="text" class="form-control madonhang" placeholder="Mã hóa đơn" readonly>
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Tên khách hàng</label>
              <div class="col-sm-8">
                <input type="text" class="form-control tenkhach_d" placeholder="Tên khách hàng">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Số điện thoại</label>
              <div class="col-sm-8">
                <input type="number" class="form-control sdt_d" placeholder="Số điện thoại">
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Số lượng</label>
              <div class="col-sm-8">
                <input type="number" class="form-control soluonghang" placeholder="Số lượng">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Ngày tạo đơn</label>
              <div class="col-sm-8">
                <input type="date" class="form-control ngaydathang" placeholder="ngày/tháng/năm">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Trạng thái</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <select class="form-control trangthai">
                    <option value="0">Chưa xác nhận</option>
                    <option value="1">Đã xác nhận</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-sm-12">
              <label class="col-sm-4 col-form-label">Địa chỉ</label>
              <div class="col-sm-12">
                <input type="text" class="form-control diachi_d" placeholder="Địa chỉ">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
          <button type="button" class="btn bg-gradient-success btnluudonhang"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Lưu</button>
          <button type="button" class="btn btn-outline-info btnbackdonhang"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Quay lại</button>
          <button type="button" class="btn btn-outline-secondary float-right btnlamlaidonhang"><i class="fa fa-refresh"></i>&nbsp;Làm Lại</button>
        </div>
      </form>
    </div>
  </div>
</div>

</html>