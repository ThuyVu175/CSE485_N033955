<?php 
	if (isset($_GET["page"])) {
				# code...
				$tam=$_GET["page"];
			}
			else {
				$tam='';
				# code...
			}
			if ($tam=='GiangVien') {
				include('detailLecturer.php');
				# code...
			}
 ?>