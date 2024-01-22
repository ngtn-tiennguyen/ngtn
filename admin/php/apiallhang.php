<?php
require_once("server.php");
$event = $_GET["event"]; //event từ client gửi lên để biết server cần thực vấn đề gì trong tập api
switch ($event) {
        // getALLDataLoai cho combo box Loại
    case "getALLDataLoai":
        $mang = array();
        $sql = mysqli_query($conn, "select maloai, tenloai from loai");
        while ($rows = mysqli_fetch_array($sql)) {

            $usertemp['maloai'] = $rows['maloai'];
            $usertemp['tenloai'] = $rows['tenloai'];
            array_push($mang, $usertemp);
        }
        $jsonData['items'] = $mang;
        echo json_encode($jsonData);
        mysqli_close($conn);
        break;

        // getDataHang
    case "getDataHang":
        $mang = array();
        $search = $_GET["search"];
        $sql = mysqli_query($conn, "select h.mahang, h.tenhang, h.giahang, h.tieudehang, h.motahang, h.ngayuphang, h.hinhanh,
                                           h.maloai, l.tenloai from hang h, loai l
                                           where h.maloai=l.maloai and 
                                           (h.mahang like '%" . $search . "%' or h.tenhang like '%" . $search . "%'
                                           or h.giahang like '%" . $search . "%' 
                                           or h.tieudehang like '%" . $search . "%' or h.motahang like '%" . $search . "%' 
                                           or h.ngayuphang like '%" . $search . "%' or tenloai like '%" . $search . "%')
                                           order by h.mahang asc ");
        while ($rows = mysqli_fetch_array($sql)) {

            $usertemp['mahang'] = $rows['mahang'];
            $usertemp['tenhang'] = $rows['tenhang'];
            $usertemp['giahang'] = $rows['giahang'];
            $usertemp['tieudehang'] = $rows['tieudehang'];
            $usertemp['motahang'] = $rows['motahang'];
            $usertemp['ngayuphang'] = $rows['ngayuphang'];
            $usertemp['hinhanh'] = $rows['hinhanh'];
            $usertemp['maloai'] = $rows['maloai'];
            $usertemp['tenloai'] = $rows['tenloai'];

            array_push($mang, $usertemp);
        }
        $jsonData['items'] = $mang;
        echo json_encode($jsonData);
        mysqli_close($conn);
        break;

        // deleteHang
    case "deleteHang":
        $mahang = $_GET['mahang'];
        $sql = "DELETE FROM `hang` WHERE `mahang`='" . $mahang . "'";

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

        // insertHang
    case "insertHang":
        $tenhang = $_GET['tenhang'];
        $giahang = $_GET['giahang'];
        $tieudehang = $_GET['tieudehang'];
        $motahang = $_GET['motahang'];
        $ngayuphang = $_GET['ngayuphang'];
        $hinhanh = $_GET['hinhanh'];
        $maloai = $_GET['maloai'];
        $sql = "INSERT INTO `hang`(`tenhang`, `giahang`, `tieudehang`, `motahang`, `ngayuphang`, `hinhanh`, `maloai`) 
        VALUES ('" . $tenhang . "','" . $giahang . "', '" . $tieudehang . "','" . $motahang . "','" . $ngayuphang . "','" . $hinhanh . "','" . $maloai . "')";

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

        // updateHang
    case "updateHang":
        $mahang = $_GET['mahang'];
        $tenhang = $_GET['tenhang'];
        $giahang = $_GET['giahang'];
        $tieudehang = $_GET['tieudehang'];
        $motahang = $_GET['motahang'];
        $ngayuphang = $_GET['ngayuphang'];
        $hinhanh = $_GET['hinhanh'];
        $maloai = $_GET['maloai'];
        $sql = "UPDATE `hang` SET `tenhang`='" . $tenhang . "', `giahang`='" . $giahang . "', `tieudehang`='" . $tieudehang . "',
                         `motahang`='" . $motahang . "', `ngayuphang`='" . $ngayuphang . "', `hinhanh`='" . $hinhanh . "', `maloai`='" . $maloai . "'
                          WHERE `mahang`='" . $mahang . "'";


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
