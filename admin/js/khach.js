var flagKH = 0;//giả sử người dùng chưa nhấn nút nào cả
var arrKH = [];
$(document).ready(function () {
    //chuyển form
    function swapForm(f) {
        $(".formkhach").addClass("is-hidden");
        $(".listkhach").addClass("is-hidden");
        $("." + f).removeClass("is-hidden");
    }

    //button load 
    $(".btnloadkhach").click(function () {
        showDataTableKH();
    });
    //button sua 
    $(".addListKH").on('click', '.btnsuakhach', function () {
        swapForm("formkhach");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Khách hàng</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
        flagKH = 2;
        var khach = $(this).parent().attr("data-khach");
        $(".id_user").val(arrKH[khach].id_user);
        $(".hoten").val(arrKH[khach].hoten);
        $(".email").val(arrKH[khach].email);
        $(".username").val(arrKH[khach].username);
        $(".gioitinh").val(arrKH[khach].gioitinh);
        $(".ngaysinh").val(arrKH[khach].ngaysinh);
        $(".sdt").val(arrKH[khach].sdt);
        $(".diachi").val(arrKH[khach].diachi);
    })

    //bắt sự kiện nhấn button làm lại
    $(".btnlamlaikhach").click(function () {
        $(".id_user").val("");
        $(".hoten").val("");
        $(".email").val("");
        $(".username").val("");
        $(".gioitinh").val();
        $(".ngaysinh").val("");
        $(".sdt").val("");
        $(".diachi").val("");
        flagKH = 0;
    });

    //button quay lai
    $(".btnbackkhach").click(function () {
        swapForm("listkhach");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Khách hàng</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
    });

    // button lưu
    $(".btnluukhach").click(function () {
        swapForm("listkhach");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Khách hàng</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
        if (flagKH == 2) { //update
            console.log("update");
            var datasend = {
                id_user: $(".id_user").val(),
                email: $(".email").val(),
                username: $(".username").val(),
                hoten: $(".hoten").val(),
                gioitinh: $(".gioitinh").val(),
                ngaysinh: $(".ngaysinh").val(),
                sdt: $(".sdt").val(),
                diachi: $(".diachi").val(),
                event: "updateKH"
            }
            console.log(datasend);
            queryData("php/apiallkhach.php", datasend, function (res) {
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
                    showDataTableKH();
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
                $(".id_user").val("");
                $(".hoten").val("");
                $(".email").val("");
                $(".username").val("");
                $(".gioitinh").val();
                $(".ngaysinh").val("");
                $(".sdt").val("");
                $(".diachi").val("");
            });
        }
    })

    //xử lý nút tìm 
    $(".btntimkhach").click(function () {
        showDataTableKH();
    });

    //bắt sự kiện người dùng nhấn phím Enter
    $(".timkhach").keyup(function (e) {
        if (e.which == 13) { //13: Enter
            showDataTableKH();
        }
    })

    //Nhấn nút xóa
    $(".addListKH").on('click', '.btnxoakhach', function () {
        var khach = $(this).parent().attr("data-khach");
        var ma = arrKH[khach].id_user;
        var ten = arrKH[khach].username;
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
                        id_user: ma,
                        event: "deleteKH"
                    }
                    queryData("php/apiallkhach.php", datasend, function (res) {
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
                            showDataTableKH();
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
                        $(".id_user").val("");
                        $(".hoten").val("");
                        $(".email").val("");
                        $(".username").val("");
                        $(".gioitinh").val();
                        $(".ngaysinh").val("");
                        $(".sdt").val("");
                        $(".diachi").val("");
                    });
                }
            }
        });
    });
});
function showDataTableKH() {
    var search = $(".timkhach").val();
    console.log("search=" + search);
    var datasend = {
        search: search,
        event: "getDataKH"
    }
    $(".addListKH").html('<tr><td colspan="4"><img src="images/loading.gif" width="20px" height="20px">Đang tải dữ liệu</td></tr>');

    queryData("php/apiallkhach.php", datasend, function (res) {
        console.log(res)
        var data = res.items;
        if (data.length == 0) {
            $(".addListKH").html('<tr><td colspan="4"><span class="badge bg-danger">Không tìm thấy</span></td></tr>');
        } else {
            arrKH = data;
            var s = '';
            var stt = 1;
            for (var i in data) {
                var d = data[i];
                var gioitinh = ' ';
                if (d.gioitinh == 1) {
                    gioitinh = 'Nam';
                }
                if (d.gioitinh == 2) {
                    gioitinh = 'Nữ';
                }
                s = s + ' <tr>' +
                    ' <td>' + stt + '</td>' +
                    ' <td>' + d.hoten + '</td>' +
                    ' <td>' + d.email + '</td>' +
                    ' <td>' + d.username + '</td>' +
                    ' <td>' + gioitinh + '</td>' +
                    ' <td>' + d.ngaysinh + '</td>' +
                    ' <td>' + d.sdt + '</td>' +
                    ' <td>' + d.diachi + '</td>' +
                    '<td data-khach=' + i + ' data-hoten=' + d.hoten + ' data-email=' + d.email +
                    ' data-username=' + d.username + ' data-gioitinh=' + gioitinh + ' data-ngaysinh=' + d.ngaysinh +
                    ' data-sdt=' + d.sdt + ' data-diachi=' + d.diachi + '>' +
                    '<span class="badge btn-outline-dark btnsuakhach"><i class="fa fa-pencil-square-o"></i>&nbsp;Sửa</span>&nbsp;' +
                    '<span class="badge btn-outline-danger btnxoakhach"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Xóa</span></td>' +
                    '</tr>';
                stt++;
            }
            $(".addListKH").html(s);
        }
    });
}