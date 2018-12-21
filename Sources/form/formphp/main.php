<div class="container-fluid" id="main">
		<div class="row">
			<?php 
			$page=isset($_GET["page"])?$_GET["page"]:"";
			if($page =='GioiThieu')
				include "Infomation.php";
			if($page =='MyThuat')
				include "MyThuat.php";
			if($page =='Nhay')
				include "Nhay.php";
			if($page =='Mua')
				include "Mua.php";
			if($page =='LuyenThanh')
				include "LuyenThanh.php";
			if($page =='NhacCu')
				include "NhacCu.php";
			if($page =='GiangVien')
				include "lecturers.php";
			if($page =='LienHe')
				include "LienHe.php";
			
			?>
		</div>
	</div>	