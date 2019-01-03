<?php
    $ID = $_POST['ID'] ;
    $Name = $_POST['Name'];
    $categoryID = $_POST['categoryID'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
    mysqli_set_charset($connect, 'UTF8');
    //Kiểm tra kết nối
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    $sql  = "UPDATE subjects SET Name = '$Name',categoryID= '$categoryID',description = '$description',image = '$image', price = '$price' WHERE subjects.ID = '$ID'";
    if(mysqli_query($connect,$sql)) {
        echo "<script language='javascript'>alert('Cập Nhật Môn Học Thành Công');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=subject';</script>";
    }
    else {
        echo "<script language='javascript'>alert('Cập Nhật Môn Học Thất Bại');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=subject';</script>";
    }
?>