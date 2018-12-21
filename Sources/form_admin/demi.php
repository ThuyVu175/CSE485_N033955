<?php 
	$userName='root';
	$passWord='';
	$server='localhost';
	$dbName='qlkhoahocttnk';
	//Kết nối
	$connect= mysqli_connect($server, $userName, $passWord, $dbName);
	//Nếu kết nối lỗi thì thông báo và thoát
    mysqli_set_charset($connect, 'UTF8');
//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$Name = "";
//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["Name"])) { $Name = $_POST['Name']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO category (Name, createDate, isActive)
    VALUES ('$Name', NOW(),1)";

    if (mysqli_query($connect, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}

//Đóng database
mysqli_close($connect);
?>

<form action="" method="post">
<table>
    <tr>
        <th>Tiêu đề:</th>
        <td><input type="text" name="Name" value=""></td>
    </tr>
</table>
<button type="submit">Gửi</button>
</form>

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