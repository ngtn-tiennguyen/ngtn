var flagHDon = 0;//giả sử người dùng chưa nhấn nút nào cả
var arrHDon = [];
$(document).ready(function () {

    //chuyển form
    function swapForm(f) {
        $(".formdonhang").addClass("is-hidden");
        $(".listdonhang").addClass("is-hidden");
        $("." + f).removeClass("is-hidden");
    }

    //button sua 
    $(".addListHDon").on('click', '.btnsuadonhang', function () {
        swapForm("formdonhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý đơn hàng</a></li>' +
            ' <li class="breadcrumb-item active">Đơn hàng</li>';
        $(".breadcrumbcurrent").html(st);
        flagHDon = 2;
        var donhang = $(this).parent().attr("data-donhang");
        $(".madonhang").val(arrHDon[donhang].madonhang);
        $(".tenkhach_d").val(arrHDon[donhang].tenkhach_d);
        $(".soluonghang").val(arrHDon[donhang].soluonghang);
        $(".sdt_d").val(arrHDon[donhang].sdt_d);
        $(".diachi_d").val(arrHDon[donhang].diachi_d);
        $(".ngaydathang").val(arrHDon[donhang].ngaydathang);
        $(".trangthai").val(arrHDon[donhang].trangthai);
    })

    //button quay lai 
    $(".btnbackdonhang").click(function () {
        swapForm("listdonhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý đơn hàng</a></li>' +
            ' <li class="breadcrumb-item active">Đơn hàng</li>';
        $(".breadcrumbcurrent").html(st);
    });

    //bắt sự kiện nhấn button làm lại
    $(".btnlamlaidonhang").click(function () {
        $(".madonhang").val("");
        $(".tenkhach_d").val("");
        $(".soluonghang").val("");
        $(".sdt_d").val("");
        $(".diachi_d").val("");
        $(".ngaydathang").val("");
        $(".trangthai").val();
        flagHang = 0;

    });

    // button lưu
    $(".btnluudonhang").click(function () {
        swapForm("listdonhang");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý đơn hàng</a></li>' +
            ' <li class="breadcrumb-item active">Đơn hàng</li>';
        $(".breadcrumbcurrent").html(st);
        if (flagHDon == 2) { //update
            //console.log("update");
            var datasend = {
                madonhang: $(".madonhang").val(),
                tenkhach_d: $(".tenkhach_d").val(),
                soluonghang: $(".soluonghang").val(),
                sdt_d: $(".sdt_d").val(),
                diachi_d: $(".diachi_d").val(),
                ngaydathang: $(".ngaydathang").val(),
                trangthai: $(".trangthai").val(),
                event: "updateHDon"
            }
            // console.log(datasend);
            queryData("php/apialldonhang.php", datasend, function (res) {
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
                    showDataTableHDon();
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
                $(".madonhang").val("");
                $(".tenkhach_d").val("");
                $(".soluonghang").val("");
                $(".sdt_d").val("");
                $(".diachi_d").val("");
                $(".ngaydathang").val("");
                $(".trangthai").val();
               
            });
        }
    })

    //xử lý nút tìm 
    $(".btntimdonhang").click(function () {
        showDataTableHDon();
    });

    //bắt sự kiện người dùng nhấn phím Enter
    $(".timdonhang").keyup(function (e) {
        if (e.which == 13) { //13: Enter
            showDataTableHDon();
        }
    })

    //Nhấn nút xóa
    $(".addListHDon").on('click', '.btnxoadonhang', function () {
        var donhang = $(this).parent().attr("data-donhang");
        var ma = arrHDon[donhang].madonhang;
        var ten = arrHDon[donhang].tenkhach_d;
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
                        madonhang: ma,
                        event: "deleteHDon"
                    }
                    queryData("php/apialldonhang.php", datasend, function (res) {
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
                            showDataTableHDon();
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
                        $(".madonhang").val("");
                        $(".tenkhach_d").val("");
                        $(".soluonghang").val("");
                        $(".sdt_d").val("");
                        $(".diachi_d").val("");
                        $(".ngaydathang").val("");
                        $(".trangthai").val();
                       
                    });
                }
            }
        });
    });
});

function showDataTableHDon() {
    var search = $(".timdonhang").val();
    console.log("search=" + search);
    var datasend = {
        search: search,
        event: "getDataHDon"
    }
    $(".addListHDon").html('<tr><td colspan="4"><img src="images/loading.gif" width="20px" height="20px">Đang tải dữ liệu</td></tr>');

    queryData("php/apialldonhang.php", datasend, function (res) {
        console.log(res)
        var data = res.items;
        if (data.length == 0) {
            $(".addListHDon").html('<tr><td colspan="4"><span class="badge bg-danger">Không tìm thấy</span></td></tr>');
        } else {
            arrHDon = data;
            var s = '';
            var stt = 1;
            for (var i in data) {
                var d = data[i];
                var trangthai = 'Chưa xác nhận';;
                if (d.trangthai == 1) {
                    trangthai = 'Đã xác nhận';
                }
                s = s + ' <tr>' +
                    ' <td>' + stt + '</td>' +
                    ' <td>' + d.tenkhach_d + '</td>' +
                    ' <td>' + d.soluonghang + '</td>' +
                    ' <td>' + d.tenhang + '</td>' +
                    ' <td>' + d.sdt_d + '</td>' +
                    ' <td>' + d.diachi_d + '</td>' +
                    ' <td>' + d.ngaydathang + '</td>' +
                    ' <td>' + trangthai + '</td>' +
                    '<td data-donhang=' + i + ' data-tenkhach_d=' + d.tenkhach_d + ' data-soluonghang=' + d.soluonghang + ' data-tenhang=' + d.tenhang +
                    ' data-sdt_d=' + d.sdt_d + 'data-diachi_d=' + d.diachi_d +
                    ' data-ngaydathang=' + d.ngaydathang + '>' +
                    '<span class="badge btn-outline-dark btnsuadonhang"><i class="fa fa-pencil-square-o"></i>&nbsp;Sửa</span>&nbsp;' +
                    '<span class="badge btn-outline-danger btnxoadonhang"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Xóa</span></td>' +
                    '</tr>';
                stt++;
            }
            $(".addListHDon").html(s);
        }
    });
}