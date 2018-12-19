<script>
    function xoamh() {
      alert('Môn học đã được xóa!');
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
        <form title="THÊM Môn Học">
          <button type="button" class="button1 " data-toggle="modal" data-target="#exampleModalCenter">
            <font face="cursive"> ADD</font>
          </button>
          <!--modal-->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background: #E6E6FA;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Môn Học </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td>Nhập Tên Môn Học</td>
                      <td>
                        <input type="text" name="Name.." id="ten_mh">
                      </td>
                    </tr>
                    <tr>
                      <td>Nhập Mã Danh Mục</td>
                      <td>
                        <input type="text" name="Mã.." id="ma_dm">
                      </td>
                    </tr>
                    <tr>
                      <td>Nhập Chi Phí Môn Học</td>
                      <td>
                        <input type="text" name="Chi Phí.." id="chiphi_mh">
                      </td>
                    </tr>
                  </table>
                  <label for="trinhdohocvan"> Mô Tả</label>
                  <textarea class="form-control" id="mota_gv" rows="3"></textarea>
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
        <td  WIDTH= ""></td>
        <td  WIDTH= "150px">Tên Môn Học</td>
        <td  WIDTH= "50px"> Mã Danh Mục</td>
        <td  WIDTH= "400px">Mô Tả Môn Học</td>
        <td width="100px">Chi Phí(VND)</td>
        <td  WIDTH= "150px">Ngày Tạo</td>
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

$sql = "SELECT * FROM subjects";
//kiểm tra
if ($result = mysqli_query($connect, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
  ?>
      <tbody>
        <td>
            <img src="<?php echo $row['image'] ?>" class="img">
        </td>
        <td>
          <?php echo $row['Name'] ?>
        </td>
        <td>
          <?php echo $row['categoryID'] ?>
        </td>
        <td>
          <?php echo $row['description'] ?>
        </td>
        <td>
          <?php echo $row['price'] ?>
        </td>
        <td>
          <?php echo $row['createDate'] ?>
        </td>
        <td>
          <button type="button" title="SỬA THÔNG TIN MÔN HỌC" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter1">
            <h5> SỬA</h5>
          </button>
          <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Môn Học </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td>Nhập Tên Môn Học</td>
                      <td>
                        <input type="text" name="Name.." id="ten_gv">
                      </td>
                    </tr>
                    </tr>
                    <tr>
                      <td>Nhập Mã Danh Mục</td>
                      <td>
                        <input type="text" name="Mã.." id="ma_dm">
                      </td>
                    </tr>
                    <tr>
                      <td>Nhập Chi Phí Môn Học</td>
                      <td>
                        <input type="text" name="Chi Phí.." id="chiphi_mh">
                      </td>
                    </tr>
                  </table>
                  <label for="trinhdohocvan"> Mô Tả</label>
                  <textarea class="form-control" id="mota_gv" rows="3"></textarea>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" title="XÓA DANH MỤC" class="buttonsmall" onclick="xoamh();">
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