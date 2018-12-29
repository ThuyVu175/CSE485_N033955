<?php
    $ID = $_POST['ID'] ;
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
    mysqli_set_charset($connect, 'UTF8');
    //Kiểm tra kết nối
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    $sql  = "UPDATE lecturer SET name = '$name',age = '$age',email = '$email',phoneNumber = '$phoneNumber',description = '$description',sexual = '$sexual',image = '$image' WHERE lecturer.ID = '$ID'";
    if(mysqli_query($connect,$sql)) {
        echo "<script language='javascript'>alert('Cập Nhật Giảng Viên Thành Công');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=lecturer';</script>";
    }
    else {
        echo "<script language='javascript'>alert('Cập Nhật Giảng Viên Thất Bại');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=lecturer';</script>";
    }
?>