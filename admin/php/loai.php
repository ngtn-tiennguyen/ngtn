<html>
<!-- List Loại -->
<div class="row listloai is-hidden" id="listloai">
  <div class="col-lg-12">
    <!-- /.card-header -->
    <div class="card-header" id="mau-info-form">
      <h3 class="card-title"><i class="fa fa-th" aria-hidden="true"></i>&nbsp;
        Danh sách loại sản phẩm
      </h3>
    </div>
    <!-- /.card-footer -->
    <div class="card-footer">
      <table border="0" style="width: 100%;">
        <tr>
          <td class="col-sm-4">
            <div class="input-group input-group-sm">
              <input type="text" class="timloai">
              <span class="input-group-append">
                <button type="button" class="btn btn-outline-info btn-flat btntimloai"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Tìm</button>
              </span>
            </div>
          </td>
          <td class="col-sm-4">
            <button type="button" class="btn btn-outline-success btn-sm float-right btnthemloai"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Thêm</button>
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
            <th>Tên loại sản phẩm</th>
            <th>Mô tả</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody class="addListLoai">

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- kết thúc Form Loại -->

<!-- Form Loại -->
<div class="row formloai is-hidden" id="formloai">
  <div class="col-lg-12">
    <div class="card card-info">
      <!-- /.card-header -->
      <div class="card-header" id="mau-info-form">
        <h3 class="card-title"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;
          Điền thông tin loại sản phẩm
        </h3>
      </div>
      <!-- form start -->
      <form class="form-horizontal">
        <!-- /.card-body -->
        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mã loại sản phẩm (*)</label>
            <div class="col-sm-5">
              <input type="text" class="form-control maloai" placeholder="Mã loại sản phẩm" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tên loại sản phẩm (*)</label>
            <div class="col-sm-5">
              <input type="text" class="form-control tenloai" id="inputPassword3" placeholder="Tên loại sản phẩm">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mô tả</label>
            <div class="col-sm-10">
              <textarea name="motaloai" class="form-control motaloai" id="motaloai" placeholder="Mô tả"></textarea>
            </div>
          </div>
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
          <button type="button" class="btn bg-gradient-success btnluuloai"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Lưu</button>
          <button type="button" class="btn btn-outline-info btnbackloai"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Quay lại</button>
          <button type="button" class="btn btn-outline-secondary float-right btnlamlailoai"><i class="fa fa-refresh"></i>&nbsp;Làm Lại</button>
        </div>
      </form>
    </div>
  </div>
</div>

</html>