<?php
    $ID = $_POST['ID'] ;
    $status = $_POST['status'];
    $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
    //Kiểm tra kết nối
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    mysqli_set_charset($connect, 'UTF8');
    $sql  = "UPDATE sign_up SET status = '$status' WHERE sign_up.ID = '$ID'";
    if(mysqli_query($connect,$sql)) {
        echo "<script language='javascript'>alert('Cập Nhật Đăng Kí Thành Công');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=sign_up';</script>";
    }
    else {
        echo "<script language='javascript'>alert('Cập Nhật Đăng Kí Thất Bại');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=sign_up';</script>";
    }
?>