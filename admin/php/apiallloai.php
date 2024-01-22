<?php
require_once("server.php");
$event = $_GET["event"]; //event từ client gửi lên để biết server cần thực vấn đề gì trong tập api
switch ($event) {
        // getDataLoai
    case "getDataLoai":

        $mang = array();
        $search = $_GET["search"];
        $sql = mysqli_query($conn, "select maloai, tenloai, motaloai from loai
                                           where (maloai like '%" . $search . "%' or tenloai like '%" . $search . "%' or motaloai like '%" . $search . "%') 
                                           order by maloai asc ");
        while ($rows = mysqli_fetch_array($sql)) {

            $usertemp['maloai'] = $rows['maloai'];
            $usertemp['tenloai'] = $rows['tenloai'];
            $usertemp['motaloai'] = $rows['motaloai'];

            array_push($mang, $usertemp);
        }
        $jsonData['items'] = $mang;
        echo json_encode($jsonData);
        mysqli_close($conn);
        break;

        // deleteLoai
    case "deleteLoai":

        $maloai = $_GET['maloai'];
        $sql = "DELETE FROM `loai` WHERE `maloai`='" . $maloai . "'";


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

        // insertLoai
    case "insertLoai":

        $maloai = $_GET['maloai'];
        $tenloai = $_GET['tenloai'];
        $motaloai = $_GET['motaloai'];
        $sql = "INSERT INTO `loai`(`maloai`, `tenloai`, `motaloai`) VALUES ('" . $maloai . "','" . $tenloai . "', '" . $motaloai . "')";


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

        // updateLoai
    case "updateLoai":

        $maloai = $_GET['maloai'];
        $tenloai = $_GET['tenloai'];
        $motaloai = $_GET['motaloai'];
        $sql = "UPDATE `loai` SET `tenloai`='" . $tenloai . "', `motaloai`='" . $motaloai . "' 
                          WHERE `maloai`='" . $maloai . "'";


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
