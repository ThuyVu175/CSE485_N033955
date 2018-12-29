<?php
$connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
//Kiểm tra kết nối
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}
mysqli_set_charset($connect, 'UTF8');

if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Invalid HTTP method!');
$idL=$_GET['ID'] ;
$sql3 = "UPDATE class SET isActive=0 WHERE class.ID = '$idL'";
if (mysqli_query($connect, $sql3)) {
    echo "<script language='javascript'>alert('Xóa Lớp Thành Công');";
    echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=class';</script>";
}
else {
    echo "<script language='javascript'>alert('Xóa Lớp Thất Bại');";
    echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=class';</script>";
  }
// die($sql);
?>