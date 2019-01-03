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

    $lecturerID = "";
    $subjectID= "";
    $startDay = "";
    $finishDay = "";
    //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      if(isset($_POST["lecturerID"])) { $lecturerID = $_POST['lecturerID']; }
      if(isset($_POST["subjectID"])) { $subjectID= $_POST['subjectID']; }
      if(isset($_POST["startDay"])) { $startDay = $_POST['startDay']; }
      if(isset($_POST["finishDay"])) { $finishDay = $_POST['finishDay']; }
      //Code xử lý, insert dữ liệu vào table
      $sql = " INSERT INTO class (lecturerID, subjectID, startDay, finishDay, createDate, isActive)
      VALUES ('$lecturerID','$subjectID','$startDay','$finishDay', NOW(),1)";

      if ( (mysqli_query($connect, $sql)) ) {
        echo "<script>";
        echo "alert('Thêm Lớp Thành Công !');";  
        echo "</script>";
      } 
      else {
        echo "<script>";
        echo "alert('Thêm Lớp Thất Bại !');";  
        echo "</script>";
      }
  }

  mysqli_close($connect);
  ?>

<body style="background: #E6E6FA">
  

  <!--noi dung-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 ">
        <form title="THÊM Lớp" action="" method="post">
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
                        <input type="text" name="lecturerID" id="ten_lop">
                      </td>
                    </tr>
                    <tr>
                      <td>Nhập Mã Môn Học</td>
                      <td>
                        <input type="text" name="subjectID" id="ten_mh">
                      </td>
                    </tr>
                    <tr>
                      <td> Ngày Bắt Đầu</td>
                      <td>
                        <input type="text" name="startDay" id="ngaybd">
                      </td>
                    </tr>
                    <tr>
                      <td> Ngày Kết Thúc</td>
                      <td>
                        <input type="text" name="finishDay" id="ngaykt">
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
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
        <td hidden>ID</td>
        <td > Giáo Viên</td>
        <td> Môn Học</td>
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

$sql = "SELECT * 
FROM `lecturer`,`subjects`,`class`
WHERE `lecturer`.`ID`=`class`.`lecturerID` AND `subjects`.`ID`=`class`.`subjectID` AND `class`.`isActive`=1";
//kiểm tra
if ($result = mysqli_query($connect, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
  ?>
      <tbody>
        <td hidden>
          <?php echo $row['ID'] ?>
        </td>
        <td>
          <?php echo $row['name'] ?>
        </td>
        <td>
          <?php echo $row['Name'] ?>
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
          <a href="class/edit.php?ID=<?php echo $row['ID']; ?>" >
            <button type="button" title="SỬA THÔNG TIN LỚP HỌC" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter1">
              <h5> <font color="">SỬA</font></h5>
            </button>
          </a>
          <a href="class/delete.php?ID=<?php echo $row['ID']; ?>" class="delete">
            <button type="button" title="XÓA LỚP HỌC" class="buttonsmall" >
              <h5><font color="red"> XÓA</font></h5>
            </button>
          </a>
          <a href="class/detailedClass.php?ID=<?php echo $row['ID']; ?>">
            <button type="button" title="CHI TIẾT LỚP HỌC" class="buttonsmall">
              <h5><font color="blue"><i class="fa fa-sign-in"></i></font></h5>
            </button>
          </a>
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