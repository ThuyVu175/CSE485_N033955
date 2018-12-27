<?php
    $ID = $_GET["ID"] ;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlkhoahocttnk";
    $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
    //Kiểm tra kết nối
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    mysqli_set_charset($connect, 'UTF8');
    $sql4 = "SELECT * FROM `category` WHERE `category`.`ID`='$ID'";
    //kiểm tra
    $result = mysqli_query($connect, $sql4);
    $row = mysqli_fetch_array($result);
    // die($sql);
?>
<h1>Sửa Thông Tin Danh Mục</h1>
<form action="XuLyEdit.php" method="post">
<input type="hidden" name="ID" value="<?php echo $row['ID']?>">
Tên Danh Mục: <input type="text" name="Name" value="<?php echo $row['Name'];?>"><br>
<input type="submit" value="Cập Nhật Danh Mục">
</form>
