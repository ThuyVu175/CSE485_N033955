<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TRUNG TÂM NĂNG KHIẾU ABC</title>
	<link rel="stylesheet" type="text/css" href="css-js/Index.css">
	<link rel="stylesheet" type="text/css" href="../package/bootstrap-4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../package/FontAwesome.4.7.0/Content/Content/font-awesome.css">
	<script type="text/javascript" src="../package/jQuery.3.3.1/Content/Scripts/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../package/bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/popper.min.js"></script>

	<script type="text/javascript " src="../package/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="Script.js"></script> -->
</head>

<body>
	<div id="header" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-3 " >
					<img src="../img/logobale.png" id="logo" >

				</div>
				<div class="col-md-9">
					<div class="row mt-2">
						<h2 class="">TRUNG TÂM PHÁT TRIỂN NGHỆ THUẬT EAM</h2>
					</div>
					<div class="row mt-2">
						<div class="col-md-5 offset-md-7">
							<ul class="pt-1">
								<li><button class="btn btn-danger" data-toggle="modal" data-target="#formLogin">
									Đăng Nhập
								</button></li>
								<li><button class="btn btn-danger" data-toggle="modal" data-target="#formSignUp">
									Đăng ký
								</button></li>
							</ul>
						</div>						
					</div>					
				</div>				
			</div>
		</div>
	</div>	
	<!--HEADER-->	
	<nav class="navbar navbar-expand-lg sticky-top " id="menu">
		<div class="container">
			<a class="navbar-brand" href="Index.php?page=GioiThieu"><i class="fa fa-lg fa-home" id="home"></i></a>
			<button class="navbar-toggler navbar-toggler-right btn " type="button" data-toggle="collapse" data-target="#navb">
				<span class=" " id="btnMenu">Menu</span>
			</button>			
			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav mr-auto">

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Giới thiệu</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#aboutUs">Trung tâm</a>
							<a class="dropdown-item" href="#lecturers">Giảng viên</a>
							<a class="dropdown-item" href="#evaluate">Cảm nhận</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Index.php?page=MyThuat" >Mỹ thuật</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Index.php?page=Nhay">Nhảy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="Index.php?page=Mua">Múa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="Index.php?page=Hat">Hát</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="Index.php?page=VoThuat">Võ thuật</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
				</form>
			</div>
		</div>
	</nav>						 
	<!--MENU-->
	<div class="container-fluid" id="main">
		<div class="row">
			<?php 
			$page=isset($_GET["page"])?$_GET["page"]:"";
			if($page =='GioiThieu')
				include "Infomation.php";
			if($page =='MyThuat')
				include "Monhoc.php";
			if($page =='Nhay')
				include "Monhoc.php";
			if($page =='Mua')
				include "Monhoc.php";
			if($page =='Hat')
				include "Monhoc.php";
			if($page =='VoThuat')
				include "Monhoc.php";
			
			?>
		</div>
	</div>						
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 footer-navigation">
					<h3><a href="#">Trung tâm phát triển nghệ thuật EAM</a></h3>
					<p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
					<p class="company-name">Trung tâm EAM © 2018 </p>
				</div>
				<div class="col-sm-6 col-md-4 footer-contacts">
					<div class="">
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

				<div class="col-md-4 footer-about">
					<h4>Đơn vị liên kết</h4>
					<p>  </p>
					<div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
				</div>
			</div>
		</div>
	</div>   
</body>
</html>


<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="formLogin">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Đăng Nhập</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<img src="../img/logobale.png" class="mx-auto d-block" id="logo">
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<label>UserName</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="" placeholder="UserName của bạn">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<label>PassWord</label>
					</div>
					<div class="col-md-8 ">
						<input type="password" class="form-control" name="">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Đăng nhập</button>
				<button type="button" class="btn btn-dark">Thoát</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="formSignUp">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">Đăng ký</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row mt-3">
					<div class="col-md-4">
						<label>UserName</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="" placeholder="UserName của bạn">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<label>PassWord</label>
					</div>
					<div class="col-md-8 ">
						<input type="password" class="form-control" name="" placeholder="Nhập password">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<label>Confirm PassWord</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="password" name="" placeholder="Nhập lại password">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<label>Email</label>
					</div>
					<div class="col-md-8 ">
						<input type="email" class="form-control" name="" placeholder="abc@email.com">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<label>Tuổi</label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name=""placeholder="Nhập Tuổi" >
					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Đăng ký</button>
				<button type="button" class="btn btn-primary">Thoát</button>
			</div>
		</div>
	</div>
</div>
