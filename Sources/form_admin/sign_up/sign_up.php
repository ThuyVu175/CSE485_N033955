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
    <div class="row">
      <table class="table table-hover" bgcolor="">
        <thead style="background: #CCCC66;">
          <td hidden>ID</td>
          <td>Tên người đăng kí</td>
          <td>Tên Môn Học</td>
          <td>Số Điện Thoại Học Viên</td>
          <td>Trạng Thái</td>
          <td>Ngày Tạo</td>
          <td>Chức Năng</td>
        </thead>
        <tbody>
          <?php
            // khởi tạo kết nối
            $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
            // để hiện thị tiếng việt
            mysqli_set_charset($connect, 'UTF8');
            //Kiểm tra kết nối
            if (!$connect) {
                die('kết nối không thành công ' . mysqli_connect_error());
            }
            $sql = "SELECT * FROM `subjects`,`sign_up`
             WHERE  `subjects`.`ID`=`sign_up`.`subjectID`  AND `sign_up`.`isActive`=1   ";
            //kiểm tra
            if ($result = mysqli_query($connect, $sql)) {
                while ($row = mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td hidden><?php echo $row['ID'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['phoneNumber'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td><?php echo $row['createDate'] ?></td>
            <td>
            <a href="sign_up/edit.php?ID=<?php echo $row['ID']; ?>" >
            <button type="button" title="SỬA THÔNG TIN ĐĂNG KÍ" class="buttonsmall">
                <h5> SỬA</h5>
              </button>
            </a>
            <a href="sign_up/delete.php?ID=<?php echo $row['ID']; ?>">
              <button type="button" title="XÓA ĐĂNG KÍ" class="buttonsmall">
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
      </table>
    </div>
  </div>
</body>
</html>
