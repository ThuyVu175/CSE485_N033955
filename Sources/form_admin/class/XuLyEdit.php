<?php
    $ID = $_POST['ID'] ;
    $lecturerID = $_POST['lecturerID'];
    $subjectID = $_POST['subjectID'];
    $startDay = $_POST['startDay'];
    $finishDay = $_POST['finishDay'];
    $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
    mysqli_set_charset($connect, 'UTF8');
    //Kiểm tra kết nối
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    $sql  = "UPDATE class SET lecturerID = '$lecturerID',subjectID = '$subjectID',startDay = '$startDay',finishDay = '$finishDay' WHERE class.ID = '$ID'";
    if(mysqli_query($connect,$sql)) {
        echo "<script language='javascript'>alert('Cập Nhật Lớp Thành Công');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=class';</script>";
    }
    else {
        echo "<script language='javascript'>alert('Cập Nhật Lớp Thất Bại');";
        echo "location.href='http://localhost/CongNgheWeb/Sources/form_admin/admin.php?page=class';</script>";
    }
?>