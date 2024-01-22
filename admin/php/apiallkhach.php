<?php
require_once("server.php");
$event = $_GET["event"]; //event từ client gửi lên để biết server cần thực vấn đề gì trong tập api
switch ($event) {
        // getDataKH
    case "getDataKH":

        $mang = array();
        $search = $_GET["search"];
        $sql = mysqli_query($conn, "select * from user
                                           where user.chucvu = 0 and (id_user like '%" . $search . "%' or hoten like '%" . $search . "%' 
                                           or email like '%" . $search . "%' or username like '%" . $search . "%' 
                                           or gioitinh like '%" . $search . "%' or ngaysinh like '%" . $search . "%'
                                           or sdt like '%" . $search . "%' or diachi like '%" . $search . "%' ) 
                                           order by id_user asc ");
        while ($rows = mysqli_fetch_array($sql)) {

            $usertemp['id_user'] = $rows['id_user'];
            $usertemp['hoten'] = $rows['hoten'];
            $usertemp['email'] = $rows['email'];
            $usertemp['username'] = $rows['username'];
            $usertemp['gioitinh'] = $rows['gioitinh'];
            $usertemp['ngaysinh'] = $rows['ngaysinh'];
            $usertemp['sdt'] = $rows['sdt'];
            $usertemp['diachi'] = $rows['diachi'];

            array_push($mang, $usertemp);
        }
        $jsonData['items'] = $mang;
        echo json_encode($jsonData);
        mysqli_close($conn);
        break;

        // deleteKH
    case "deleteKH":

        $id_user = $_GET['id_user'];
        $sql = "DELETE FROM `user` WHERE `id_user`='" . $id_user . "'";


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

        // updateKH
    case "updateKH":
        $id_user = $_GET['id_user'];
        $email = $_GET['email'];
        $username = $_GET['username'];
        $hoten = $_GET['hoten'];
        $gioitinh = $_GET['gioitinh'];
        $ngaysinh = $_GET['ngaysinh'];
        $sdt = $_GET['sdt'];
        $diachi = $_GET['diachi'];
        $sql = "UPDATE `user` SET `email`='" . $email . "',`username`='" . $username . "',`hoten`='" . $hoten . "',
        `gioitinh`='" . $gioitinh . "',`ngaysinh`='" . $ngaysinh . "',`sdt`='" . $sdt . "',`diachi`='" . $diachi . "' 
        WHERE `id_user`='" . $id_user . "'";

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
