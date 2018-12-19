<div class="container-fluid" id="main">
		<div class="row">
			<?php 
			$page=isset($_GET["page"])?$_GET["page"]:"";
			if($page =='lecturer')
				include "lecturer.php";
			if($page =='student')
				include "student.php";
			if($page =='category')
				include "category.php";
			if($page =='subject')
				include "subject.php";
			if($page =='class')
				include "class.php";
			if($page =='sign_up')
				include "sign_up.php";
			if($page =='NhacCu')
				include "NhacCu.php";
			
			?>
		</div>
	</div>	