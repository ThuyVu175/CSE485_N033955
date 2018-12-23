
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

<body style="background: #E6E6FA">
  

  <!--noi dung-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 ">


        <form title="THÊM DANH MỤC" action="" method="post">
          <button type="button" class="button1 " data-toggle="modal" data-target="#exampleModalCenter">
            <font face="cursive"> ADD</font>
          </button>
        
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background: #E6E6FA;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Danh Mục </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                        <th>Tiêu đề:</th>
                        <td><input type="text" name="Name" value=""></td>
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
    <table class="table table-hover " >
      <thead style="background: #CCCC66;">

        <th  WIDTH= "400px">Tên Danh Mục</th>
        <th WIDTH= "500px">Ngày Tạo</th>
         <th>Chức Năng</th>
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

        $sql = "SELECT * FROM category";
        //kiểm tra
        if ($result = mysqli_query($connect, $sql)) {
            while ($row = mysqli_fetch_array($result)) {
      ?>
      <tbody>
        <tr>
          <th>
            <?php echo $row['Name'] ?>
          </th>
          <th>
            <?php echo $row['createDate'] ?>
          </th>
          <th>
            <button type="button" title="SỬA THÔNG TIN DANH MỤC" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter1">
              <h5> SỬA</h5>
            </button>
            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Danh Mục </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!--nội dung plugin-->
                    <table>
                      <tr>
                        <td>Nhập Tên Danh Mục</td>
                        <td>
                          <input type="text" name="Name.." id="ten_gv">
                        </td>
                      </tr>
                    </table>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <form method="post" action="">
            <?php
                 echo $row['Name'] ;
            /*
                  $sql="DELETE FROM category WHERE Name='$Name'";
                  mysqli_query($connect,$sql) or die('Xóa dữ liệu thất bại!');
            */ 
            ?>
            <button type="button" title="XÓA DANH MỤC" class="buttonsmall" onclick="">
            <h5>XÓA</h5>
            </button>
            </form> 
          </th>
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