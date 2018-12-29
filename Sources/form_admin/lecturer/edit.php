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
    $sql4 = "SELECT * FROM `lecturer` WHERE `lecturer`.`ID`='$ID'";
    //kiểm tra
    $result = mysqli_query($connect, $sql4);
    $row = mysqli_fetch_array($result);
    // die($sql);
?>
<h1>Sửa Thông Tin Giảng Viên</h1>
<form action="XuLyEdit.php" method="post">
<input type="hidden" name="ID" value="<?php echo $row['ID']?>">
Tên Giảng Viên: <input type="text" name="name" value="<?php echo $row['name'];?>"><br>
Tuổi: <input type="text" name="age" value="<?php echo $row['age'];?>"><br>
Email: <input type="text" name="email" value="<?php echo $row['email'];?>"><br>
PhoneNumber:  <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'];?>"><br>
Mô Tả:  <input type="text" name="description" value="<?php echo $row['description'];?>"><br>
Cập Nhật Ảnh:  <input type="text" name="image" value="<?php echo $row['image'];?>"><br>
<input type="submit" value="Cập Nhật Giảng Viên">
</form>