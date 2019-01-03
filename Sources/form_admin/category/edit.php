
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TRUNG TÂM NĂNG KHIẾU ABC</title>
	<link rel="stylesheet" type="text/css" href="../../form_admin/css-formadmin.css">
	<link rel="stylesheet" type="text/css" href="../../package/bootstrap-4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../package/FontAwesome.4.7.0/Content/Content/font-awesome.css">
	<script type="text/javascript" src="../../package/jQuery.3.3.1/Content/Scripts/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../package/bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/popper.min.js"></script>

	<script type="text/javascript " src="../../package/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
	
</head>

<body>

	<div id="header" class="">
		<div class="container" style="background-image: url('../../img/background.png'); ">
			<div class="row">
				<div class="col-md-2 " >
					<img src="../../img/logobale.png" id="logohead" >

				</div>
				<div class="col-md-10">
				
					<h1 style="text-shadow: 2px 2px 8px #FF0000;color: black;font-family: cursive;padding-left: 250px;padding-top: 20px;">EAM</h1>
					<h2 class="h2">TRUNG TÂM PHÁT TRIỂN NGHỆ THUẬT EAM</h2>
				
						<ul class="nav col-md-10 offset-2" >
						    <li><h3 class="h2" style="font-family: vardana;">Ươm Mầm Tài Năng Việt</h3></li>
							<li class="" style="margin-top: 30px;margin-left: 150px;">
								<button class="btn btn-danger" data-toggle="modal">
								 <i class="fa fa-user"></i>
									Admin
								</button>
							</li>
							<li class="nav-item" style="margin-left: 20px;margin-top: 30px;">
							    <a href="../../form/Index.php">
									<button class="btn btn-danger" data-toggle="modal">
									Đăng Xuất
									<i class="fa fa-sign-in"></i>
									</button>
								</a>
							</li>
							<li id="logout"></li> 
						</ul>
				    </div>
				</div>						
			</div>					
		</div>				
	</div>
    <nav class="navbar navbar-expand-lg sticky-top " style=" background:#222222;">
		<div class="container">
			<a class="navbar-brand" href="#"><i class="fa fa-lg fa-home" id="home"></i></a>
			<button class="navbar-toggler navbar-toggler-right btn " type="button" data-toggle="collapse" data-target="#navb">
				<span class=" ">Menu</span>
			</button>			
			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav mr-auto"  >
                    <li class="nav-item">
						<a class="nav-link" href="../admin.php?page=account" ><font size="4" color="white"> Quản Lí Tài Khoản</font></a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="../admin.php?page=student" ><font size="4" color="white">Quản Lí Học Viên</font></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../admin.php?page=lecturer" ><font size="4" color="white">Quản Lí Giảng Viên</font></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../admin.php?page=category"><font size="4"  color="white">Quản Lí Danh Mục</font></a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="../admin.php?page=subject"><font size="4" color="white">Quản Lí Môn Học</font></a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="../admin.php?page=class"><font size="4" color="white">Quản Lí Lớp</font></a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="../admin.php?page=sign_up"><font size="4" color="white">Quản Lí Đăng Kí</font></a>
					</li>
        </ul>
			</div>
		</div>
	</nav>	

    <div class="container">
    <?php
$ID = $_GET["ID"] ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlkhoahocttnk";
$connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}
mysqli_set_charset($connect, 'UTF8');
$sql4 = "SELECT * FROM `category` WHERE `category`.`ID`='$ID'";
$result = mysqli_query($connect, $sql4);
$row = mysqli_fetch_array($result);
?>
<br>
<br>
<h2 style="padding-left: 50px;">Sửa Thông Tin Danh Mục</h2>
<form style="padding-left: 100px;padding-top: 30px;" action="XuLyEdit.php" method="post">
<input type="hidden" name="ID" value="<?php echo $row['ID']?>">
Tên Danh Mục: <input style="margin-left: 30px;" type="text" name="Name" value="<?php echo $row['Name'];?>"><br><br>
<input type="submit" class="btn btn-success" value="Cập Nhật Danh Mục">
</form>


</div>

	
</body>
<footer>
  <br><br><br>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-5 footer-navigation">
          <h3><a href="#">Trung tâm phát triển nghệ thuật EAM</a></h3>
          <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong>
              · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
          <p class="company-name">Trung tâm EAM © 2018 </p>
        </div>
        <div class="col-sm-6 col-md-4 footer-contacts">
          <div>
            <i class="fa fa-map-marker footer-contacts-icon "></i>
            <p><span class="">175 Tây Sơn</span> Đống Đa, Hà Nội</p>
          </div>
          <div>
            <i class="fa fa-phone footer-contacts-icon "></i>
            <p class="footer-center-info email text-left"> 0965520566</p>
          </div>
          <div>
            <i class="fa fa-envelope footer-contacts-icon"></i>
            <p> <a href="#" target="_blank">ngantt62@wru.vn</a></p>
          </div>
        </div>

        <div class="col-md-3 footer-about">
          <h4>Đơn vị liên kết</h4>
          <p> </p>
          <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a
              href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
        </div>
      </div>
    </div>
  </div>

</footer>

</html>


