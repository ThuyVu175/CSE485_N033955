
  <script>
    function xoadm() {
      alert('Lớp đã được xóa!');
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
        <form title="THÊM Lớp">
          <button type="button" class="button1 " data-toggle="modal" data-target="#exampleModalCenter">
            <font face="cursive"> ADD</font>
          </button>
          <!--modal-->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background: #E6E6FA;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Lớp </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td>Nhập Mã Giáo Viên</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>
                    <tr>
                      <td>Nhập Mã Môn Học</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>
                    <tr>
                      <td> Ngày Bắt Đầu</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>
                    <tr>
                      <td> Ngày Kết Thúc</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>
                    <tr>
                      <td>Ngày Tạo</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
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
          <!---->

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
    <table class="table table-hover" >
      <thead style="background: #CCCC66;">
        <td >STT</td>
        <td >Mã Giáo Viên</td>
        <td>Mã Môn Học</td>
        <td>NGày Bắt Đầu</td>
        <td>Ngày Kết Thúc</td>
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

$sql = "SELECT * FROM class";
//kiểm tra
if ($result = mysqli_query($connect, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
  ?>
      <tbody>
        <td>
          <?php echo $row['ID'] ?>
        </td>
        <td>
          <?php echo $row['lecturerID'] ?>
        </td>
        <td>
          <?php echo $row['subjectID'] ?>
        </td>
        <td>
          <?php echo $row['startDay'] ?>
        </td>
        <td>
          <?php echo $row['finishDay'] ?>
        </td>
        <td>
          <?php echo $row['createDate'] ?>
        </td>
        <td>
          <button type="button" title="SỬA THÔNG TIN DANH MỤC" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter1">
            <h5> SỬA</h5>
          </button>
          <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Lớp </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td>Nhập Mã Giáo Viên</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>
                    <tr>
                      <td>Nhập Mã Môn Học</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>
                    <tr>
                      <td> Ngày Bắt Đầu</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>
                    <tr>
                      <td> Ngày Kết Thúc</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>
                    <tr>
                      <td>Ngày Tạo</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
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
          <button type="button" title="XÓA DANH MỤC" class="buttonsmall" onclick="xoadm();">
            <h5>XÓA</h5>
          </button>
        </td>
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