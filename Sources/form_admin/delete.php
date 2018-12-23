
            <?php

              $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
              // để hiện thị tiếng việt
              mysqli_set_charset($connect, 'UTF8');
              //Kiểm tra kết nối
              if (!$connect) {
                  die('kết nối không thành công ' . mysqli_connect_error());
              }
              function Xoa(){
                $sql2="DELETE FROM category WHERE ID="$row['ID']";";
                if (mysqli_query($connect,$sql2)) {
                  echo "<script>";
                  echo "alert('XÓa Danh Mục Thành Công !');";  
                  echo "</script>";
                }
                 else {
                  echo "<script>";
                  echo "alert('Xóa dữ liệu thất bại !');";  
                  echo "</script>";
                }
              }
            ?>
<?php
/*
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
    $Name = "";
    //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      if(isset($_POST["Name"])) { $Name = $_POST['Name']; }
      //Code xử lý, insert dữ liệu vào table
      $sql = "INSERT INTO category (Name, createDate, isActive)
      VALUES ('$Name', NOW(),1)";
      $sql1 = "SELECT * FROM `category` WHERE `category`.`Name`='$Name'";// để so sánh xem tên danh mục tồn tại chưa
      if ( (mysqli_num_rows(mysqli_query($connect, $sql1)))==0) {
        (mysqli_query($connect, $sql));
        echo "<script>";
        echo "alert('Thêm Danh Mục Thành Công !');";  
        echo "</script>";
      } else {
        echo "<script>";
        echo "alert('Tên Danh Mục Đã Tồn Tại !');";  
        echo "</script>";
    }
  }

//Đóng database
mysqli_close($connect);
  ?>



<?php

$connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
//Kiểm tra kết nối
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}
   if(isset($_GET['id'])) {
       $Name=$_GET['id'];
       $sql="DELETE FROM category WHERE Name='$Name'";
       mysqli_query($connect,$sql) or die('Xóa dữ liệu thất bại!');

   }
*/
?>