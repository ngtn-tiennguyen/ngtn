<html>
<!-- List Hàng -->
<div class="row listhang is-hidden" id="listhang">
  <div class="col-lg-12">
    <!-- /.card-header -->
    <div class="card-header" id="mau-info-form">
      <h3 class="card-title"><i class="fa fa-th-large" aria-hidden="true"></i>&nbsp;
        Danh sách hàng
      </h3>
    </div>
    <!-- /.card-footer -->
    <div class="card-footer">
      <table border="0" style="width: 100%;">
        <tr>
          <td class="col-sm-4">
            <div class="input-group input-group-sm">
              <input type="text" class="timhang">
              <span class="input-group-append">
                <button type="button" class="btn btn-outline-info btn-flat btntimhang"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Tìm</button>
              </span>
            </div>
          </td>
          <td class="col-sm-4">
            <button type="button" class="btn btn-outline-success btn-sm float-right btnthemhang"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Thêm</button>
          </td>
        </tr>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: auto">STT</th>
            <th>Tên hàng</th>
            <th>Loại</th>
            <th>Giá hàng</th>
            <th>Tiêu đề</th>
            <th>Mô tả</th>
            <th>Ngày cập nhật</th>
            <th>Hình ảnh</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody class="addListHang">

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- kết thúc ListHàng -->

<!-- Form Hàng -->
<div class="row formhang is-hidden" id="formhang">
  <div class="col-lg-12">
    <div class="card card-info">
      <!-- /.card-header -->
      <div class="card-header" id="mau-info-form">
        <h3 class="card-title"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;
          Điền thông tin hàng
        </h3>
      </div>
      <!-- form start -->
      <form class="form-horizontal" enctype="multipart/form-data">
        <!-- /.card-body -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Mã hàng</label>
              <div class="col-sm-8">
                <input type="text" class="form-control mahang" placeholder="Mã hàng" readonly>
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Tên hàng</label>
              <div class="col-sm-8">
                <input type="text" class="form-control tenhang" placeholder="Tên hàng">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-6 col-form-label">Loại</label>
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control cbloai">

                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Giá hàng</label>
              <div class="col-sm-8">
                <input type="number" class="form-control giahang" placeholder="Giá hàng">
              </div>
            </div>
            <div class="col-sm-4">
              <label class="col-sm-4 col-form-label">Ngày cập nhật</label>
              <div class="col-sm-8">
                <input type="date" class="form-control ngayuphang" placeholder="ngày/tháng/năm">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label class="col-sm-4 col-form-label">Tiêu đề</label>
              <div class="col-sm-12">
                <input type="text" class="form-control tieudehang" placeholder="Tiêu đề">
              </div>
            </div>
            <div class="col-sm-12">
              <label class="col-sm-4 col-form-label">Mô tả</label>
              <div class="col-sm-12">
                <textarea name="motahang" class="form-control motahang" id="motahang" placeholder="Mô tả hàng"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label class="col-sm-4 col-form-label">Hình ảnh</label>
              <div class="col-sm-8">
                <input type="file" id="imgHang" class="btnupload" accept="image/*" name="image" />
                <div id="preview"><img class="preview" src="" height="100px" width="100px" /></div><br>
              </div>
              <div id="err"></div>
            </div>
          </div>
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
          <button type="button" class="btn bg-gradient-success btnluuhang"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Lưu</button>
          <button type="button" class="btn btn-outline-info btnbackhang"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Quay lại</button>
          <button type="button" class="btn btn-outline-secondary float-right btnlamlaihang"><i class="fa fa-refresh"></i>&nbsp;Làm Lại</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- kết thúc Form Hàng -->
</html>