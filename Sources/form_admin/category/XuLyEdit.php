<?php
    $ID = $_POST['ID'] ;
    $Name = $_POST['Name'];
    $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
    //Kiểm tra kết nối
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    mysqli_set_charset($connect, 'UTF8');
    $sql  = "UPDATE category SET Name = '$Name' WHERE category.ID = '$ID'";
    if(mysqli_query($connect,$sql)) {
        echo "<script language='javascript'>alert('Cập Nhật Danh Mục Thành Công');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=category';</script>";
    }
    else {
        echo "<script language='javascript'>alert('Cập Nhật Danh Mục Thất Bại');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=category';</script>";
    }
?>