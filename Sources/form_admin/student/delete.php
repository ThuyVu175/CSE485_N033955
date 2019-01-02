<?php
$connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
//Kiểm tra kết nối
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}
mysqli_set_charset($connect, 'UTF8');

if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Invalid HTTP method!');
$idHV=$_GET['ID'] ;
$sqlDelete = "UPDATE student SET isActive=0 WHERE student.ID = '$idHV'";
if (mysqli_query($connect, $sqlDelete)) {
    echo "<script language='javascript'>alert('Xóa Học Viên Thành Công');";
    echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=student';</script>";
}
else {
    echo "<script language='javascript'>alert('Xóa Học Viên Thất Bại');";
    echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=student';</script>";
  }
// die($sql);
?>