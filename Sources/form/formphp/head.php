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
								<li ><button class="btn btn-danger" data-toggle="modal" data-target="#formLogin" id="head-login">
									<i class="fa fa-sign-in"></i>
									Đăng Nhập
								</button> 
								<a href="" type="hide" id="Name"></a>
								</li>
								<li >
									<button class="btn btn-danger" data-toggle="modal" data-target="#formSignUp" id="head-signup">
									<i class="fa fa-user"></i>
									Đăng ký
									</button>

								</li>
								<li id="logout"></li>


							</ul>
						</div>						
					</div>					
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
				<form action="#" method="POST" class="p-4">
					<input placeholder="Tên Đăng Nhập" class="form-control" name="username" type="text" id="username" required>

					<input  placeholder="Mật Khẩu" name="password" class="form-control mt-3" type="password" id="password" required>
					<span id="validate" class="text-danger"></span>

					<div class="row mt-3">
						<span class="check-w3 col-md-6 text-left"><input type="checkbox"   />Remember Me</span>
						<a class="col-md-6 text-right" href="#">Forgot Password?</a>						
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<div class="row mr-2">	
					<button class="btn btn-success col-md- mr-2" onclick="Login()">Đăng nhập</button>

					<button type="button" class="btn btn-secondary col-md-4" >Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="formSignUp">
	<div class="modal-dialog" role="document">
		
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">Đăng ký thành viên</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>			
			<div class="modal-body">
				<form action='#' method='POST' role='form'>
					<div class="row mt-2">
						<div class="row container">
							<div class="col-md-4">
								<label>Tên tài khoản</label>
							</div>
							<div class="col-md-8">
								<input class="form-control" type="text" name="usernameSignUp" placeholder="Nhập tên tài khoản" id="usernameSignUp">
							</div>
						</div>
						<div class="row container">
							<span id="NoteUserName"></span>
						</div>
						
					</div>
					<div class="row mt-4">
						<div class="row container">
							<div class="col-md-4">
								<label>Mật khẩu:</label>
							</div>
							<div class="col-md-8 ">
								<input type="password" class="form-control" name="passwordSignUp" placeholder="Nhập mật khẩu" id="passwordSignUp">
							</div>
						</div>					
						<div class="row container">
							<span id="NotePassWord"></span>
						</div>
					</div>
					<div class="row mt-4">
						<div class="row container">
							<div class="col-md-4">
								<label>Nhập lại mật khẩu:</label>
							</div>
							<div class="col-md-8">
								<input class="form-control" type="password" name="confirmPasswordSignUp" placeholder="Nhập lại mật khẩu" id="confirmPasswordSignUp">
							</div>
						</div>
						<div class="row container">
							<span id="NoteConfirmPassWord"></span>
						</div>
						
					</div>
					<div class="row mt-4">
						<div class="row container">
							<div class="col-md-4">
								<label>Email</label>
							</div>
							<div class="col-md-8 ">
								<input type="email" class="form-control" name="emailSignUp" id="emailSignUp" placeholder="abc@email.com">
							</div>
						</div>
						<div class="row container">
							<span id="NoteEmail"></span>
						</div>
						
					</div>
					<div class="row mt-4">
						<div class="row container">
							<div class="col-md-4">
								<label>Số điện thoại:</label>
							</div>
							<div class="col-md-8 ">
								<input type="text" class="form-control" name="phoneNumberSignUp" placeholder="Nhập số điện thoại" id="phoneNumberSignUp">
							</div>
						</div>
						<div class="row container">
							<span id="NotePhoneNumber"></span>
						</div>
					</div>
					<span id="error" class="row text-danger"></span>	
				</form>		
			</div>							
			<div class="modal-footer mt-4">
				<button type="button" class="btn btn-danger"  onclick="SignUp()">Đăng ký</button>
				<button type="button" data-dismiss="modal" class="btn btn-primary">Thoát</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function Login(){
		var username=$('#username').val();
		var password= $('#password').val();

		$.ajax({
			url: "Xuly/login.php",
			type: 'post',
			dataType: 'json',
			data: {username: username, password: password},
			success: function(result){
				if(result==1){
					$('#head-signup').hide();
					$('#logout').html("<button id='logout' onclick='Logout()' class='btn btn-danger';> Đăng xuất</button>");
					$('#head-login').hide();
					$('#formLogin').modal('hide');
					$('#Name').html("Xin chào "+username+"!");

				}						
				else{
					$('#validate').html("Sai tài khoản hoặc mật khẩu");
					$('#formlogin').modal('show');
				}
			}
		});
	}

	function Logout(){
		$('#head-login').show();
		$('#head-signup').show();
		$('#logout').hide();
		$('#Name').hide();
	}

	function SignUp(){
		var usernameSignUp= $('#usernameSignUp').val();
		var passwordSignUp= $('#passwordSignUp').val();
		var confirmPasswordSignUp= $('#confirmPasswordSignUp').val();
		var emailSignUp=$("#emailSignUp").val();
		var phoneNumberSignUp= $("#phoneNumberSignUp").val();
		

		$.ajax({
			url: "Xuly/SignUp.php",
			type: "post",
			data: {
				usernameSignUp: usernameSignUp,
				passwordSignUp: passwordSignUp,
				confirmPasswordSignUp: confirmPasswordSignUp,
				emailSignUp: emailSignUp,
				phoneNumberSignUp: phoneNumberSignUp
			},
			success: function(result){
				if (result==1) {
					alert("Đăng ký thành công!");
					$("#formSignUp").modal('hide');
				}							
				if(result==2){
					$('#formSignUp').modal('show');
					$('#error').html("Tên đăng nhập hoặc email đã tồn tại");
					
				}
				if(result==3){

					$("#NoteConfirmPassWord").html("Mật khẩu chưa đúng!");
					$('#formSignUp').modal('show');

				}

			}
		});
	}

	
</script>
