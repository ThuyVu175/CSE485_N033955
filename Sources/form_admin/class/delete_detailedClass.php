<?php
$connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
//Kiểm tra kết nối
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}
mysqli_set_charset($connect, 'UTF8');

if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Invalid HTTP method!');
$studentID=$_GET['studentID'] ;
$classID= $_GET['classID'] ;
$sqlDelete = "UPDATE student_class SET isActive=0 WHERE student_class.studentID = '$studentID' AND  student_class.classID = '$classID'";
if (mysqli_query($connect, $sqlDelete)) {
    echo "<script language='javascript'>alert('Xóa Học Viên Thành Công');";
    echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=class';</script>";
}
else {
    echo "<script language='javascript'>alert('Xóa Học Viên Thất Bại');";
    echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=class';</script>";
  }
// die($sql);
?>