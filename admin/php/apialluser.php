<?php
require_once("server.php");
$event = $_GET["event"]; //event từ client gửi lên để biết server cần thực vấn đề gì trong tập api
switch ($event) {
        // getDataUser
    case "getDataUser":

        $mang = array();
        $search = $_GET["search"];
        $sql = mysqli_query($conn, "select * from user
                                           where (id_user like '%" . $search . "%' or username like '%" . $search . "%' 
                                           or email like '%" . $search . "%' or password like '%" . $search . "%' 
                                           or chucvu like '%" . $search . "%') 
                                           order by id_user asc ");
        while ($rows = mysqli_fetch_array($sql)) {

            $usertemp['id_user'] = $rows['id_user'];
            $usertemp['email'] = $rows['email'];
            $usertemp['password'] = $rows['password'];
            $usertemp['username'] = $rows['username'];
            $usertemp['chucvu'] = $rows['chucvu'];

            array_push($mang, $usertemp);
        }
        $jsonData['items'] = $mang;
        echo json_encode($jsonData);
        mysqli_close($conn);
        break;

        // deleteUser
    case "deleteUser":

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

        // insertUser
    case "insertUser":

        $email = $_GET['email'];
        $password = $_GET['password'];
        $username = $_GET['username'];
        $chucvu = $_GET['chucvu'];
        $sql = "INSERT INTO `user`(`email`, `password`, `username`, `chucvu`) 
                VALUES ('" . $email . "','" . $password . "','" . $username . "','" . $chucvu . "')";

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

        // updateUser
    case "updateUser":
        $id_user = $_GET['id_user'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $username = $_GET['username'];
        $chucvu = $_GET['chucvu'];
        $sql = "UPDATE `user` SET `email`='" . $email . "',`password`='" . $password . "',
        `username`='" . $username . "',`chucvu`='" . $chucvu . "' WHERE `id_user`='" . $id_user . "'";

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
