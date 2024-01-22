<?php
session_start();
if ($_FILES['photo']) {
	$filename = basename($_FILES["photo"]["name"]);
	move_uploaded_file($_FILES['photo']['tmp_name'], 'C:/xampp/htdocs/tnat/admin/file/' . $filename);
}
