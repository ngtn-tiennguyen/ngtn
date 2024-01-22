var flagUser = 0;//giả sử người dùng chưa nhấn nút nào cả
var arrUser = [];
$(document).ready(function () {
    //chuyển form
    function swapForm(f) {
        $(".formuser").addClass("is-hidden");
        $(".listuser").addClass("is-hidden");
        $("." + f).removeClass("is-hidden");
    }

    //button them 
    $(".btnthemuser").click(function () {
        swapForm("formuser");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Khách hàng</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
        $(".id_user").val("");
        $(".email").val("");
        $(".password").val("");
        $(".username").val("");
        $(".chucvu").val();
        $(".email").focus();
        flagUser = 1;
    });

    //button sua 
    $(".addListUser").on('click', '.btnsuauser', function () {
        swapForm("formuser");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Khách hàng</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
        flagUser = 2;
        var user = $(this).parent().attr("data-user");
        $(".id_user").val(arrUser[user].id_user);
        $(".email").val(arrUser[user].email);
        $(".username").val(arrUser[user].username);
        $(".password").val(arrUser[user].password);
        $(".chucvu").val(arrUser[user].chucvu);
    })

    //bắt sự kiện nhấn button làm lại
    $(".btnlamlaiuser").click(function () {
        $(".id_user").val("");
        $(".email").val("");
        $(".password").val("");
        $(".username").val("");
        $(".chucvu").val();
        $(".email").focus();
        flagUser = 0;
    });

    //button quay lai
    $(".btnbackuser").click(function () {
        swapForm("listuser");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Khách hàng</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
    });

    // button lưu
    $(".btnluuuser").click(function () {
        swapForm("listuser");
        var st = ' <li class="breadcrumb-item"><a href="#" >Quản lý người dùng</a></li>' +
            ' <li class="breadcrumb-item active">Khách hàng</li>';
        //console.log(st);
        $(".breadcrumbcurrent").html(st);
        if (flagUser == 1) { //lưu (insert dữ liệu mới)
            var datasend = {
                email: $(".email").val(),
                password: $(".password").val(),
                username: $(".username").val(),
                chucvu: $(".chucvu").val(),
                event: "insertUser"
            }
            //console.log(datasend);
            queryData("php/apialluser.php", datasend, function (res) {
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
                    showDataTableUser();
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
                $(".id_user").val("");
                $(".email").val("");
                $(".username").val("");
                $(".password").val("");
                $(".chucvu").val();
            });
        } else if (flagUser == 2) { //update
            //console.log("update");
            var datasend = {
                id_user: $(".id_user").val(),
                email: $(".email").val(),
                password: $(".password").val(),
                username: $(".username").val(),
                chucvu: $(".chucvu").val(),
                event: "updateUser"
            }
            //console.log(datasend);
            queryData("php/apialluser.php", datasend, function (res) {
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
                    showDataTableUser();
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
                $(".email").val("");
                $(".password").val("");
                $(".username").val("");
                $(".chucvu").val();
                $(".email").focus();
            });
        }
    })

    //xử lý nút tìm 
    $(".btntimuser").click(function () {
        showDataTableUser();
    });

    //bắt sự kiện người dùng nhấn phím Enter
    $(".timuser").keyup(function (e) {
        if (e.which == 13) { //13: Enter
            showDataTableUser();
        }
    })

    //Nhấn nút xóa
    $(".addListUser").on('click', '.btnxoauser', function () {
        var user = $(this).parent().attr("data-user");
        var ma = arrUser[user].id_user;
        var ten = arrUser[user].username;
        bootbox.confirm({
            message: "Bạn có đồng ý xóa tài khoản: " + ten.italics().bold() + " này không?",
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
                        event: "deleteUser"
                    }
                    queryData("php/apialluser.php", datasend, function (res) {
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
                            showDataTableUser();
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
                        $(".email").val("");
                        $(".password").val("");
                        $(".username").val("");
                        $(".chucvu").val();
                        $(".email").focus();
                    });
                }
            }
        });
    });
});
function showDataTableUser() {
    var search = $(".timuser").val();
    console.log("search=" + search);
    var datasend = {
        search: search,
        event: "getDataUser"
    }
    $(".addListUser").html('<tr><td colspan="4"><img src="images/loading.gif" width="20px" height="20px">Đang tải dữ liệu</td></tr>');

    queryData("php/apialluser.php", datasend, function (res) {
        console.log(res)
        var data = res.items;
        if (data.length == 0) {
            $(".addListUser").html('<tr><td colspan="4"><span class="badge bg-danger">Không tìm thấy</span></td></tr>');
        } else {
            arrUser = data;
            var s = '';
            var stt = 1;
            for (var i in data) {
                var d = data[i];
                var chucvu = 'Người dùng';
                if (d.chucvu == 1) {
                    chucvu = 'Quản trị viên';
                }
                s = s + ' <tr>' +
                    ' <td>' + stt + '</td>' +
                    ' <td>' + d.email + '</td>' +
                    ' <td>' + d.username + '</td>' +
                    ' <td>' + d.password + '</td>' +
                    ' <td>' + chucvu + '</td>' +
                    '<td data-user=' + i + ' data-email=' + d.email + ' data-username=' + d.username +
                    ' data-password="' + d.password + '">' +
                    '<span class="badge btn-outline-dark btnsuauser"><i class="fa fa-pencil-square-o"></i>&nbsp;Sửa</span>&nbsp;' +
                    '<span class="badge btn-outline-danger btnxoauser"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Xóa</span></td>' +
                    '</tr>';
                stt++;
            }
            $(".addListUser").html(s);
        }
    });
}