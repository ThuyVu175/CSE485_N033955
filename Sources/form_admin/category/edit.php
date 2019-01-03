<?php

    include('../head_admin.php');
    include('../menu_admin.php');
    $ID = $_GET["ID"] ;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlkhoahocttnk";
    $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    mysqli_set_charset($connect, 'UTF8');
    $sql4 = "SELECT * FROM `category` WHERE `category`.`ID`='$ID'";
    $result = mysqli_query($connect, $sql4);
    $row = mysqli_fetch_array($result);
?>
<h1>Sửa Thông Tin Danh Mục</h1>
<form action="XuLyEdit.php" method="post">
<input type="hidden" name="ID" value="<?php echo $row['ID']?>">
Tên Danh Mục: <input type="text" name="Name" value="<?php echo $row['Name'];?>"><br>
<input type="submit" value="Cập Nhật Danh Mục">
</form>