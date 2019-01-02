<?php
    $ID = $_POST['ID'] ;
    $accountID = $_POST['accountID'];
    $name = $_POST['name'];
    $paid = $_POST['paid'];
    $owed = $_POST['owed'];
    $age = $_POST['age'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $sexual = $_POST['sexual'];
    $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
    //Kiểm tra kết nối
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    mysqli_set_charset($connect, 'UTF8');
    $sqlXuLy  = "UPDATE student SET accountID = '$accountID',name = '$name', paid = '$paid',owed = '$owed',age = '$age',phoneNumber = '$phoneNumber',email = '$email', sexual = '$sexual'  WHERE student.ID = '$ID'";
    if(mysqli_query($connect,$sqlXuLy)) {
        echo "<script language='javascript'>alert('Cập Nhật Học Viên Thành Công');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=student';</script>";
    }
    else {
        echo "<script language='javascript'>alert('Cập Nhật Học Viên Thất Bại');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=student';</script>";
    }
?>

