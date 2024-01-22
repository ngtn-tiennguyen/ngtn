<?php
require_once("server.php");
$event = $_GET["event"]; //event từ client gửi lên để biết server cần thực vấn đề gì trong tập api
switch ($event) {
        // getDataHDon
    case "getDataHDon":

        $mang = array();
        $search = $_GET["search"];
        $sql = mysqli_query($conn, "select d.madonhang, d.soluonghang, d.tenkhach_d,
                                    d.sdt_d, d.diachi_d, d.ngaydathang, d.trangthai, d.mahang, h.mahang, h.tenhang 
                                    from donhang d, hang h
                                        where d.mahang=h.mahang and (d.madonhang like '%" . $search . "%' or d.tenkhach_d like '%" . $search . "%' or d.soluonghang like '%" . $search . "%' or d.sdt_d like '%" . $search . "%'
                                        or diachi_d like '%" . $search . "%' or d.ngaydathang like '%" . $search . "%' or d.trangthai like '%" . $search . "%' or tenhang like '%" . $search . "%') 
                                        order by madonhang asc ");
        while ($rows = mysqli_fetch_array($sql)) {

            $usertemp['madonhang'] = $rows['madonhang'];
            $usertemp['soluonghang'] = $rows['soluonghang'];
            $usertemp['tenkhach_d'] = $rows['tenkhach_d'];
            $usertemp['sdt_d'] = $rows['sdt_d'];
            $usertemp['diachi_d'] = $rows['diachi_d'];
            $usertemp['ngaydathang'] = $rows['ngaydathang'];
            $usertemp['trangthai'] = $rows['trangthai'];
            $usertemp['mahang'] = $rows['mahang'];
            $usertemp['tenhang'] = $rows['tenhang'];

            array_push($mang, $usertemp);
        }
        $jsonData['items'] = $mang;
        echo json_encode($jsonData);
        mysqli_close($conn);
        break;

        // deleteHDon
    case "deleteHDon":

        $madonhang = $_GET['madonhang'];
        $sql = "DELETE FROM `donhang` WHERE `madonhang`='" . $madonhang . "'";


        if (mysqli_query($conn, $sql)) {  //thực thi câu truy vấn
            if (mysqli_affected_rows($conn) > 0) { //đảm bảo dữ liệu có thay đổi

                $res["success"] = 1; // {"success":1} //trả về client đối tượng json 
            } else {
                $res["success"] = 0; //{"success":0}//trả về client đối tượng json 
            }
        } else {
            $res["success"] = 0; // {"success":0}//trả về client đối tượng json 
        }

        echo json_encode($res);
        mysqli_close($conn);
        break;

        // updateHDon
    case "updateHDon":

        $madonhang = $_GET['madonhang'];
        $tenkhach_d = $_GET['tenkhach_d'];
        $soluonghang = $_GET['soluonghang'];
        $sdt_d = $_GET['sdt_d'];
        $diachi_d = $_GET['diachi_d'];
        $ngaydathang = $_GET['ngaydathang'];
        $trangthai = $_GET['trangthai'];
        $sql = "UPDATE `donhang` SET `soluonghang`='" . $soluonghang . "', `tenkhach_d`='" . $tenkhach_d . "',`sdt_d`='" . $sdt_d . "',`diachi_d`='" . $diachi_d . "',
                `ngaydathang`='" . $ngaydathang . "',`trangthai`='" . $trangthai . "' 
                WHERE `madonhang`='" . $madonhang . "'";


        if (mysqli_query($conn, $sql)) {  //thực thi câu truy vấn
            if (mysqli_affected_rows($conn) > 0) { //đảm bảo dữ liệu có thay đổi

                $res["success"] = 1; // {"success":1} //trả về client đối tượng json 
            } else {
                $res["success"] = 0; //{"success":0}//trả về client đối tượng json 
            }
        } else {
            $res["success"] = 0; // {"success":0}//trả về client đối tượng json 
        }

        echo json_encode($res);
        mysqli_close($conn);
        break;

    default:
        break;
}
