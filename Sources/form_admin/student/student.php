
  <script>
    function xoahv() {
      alert('Học viên đã được xóa!');
    }
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
  ?>
<body style="background: #E6E6FA">
  <!--noi dung-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 ">
        <form title="THÊM GIẢNG VIÊN">
          <button type="button" class="button1 " data-toggle="modal" data-target="#addStudent">
            <font face="cursive"> ADD</font>
          </button>
 
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
          <td>STT</td>
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
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['phoneNumber'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['createDate'] ?></td>
            <td>
            <button type="button" title="SỬA THÔNG TIN HỌC VIÊN" class="buttonsmall" data-toggle="modal" data-target="#editStudent">
                <h5> SỬA</h5>
              </button>
              
              <button type="button" title="XÓA HỌC VIÊN" class="buttonsmall" onclick="xoahv();">
                <h5>XÓA</h5>
              </button>
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

<div class="modal fade" id="editStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sửa thông tin học viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--nội dung plugin-->
                <table>
                  <tr>
                    <td>Nhập tên Học Viên</td>
                    <td>
                      <input type="text" name="Name.." id="ten_gv">
                    </td>
                  </tr>
              
                  <tr>
                    <td>Nhập tuổi</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập số điện thoại</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập email</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                </table>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
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