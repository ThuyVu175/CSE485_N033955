	
<div class="col-md-12">
	<div class="row">
		<div class="container">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../img/slideShow1.jpg" alt="Los Angeles" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Los Angeles</h3>
							<p>We had such a great time in LA!</p>
						</div>   
					</div>
					<div class="carousel-item">
						<img src="../img/slideShow2.jpg" alt="Chicago" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Chicago</h3>
							<p>Thank you, Chicago!</p>
						</div>   
					</div>
					<div class="carousel-item">
						<img src="../img/slideShow5.jpg" alt="New York" width="1100" height="500">
						<div class="carousel-caption">
							<h3>New York</h3>
							<p>We love the Big Apple!</p>
						</div>   
					</div>
					<div class="carousel-item">
						<img src="../img/slideShow4.jpg" alt="New York" width="1100" height="500">
						<div class="carousel-caption">
							<h3>New York</h3>
							<p>We love the Big Apple!</p>
						</div>   
					</div>
				</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>		
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="aboutUs" class="bg-light row">
				<div class="container ">
					<div class="row ">
						<h3 class=" text-danger text-center mt-2 col-md-12">
							Trung tâm
						</h3> 
					</div>			
					<div class="row mt-4 ">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4 text-right">
									<i class="fa fa-hand-o-right fa-3x icon text-left"></i>
								</div>
								<div class="col-md-4 text-warning text-left aboutUs">

									<p>Yên tâm gửi gắm</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="text-left col-md-6">
									<p>
										Với một lộ trình khoa học, giúp đỡ học viên đi từ căn bản đến nâng cao. Giúp học viên có những ký năng chuyên môn trong các lĩnh vực năng khứu và nghệ thuật...
									</p>
								</div>
							</div>
						</div>										
					</div>
					<div class="row mt-4 ">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4 text-right">
									<i class="fa fa-hand-o-right fa-3x icon"></i>
								</div>
								<div class="col-md-4 text-warning text-left aboutUs">

									<p>Đội ngũ giảng viên</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="text-left col-md-6">
									<p>
										Đội ngũ giảng viên có nhiều năm kinh nghiệm. Đã từng đoạt các giải thưởng trong các lĩnh vực giảng dạy. Giáo viên nhiệt tình, tận tâm...
									</p>
								</div>
							</div>
						</div>										
					</div>	

					<div class="row mt-4 ">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4 text-right">
									<i class="fa fa-hand-o-right fa-3x icon"></i>
								</div>
								<div class="col-md-4 text-warning text-left aboutUs">

									<p>Lộ trình</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="text-left col-md-6">
									<p>
										Với một lộ trình khoa học, giúp đỡ học viên đi từ căn bản đến nâng cao. Giúp học viên có những ký năng chuyên môn trong các lĩnh vực năng khứu và nghệ thuật...
									</p>
								</div>
							</div>
						</div>										
					</div>		
				</div>
			</div>
		</div>
	</div>
	<!--Aoubt Us-->
	<div class="features-boxed row" id="lecturers">
		<div class="container">
			<div class="intro row">
				<br>
				<h3 class="col-md-4 offset-md-4 mt-5 text-center text-danger ">Giảng viên</h3>
			</div>
			<div class="row  justify-content-center  features">
				<div class="row item"> 
					<?php							
							//connect 
					include("cnn.php");
							//query
					mysqli_set_charset($cnn, "utf8");
					$sql="SELECT image,name,description FROM lecturer WHERE isActive=1";
					$result=mysqli_query($cnn, $sql);
							//
					if(!$result){
						die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
						exit();
					}
					while ($row= mysqli_fetch_array($result)) {
						echo '<div class="box col-md-4">';
						echo '<img src="'.$row['image'].'" class="lecturers">';
						echo '<h3 class="name mt-2">'.$row['name'].'</h3>';
						echo '<p class="description">'.$row['description'].'</p>
						<a href="#" class="learn-more">Xem thêm</a>';
						echo "</div>";
								# code...
					}
					?>
				</div>				
			</div>
		</div>
	</div>
	<!--GIẢNG VIÊN-->
	<div id="evaluate" class="bg-light row">
		<div class="container">
			<div class="row">
				<h3 class="text-danger text-center mt-2 col-md-12">Cảm nhận của học viên</h3>
			</div>
			<div class="row mt-4">
				<div class="col-md-6">
					<div class="row ">
						<div class="col-md-4 ">
							<img src="../img/hocvien1.jpg" class="imgEvaluate rounded-circle">
						</div>
						<div class="col-md-8">
							<h5 class="p-2">Nguyễn Trần Anh Thư</h5>
							<p class="pl-2">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.Praesent aliquam in tellus eu.</p>
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-md-4 ">
							<img src="../img/hocvien2.jpg" class="imgEvaluate rounded-circle ">
						</div>
						<div class="col-md-8">
							<h5 class="p-2">Nguyễn Anh Quân</h5>
							<p class="pl-2">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.Praesent aliquam in tellus eu.</p>
						</div>
					</div>						
				</div>

				<div class="col-md-6">
					<div class="row ">
						<div class="col-md-4 ">
							<img src="../img/hocvien3.jpg" class="imgEvaluate rounded-circle">
						</div>
						<div class="col-md-8">
							<h5 class="p-2">Trần Thị Khánh Ly</h5>
							<p class="pl-2">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.Praesent aliquam in tellus eu.</p>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-4 ">
							<img src="../img/hocvien4.jpg" class="imgEvaluate rounded-circle">
						</div>
						<div class="col-md-8">
							<h5 class="p-2">Phạm Mạnh Hiếu</h5>
							<p class="pl-2">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.Praesent aliquam in tellus eu.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!--SLIDESHOW-->

	<!--Cảm nhận-->

