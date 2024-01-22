var flagLoai = 0;//giả sử người dùng chưa nhấn nút nào cả
var arrLoai = [];
$(document).ready(function () {

    //chuyển form
    function swapForm(f) {
        $(".formloai").addClass("is-hidden");
        $(".listloai").addClass("is-hidden");
        $("." + f).removeClass("is-hidden");
    }

    //button them 
    $(".btnthemloai").click(function () {
        swapForm("formloai");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Loại</li>';
        $(".breadcrumbcurrent").html(st);
        $(".maloai").val("");
        $(".tenloai").val("");
        $(".motaloai").val("");
        $(".maloai").focus();
        flagLoai = 1;
    });

    //button sua 
    $(".addListLoai").on('click', '.btnsualoai', function () {
        swapForm("formloai");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Loại</li>';
        $(".breadcrumbcurrent").html(st);
        flagLoai = 2;
        var loai = $(this).parent().attr("data-loai");
        $(".maloai").val(arrLoai[loai].maloai);
        $(".tenloai").val(arrLoai[loai].tenloai);
        $(".motaloai").val(arrLoai[loai].motaloai);
    })

    //bắt sự kiện nhấn button làm lại
    $(".btnlamlailoai").click(function () {
        $(".maloai").val("");
        $(".tenloai").val("");
        $(".motaloai").val("");
        flagLoai = 0;
    });

    //button quay lai 
    $(".btnbackloai").click(function () {
        swapForm("listloai");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Loại</li>';
        $(".breadcrumbcurrent").html(st);
    });

    // button lưu
    $(".btnluuloai").click(function () {
        swapForm("listloai");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý sản phẩm</a></li>' +
            ' <li class="breadcrumb-item active">Loại</li>';
        $(".breadcrumbcurrent").html(st);
        if (flagLoai == 1) { //lưu (insert dữ liệu mới)
            var datasend = {
                maloai: $(".maloai").val(),
                tenloai: $(".tenloai").val(),
                motaloai: $(".motaloai").val(),
                event: "insertLoai"
            }
            // console.log(datasend);
            queryData("php/apiallloai.php", datasend, function (res) {
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
                    showDataTableLoai();
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
                $(".maloai").val("");
                $(".tenloai").val("");
                $(".motaloai").val("");
            });
        } else if (flagLoai == 2) { //update
            console.log("update");
            var datasend = {
                maloai: $(".maloai").val(),
                tenloai: $(".tenloai").val(),
                motaloai: $(".motaloai").val(),
                event: "updateLoai"
            }
            // console.log(datasend);
            queryData("php/apiallloai.php", datasend, function (res) {
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
                    showDataTableLoai();
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
                $(".maloai").val("");
                $(".tenloai").val("");
                $(".motaloai").val("");
            });
        }
    })

    //xử lý nút tìm 
    $(".btntimloai").click(function () {
        showDataTableLoai();
    });

    //bắt sự kiện người dùng nhấn phím Enter
    $(".timloai").keyup(function (e) {
        if (e.which == 13) { //13: Enter
            showDataTableLoai();
        }
    })

    //Nhấn nút xóa
    $(".addListLoai").on('click', '.btnxoaloai', function () {
        var loai = $(this).parent().attr("data-loai");
        var ma = arrLoai[loai].maloai;
        var ten = arrLoai[loai].tenloai;
        bootbox.confirm({
            message: "Bạn có đồng ý xóa : " + ten.italics().bold() + " này không?",
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
                        maloai: ma,
                        event: "deleteLoai"
                    }
                    queryData("php/apiallloai.php", datasend, function (res) {
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
                            showDataTableLoai();
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
                        $(".maloai").val("");
                        $(".tenloai").val("");
                        $(".motaloai").val("");
                    });
                }
            }
        });
    });
});

function showDataTableLoai() {
    var search = $(".timloai").val();
    console.log("search=" + search);
    var datasend = {
        search: search,
        event: "getDataLoai"
    }
    $(".addListLoai").html('<tr><td colspan="4"><img src="images/loading.gif" width="20px" height="20px">Đang tải dữ liệu</td></tr>');

    queryData("php/apiallloai.php", datasend, function (res) {
        console.log(res)
        var data = res.items;
        if (data.length == 0) {
            $(".addListLoai").html('<tr><td colspan="4"><span class="badge bg-danger">Không tìm thấy</span></td></tr>');
        } else {
            arrLoai = data;
            var s = '';
            var stt = 1;
            for (var i in data) {
                var d = data[i];
                s = s + ' <tr>' +
                    ' <td>' + stt + '</td>' +
                    ' <td>' + d.tenloai + '</td>' +
                    ' <td>' + d.motaloai + '</td>' +
                    '<td data-loai=' + i + ' data-tenloai="' + d.tenloai + '" data-motaloailoai="' + d.motaloai + '">' +
                    '<span class="badge btn-outline-dark btnsualoai"><i class="fa fa-pencil-square-o"></i>&nbsp;Sửa</span>&nbsp;' +
                    '<span class="badge btn-outline-danger btnxoaloai"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Xóa</span></td>' +
                    '</tr>';
                stt++;
            }
            $(".addListLoai").html(s);
        }
    });
}