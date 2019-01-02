<script>


  </script>
  <?php
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

//Đóng database
mysqli_close($connect);
  ?>

<body style="background: #E6E6FA">
  <!--noi dung-->
  <div class="container">
    <div class="row">

      <div class="col-md-5 offset-md-4" style="padding-top: 50px;">
        <button type="submit" class="buttonsearch">
           <img src="../img/search.png" style="width: 34px;height: auto; ">
        </button>
        <input type="text" name="search" placeholder="Tìm kiếm ...">
      </div>
    </div>
    <br><br>
    <!---->
    <table class="table table-hover " >
      <thead style="background: #CCCC66;">
        <td width= "150px">ID Tài Khoản</td>
        <td  WIDTH= "200px">Tên Tài Khoản</td>
        <td  WIDTH= "300px">Email</td>
        <td  WIDTH= "200px">Số Điện Thoại</td>
        <td WIDTH= "300px">Ngày Tạo</td>
        <td>Chức Năng</td>
      </thead>
      <?php
        // khởi tạo kết nối
        $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
        // để hiện thị tiếng việt
        mysqli_set_charset($connect, 'UTF8');
        //Kiểm tra kết nối
        if (!$connect) {
            die('kết nối không thành công ' . mysqli_connect_error());
        }

        $sql2 = "SELECT * FROM `account` WHERE `account`.`isActive`=1";
        //kiểm tra
        if ($result = mysqli_query($connect, $sql2)) {
            while ($row = mysqli_fetch_array($result)) {
      ?>
      <tbody>
        <tr>
          <td >
            <?php echo $row['ID'] ?>
          </td>
          <td>
            <?php echo $row['accountName'] ?>
          </td>
          <td>
            <?php echo $row['email'] ?>
          </td>
          <td>
            <?php echo $row['phoneNumber'] ?>
          </td>
          <td>
            <?php echo $row['createDate'] ?>
          </td>
          <td>           
            <a href="account/delete.php?ID=<?php echo $row['ID']; ?>" class="delete">
              <button type="button" title="XÓA DANH MỤC" class="buttonsmall">
              <h5>XÓA</h5>
              </button>
            </a>
          </td>
        </tr>
      </tbody>
      <?php
    }
} else
    //Hiện thông báo khi không thành công
    echo 'Không thành công. Lỗi' . mysqli_error($connect);
//ngắt kết nối
mysqli_close($connect);
 ?>
      </tbody>
    </table>
  </div>
</body>
</html>