
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
    $name = "";
    $age = "";
    $email = "";
    $phoneNumber = "";
    $description = "";
    $sexual = "";
    $image = "";
    //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      if(isset($_POST["name"])) { $name = $_POST['name']; }
      if(isset($_POST["age"])) { $age = $_POST['age']; }
      if(isset($_POST["email"])) { $email = $_POST['email']; }
      if(isset($_POST["phoneNumber"])) { $phoneNumber = $_POST['phoneNumber']; }
      if(isset($_POST["description"])) { $description = $_POST['description']; }
      if(isset($_POST["sexual"])) { $sexual = $_POST['sexual']; }
      if(isset($_POST["image"])) { $image = $_POST['image']; }
      //Code xử lý, insert dữ liệu vào table
      $sql = "INSERT INTO lecturer (name,age,email,phoneNumber,description,sexual,image, createDate, isActive)
      VALUES ('$name','$age','$email','$phoneNumber','$description','$sexual','$image', NOW(),1)";
      if ( (mysqli_query($connect, $sql)) ) {
        echo "<script>";
        echo "alert('Thêm Giảng Viên Thành Công !');";  
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
        <form title="THÊM GIẢNG VIÊN" action="" method="post">
          <button type="button" class="button1 " data-toggle="modal" data-target="#exampleModalCenter">
            <font face="cursive"> ADD</font>
          </button>
          <!--modal-->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background: #E6E6FA;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Giảng Viên </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td>Tên Giảng Viên</td>
                      <td>
                        <input type="text" name="name" id="ten_gv">
                      </td>
                    </tr>

                    <tr>
                      <td>Tuổi</td>
                      <td>
                        <input type="text" name="age" id="tuoi_gv">
                      </td>
                    </tr>
                    <tr>
                      <td>Số Điện Thoại</td>
                      <td>
                        <input type="text" name="phoneNumber" id="sodienthoai_gv">
                      </td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>
                        <input type="text" name="email" id="email_gv">
                      </td>
                    </tr>  
                    <tr>
                      <td>Sexual</td>
                      <td>
                        <input type="text" name="sexual" id="sex_gv">
                      </td>
                    </tr> 
                    <tr>
                      <td>Image(URL)</td>
                      <td>
                        <input type="text" name="image" id="image_gv">
                      </td>
                    </tr>                 
                  </table>
                    <label for="trinhdohocvan"> Mô Tả</label>
                  <textarea class="form-control" name="description" id="mota_gv" rows="3"></textarea>
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
    <table class="table table-hover">
       <?php
 // khởi tạo kết nối
$connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
// để hiện thị tiếng việt
mysqli_set_charset($connect, 'UTF8');
//Kiểm tra kết nối
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}

$sql = "SELECT * FROM lecturer WHERE `lecturer`.`isActive`=1";
//kiểm tra
if ($result = mysqli_query($connect, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
  ?>
    <tbody>
       <td hidden>ID: <?php echo $row['ID'] ?></td>
       <td><img src="<?php echo $row['image'] ?>" class="img"></td>
       <td width="280px">
        <p> Tên Giảng Viên: <?php echo $row['name'] ?> </p>
        <p> Tuổi: <?php echo $row['age'] ?></p>
          <p>SĐT: <?php echo $row['phoneNumber'] ?></p>
          <p>Email: <?php echo $row['email'] ?></p>
        </td>
       <td width="400px"><?php echo $row['description'] ?></td>
       <td><?php echo $row['createDate'] ?></td>
       <td width="200px">
       <a href="lecturer/edit.php?ID=<?php echo $row['ID']; ?>" >
        <button type="button" title="SỬA THÔNG TIN GIẢNG VIÊN" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter1">
          <h5> SỬA</h5>
        </button>
        </a>
        <a href="lecturer/delete.php?ID=<?php echo $row['ID']; ?>" class="delete">
        <button type="button" title="XÓA HỌC VIÊN" class="buttonsmall">
          <h5>XÓA</h5>
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
    </table>
  </div>
</body>
</html>