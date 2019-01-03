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
    $sql4 = "SELECT * FROM `subjects` WHERE `subjects`.`ID`='$ID'";
    //kiểm tra
    $result = mysqli_query($connect, $sql4);
    $row = mysqli_fetch_array($result);
    // die($sql);
?>
<h1>Sửa Thông Tin Môn Học</h1>
<form action="XuLyEdit.php" method="post">
<input type="hidden" name="ID" value="<?php echo $row['ID']?>">
Tên Môn Học: <input type="text" name="Name" value="<?php echo $row['Name'];?>"><br>
ID Danh Mục: <input type="text" name="categoryID" value="<?php echo $row['categoryID'];?>"><br>
Mô Tả: <input type="text" name="description" value="<?php echo $row['description'];?>"><br>
Cập Nhật Ảnh:  <input type="text" name="image" value="<?php echo $row['image'];?>"><br>
Chi Phí Môn Học:  <input type="text" name="price" value="<?php echo $row['price'];?>"><br>
<input type="submit" value="Cập Nhật Môn Học">
</form>