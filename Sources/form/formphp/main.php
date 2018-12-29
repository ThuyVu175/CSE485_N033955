<div class="container-fluid" id="main">
		<div class="row">
			<?php 
			$page = isset($_GET["page"])?$_GET["page"]:"" ;
			
			if($page =='')
				include "Menu/Infomation.php";
			if($page =='GioiThieu')
				include "Menu/Infomation.php";
			if($page =='MyThuat')
				include "Menu/MyThuat.php";
			if($page =='Nhay')
				include "Menu/Nhay.php";
			if($page =='Mua')
				include "Menu/Mua.php";
			if($page =='LuyenThanh')
				include "Menu/LuyenThanh.php";
			if($page =='NhacCu')
				include "Menu/NhacCu.php";	
			if($page =='GiangVien')
				include "Menu/lecturers.php";
			if($page =='LienHe')
				include "Menu/LienHe.php";
			if($page =='User')
				include "User.php";

			
			?>
		</div>
	</div>	