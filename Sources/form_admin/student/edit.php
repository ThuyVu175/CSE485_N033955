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
    $sqlEdit = "SELECT * FROM `student` WHERE `student`.`ID`='$ID'";
    //kiểm tra
    $result = mysqli_query($connect, $sqlEdit);
    $row = mysqli_fetch_array($result);
    // die($sql);
?>
<h1>Sửa Thông Tin Học Viên</h1>
<form action="XuLyEdit.php" method="post">
    <input type="hidden" name="ID" value="<?php echo $row['ID']?>">
    Sửa ID tài khoản Học Viên:<input type="text" name="accountID" value="<?php echo $row['accountID'];?>"><br>

    Sửa tên Học Viên:<input type="text" name="name" value="<?php echo $row['name'];?>"><br>

    Sửa học phí đã nộp:<input type="text" name="paid" value="<?php echo $row['paid'];?>"><br>

    Sửa học phí còn nợ:<input type="text" name="owed" value="<?php echo $row['owed'];?>"><br>

    Sửa tuổi:<input type="text" name="age" value="<?php echo $row['age'];?>"><br>

    Sửa số điện thoại:<input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'];?>"><br>

    Sửa email:<input type="text" name="email" value="<?php echo $row['email'];?>"><br>

    Sửa giới tính:<input type="text" name="sexual" value="<?php echo $row['sexual'];?>"><br>

    <input type="submit" value="Cập Nhật Học Viên">
</form>


