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
  $accountID = "";
  $name = "";
  $paid = "";
  $owed = "";
  $age = "";
  $phoneNumber = "";
  $email = "";
  $sexual = "";

  //Lấy giá trị POST từ form vừa submit
  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if(isset($_POST["accountID"])) { $accountID = $_POST['accountID']; }
    if(isset($_POST["name"])) { $name = $_POST['name']; }
    if(isset($_POST["paid"])) { $paid = $_POST['paid']; }
    if(isset($_POST["owed"])) { $owed = $_POST['owed']; }
    if(isset($_POST["age"])) { $age = $_POST['age']; }
    if(isset($_POST["phoneNumber"])) { $phoneNumber = $_POST['phoneNumber']; }
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["sexual"])) { $sexual = $_POST['sexual']; }
    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO student (accountID,name,paid,owed,age,phoneNumber,email,sexual, createDate, isActive)
    VALUES ('$accountID', '$name','$paid','$owed','$age','$phoneNumber','$email','$sexual', NOW(),1)";
    if ( (mysqli_query($connect, $sql)) ) {
      echo "<script>";
      echo "alert('Thêm Học Viên Thành Công !');";  
      echo "</script>";
    } 
    else {      
    echo "<script>";
    echo "alert('Thêm Học Viên Thất Bại !');";  
    echo "</script>";
  }
}
//Đóng database
mysqli_close($connect);
  ?>
<body style="background: #E6E6FA">
  <!--noi dung-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 ">
        <form title="THÊM HỌC VIÊN" action="" method="post">
          <button type="button" class="button1 " data-toggle="modal" data-target="#addStudent">
            <font face="cursive"> ADD</font>
          </button>
          <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nhập thông tin học viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--nội dung plugin-->
                <table>
                  <tr>
                    <td>Nhập ID tài khoản Học Viên</td>
                    <td>
                      <input type="text" name="accountID" >
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập tên Học Viên</td>
                    <td>
                      <input type="text" name="name" >
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập học phí đã nộp</td>
                    <td>
                      <input type="text" name="paid" >
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập học phí còn nợ</td>
                    <td>
                      <input type="text" name="owed" >
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập tuổi</td>
                    <td>
                      <input type="text" name="age" >
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập số điện thoại</td>
                    <td>
                      <input type="text" name="phoneNumber" >
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập email</td>
                    <td>
                      <input type="text" name="email" >
                    </td>
                  </tr>
                  <td>Nhập giới tính</td>
                    <td>
                      <input type="text" name="sexual" >
                    </td>
                  </tr>
                </table>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background: #E6E6FA;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Thêm Học Viên </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td>Tên Học Viên</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>

                    <tr>
                      <td>Tuổi</td>
                      <td>
                        <input type="text" name="Age.." id="tuoi_hv">
                      </td>
                    </tr>
                    <tr>
                      <td>Số Điện Thoại</td>
                      <td>
                        <input type="text" name="PhoneNumber.." id="sodienthoai_hv">
                      </td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>
                        <input type="text" name="Email.." id="email_hv">
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
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
          <td>Tên Học Viên</td>
          <td>Tuổi</td>
          <td>Số Điện Thoại</td>
          <td>Email</td>
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

            $sql = "SELECT * FROM student";
            //kiểm tra
            if ($result = mysqli_query($connect, $sql)) {
                while ($row = mysqli_fetch_array($result)) {
                  ?>
          <tr>
            <td hidden><?php echo $row['ID'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['phoneNumber'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['createDate'] ?></td>
            <td>
              <a href="student/edit.php?ID=<?php echo $row['ID']; ?>" >
                <button type="button" title="SỬA THÔNG TIN HỌC VIÊN" class="buttonsmall" data-toggle="modal" data-target="#editStudent">
                  <h5> SỬA</h5>
                </button>
              </a>
              <a href="student/delete.php?ID=<?php echo $row['ID']; ?>" class="delete">
                <button type="button" title="XÓA HỌC VIÊN" class="buttonsmall" onclick="xoahv();">
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

