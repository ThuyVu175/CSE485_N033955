
	<?php 
		include("head.php");
		include("menu.php");
		include("main.php");
		include("footer.php");
	 ?>
	
						
	


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
