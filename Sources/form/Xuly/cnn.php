<?php 
	$userName='root';
	$passWord='';
	$server='localhost';
	$dbName='qlkhoahocttnk';
	//Kết nối
	$con= mysqli_connect($server, $userName, $passWord, $dbName);
	//Nếu kết nối lỗi thì thông báo và thoát
	mysqli_set_charset($con, "utf8");
	
?>