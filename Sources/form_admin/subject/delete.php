<?php
$connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
//Kiểm tra kết nối
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}
mysqli_set_charset($connect, 'UTF8');

if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Invalid HTTP method!');
$idMH=$_GET['ID'] ;
$sql3 = "UPDATE subjects SET isActive=0 WHERE subjects.ID = '$idMH'";
if (mysqli_query($connect, $sql3)) {
    echo "<script language='javascript'>alert('Xóa Môn Học Thành Công');";
    echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=subject';</script>";
}
else {
    echo "<script language='javascript'>alert('Xóa Môn Học Thất Bại');";
    echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=subject';</script>";
  }
?>