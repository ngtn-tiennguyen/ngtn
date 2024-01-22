var flagHang = 0;//giả sử người dùng chưa nhấn nút nào cả
var arrHang = [];

$(document).ready(function () {

    //chuyển form
    function swapForm(f) {
        $(".formhang").addClass("is-hidden");
        $(".listhang").addClass("is-hidden");
        $("." + f).removeClass("is-hidden");
    }
    //up ảnh
    $("#imgHang").change(function (e) {
        var files = e.target.files;
        upload(files, function (res) {
            console.log("ok" + res);
        })
    });

    //button them 
    $(".btnthemhang").click(function () {
        swapForm("formhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Sản phẩm</li>';
        $(".breadcrumbcurrent").html(st);
        $(".mahang").val("");
        $(".tenhang").val("");
        $(".giahang").val("");
        $(".tieudehang").val("");
        $(".motahang").val("");
        $(".ngayuphang").val("");
        $(".btnupload").val("");
        $(".cbloai").val("NULL");
        $(".mahang").focus();
        flagHang = 1;
        showCBLoai();
    });

    showCBLoai();
    //button sua 
    $(".addListHang").on('click', '.btnsuahang', function () {
        swapForm("formhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Sản phẩm</li>';
        $(".breadcrumbcurrent").html(st);
        var hang = $(this).parent().attr("data-hang");
        $(".mahang").val(arrHang[hang].mahang);
        $(".tenhang").val(arrHang[hang].tenhang);
        $(".giahang").val(arrHang[hang].giahang);
        $(".tieudehang").val(arrHang[hang].tieudehang);
        $(".motahang").val(arrHang[hang].motahang);
        $(".ngayuphang").val(arrHang[hang].ngayuphang);
        $(".btupload").val(arrHang[hang].hinhanh);
        $(".cbloai").val(arrHang[hang].maloai);
        flagHang = 2;
    })

    //bắt sự kiện nhấn button làm lại
    $(".btnlamlaihang").click(function () {
        $(".mahang").val("");
        $(".tenhang").val("");
        $(".giahang").val("");
        $(".tieudehang").val("");
        $(".motahang").val("");
        $(".ngayuphang").val("");
        $(".btnupload").val("");
        $(".cbloai").val("NULL");
        $(".mahang").focus();
        flagHang = 0;
        showCBLoai(); // hien thi combo-box Loại
    });

    //button quay lai 
    $(".btnbackhang").click(function () {
        swapForm("listhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Sản phẩm</li>';
        $(".breadcrumbcurrent").html(st);
    });

    // button lưu
    $(".btnluuhang").click(function () {
        swapForm("listhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Sản phẩm</li>';
        $(".breadcrumbcurrent").html(st);
        if (flagHang == 1) { //lưu (insert dữ liệu mới)
            var hinhanh = $(".btnupload").val();
            var splits = hinhanh.split('fakepath\\');
            var datasend = {
                tenhang: $(".tenhang").val(),
                giahang: $(".giahang").val(),
                tieudehang: $(".tieudehang").val(),
                motahang: $(".motahang").val(),
                ngayuphang: $(".ngayuphang").val(),
                hinhanh: splits[1],
                maloai: $(".cbloai").val(),
                event: "insertHang"
            }
            console.log(datasend);
            queryData("php/apiallhang.php", datasend, function (res) {
                console.log(res)
                if (res.success == 1) {
                    bootbox.alert({
                        message: "Thêm thành công!",
                        size: 'small',
                        buttons: {
                            ok: {
                                label: 'OK',
                                className: 'btn-success'
                            }
                        }
                    });
                    showDataTableHang();
                } else {
                    bootbox.alert({
                        message: "Thêm không thành công!",
                        size: 'small',
                        buttons: {
                            ok: {
                                label: 'OK',
                                className: 'btn-danger'
                            }
                        }
                    });
                }
                $(".mahang").val("");
                $(".tenhang").val("");
                $(".giahang").val("");
                $(".tieudehang").val("");
                $(".motahang").val("");
                $(".ngayuphang").val("");
                $(".btnupload").val("");
                $(".cbloai").val("NULL");
                $(".mahang").focus();
            });
        } else if (flagHang == 2) { //update
            console.log("update");
            var hinhanh = $(".btnupload").val();
            var splits = hinhanh.split('fakepath\\');
            var datasend = {
                mahang: $(".mahang").val(),
                tenhang: $(".tenhang").val(),
                giahang: $(".giahang").val(),
                tieudehang: $(".tieudehang").val(),
                motahang: $(".motahang").val(),
                ngayuphang: $(".ngayuphang").val(),
                hinhanh: splits[1],
                maloai: $(".cbloai").val(),
                event: "updateHang"
            }
            console.log(datasend);
            queryData("php/apiallhang.php", datasend, function (res) {
                console.log(res)
                if (res.success == 1) {
                    bootbox.alert({
                        message: "Cập nhật thành công!",
                        size: 'small',
                        buttons: {
                            ok: {
                                label: 'OK',
                                className: 'btn-success'
                            }
                        }
                    });
                    showDataTableHang();
                } else {
                    bootbox.alert({
                        message: "Cập nhật không thành công!",
                        size: 'small',
                        buttons: {
                            ok: {
                                label: 'OK',
                                className: 'btn-danger'
                            }
                        }
                    });
                }
                $(".mahang").val("");
                $(".tenhang").val("");
                $(".giahang").val("");
                $(".tieudehang").val("");
                $(".motahang").val("");
                $(".ngayuphang").val("");
                $(".btnupload").val("");
                $(".cbloai").val("NULL");
                $(".mahang").focus();
            });
        }
    })

    //xử lý nút tìm 
    $(".btntimhang").click(function () {
        showDataTableHang();
    });

    //bắt sự kiện người dùng nhấn phím Enter
    $(".timhang").keyup(function (e) {
        if (e.which == 13) { //13: Enter
            showDataTableHang();
        }
    })

    //Nhấn nút xóa
    $(".addListHang").on('click', '.btnxoahang', function () {
        var hang = $(this).parent().attr("data-hang");
        var ma = arrHang[hang].mahang;
        var ten = arrHang[hang].tenhang;
        bootbox.confirm({
            message: "Bạn có đồng ý xóa: " + ten.italics().bold() + " này không?",
            buttons: {
                confirm: {
                    label: 'Có',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'Không',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                console.log('This was logged in the callback: ' + result);
                if (result == true) {
                    var datasend = {
                        mahang: ma,
                        event: "deleteHang"
                    }
                    queryData("php/apiallhang.php", datasend, function (res) {
                        console.log(res)
                        if (res.success == 1) {
                            bootbox.alert({
                                message: "Xóa thành công!",
                                size: 'small',
                                buttons: {
                                    ok: {
                                        label: 'OK',
                                        className: 'btn-success'
                                    }
                                }
                            });
                            showDataTableHang();
                        } else {
                            bootbox.alert({
                                message: "Xóa không thành công!",
                                size: 'small',
                                buttons: {
                                    ok: {
                                        label: 'OK',
                                        className: 'btn-danger'
                                    }
                                }
                            });
                        }
                        $(".mahang").val("");
                        $(".tenhang").val("");
                        $(".giahang").val("");
                        $(".tieudehang").val("");
                        $(".motahang").val("");
                        $(".ngayuphang").val("");
                        $(".btnupload").val("");
                        $(".cbloai").val("NULL");
                        $(".mahang").focus();
                    });
                }
            }
        });
    })
});
function showDataTableHang() {
    var search = $(".timhang").val();
    var datasend = {
        search: search,
        event: "getDataHang"
    }
    $(".addListHang").html('<tr><td colspan="4"><img src="images/loading.gif" width="20px" height="20px">Đang tải dữ liệu</td></tr>');
    queryData("php/apiallhang.php", datasend, function (res) {
        var data = res.items;
        if (data.length == 0) {
            $(".addListHang").html('<tr><td colspan="4"><span class="badge bg-danger">Không tìm thấy</span></td></tr>');
        } else {
            arrHang = data;
            var s = '';
            var stt = 1;
            for (var i in data) {
                var d = data[i];
                s = s + ' <tr>' +
                    ' <td>' + stt + '</td>' +
                    ' <td>' + d.tenhang + '</td>' +
                    ' <td>' + d.tenloai + '</td>' +
                    ' <td>' + d.giahang + '</td>' +
                    ' <td>' + d.tieudehang + '</td>' +
                    ' <td>' + d.motahang + '</td>' +
                    ' <td>' + d.ngayuphang + '</td>' +
                    ' <td>' + d.hinhanh + '</td>' +
                    ' <td data-hang=' + i + ' data-tenhang=' + d.tenhang + ' data-loai=' + d.tenloai +
                    ' data-giahang=' + d.giahang + 'data-tieudehang=' + d.tieudehang + ' data-motahang=' + d.motahang +
                    ' data-ngayuphang=' + d.ngayuphang + 'data-hinhanh=' + d.hinhanh + '>' +
                    '<span class="badge btn-outline-dark btnsuahang"><i class="fa fa-pencil-square-o"></i>&nbsp;Sửa</span>&nbsp;' +
                    '<span class="badge btn-outline-danger btnxoahang"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Xóa</span></td>' +
                    '</tr>';
                stt++;
            }
            $(".addListHang").html(s);
        }
    });
}
// combo-box loại
function showCBLoai() {
    var datasend = {
        event: "getALLDataLoai"
    }
    queryData("php/apiallhang.php", datasend, function (res) {
        var data = res.items;
        var ht = '<option value="">Chọn loại</option>';
        for (var i in data) {
            var d = data[i];
            ht = ht + '<option value="' + d.maloai + '">' + d.tenloai + '</option>';
        }
        $(".cbloai").html(ht);
    });
}