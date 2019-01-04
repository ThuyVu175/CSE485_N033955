<?php 
include('formphp/head.php');
include('formphp/menu.php');
?>

<?php 
$username=$_GET['username'];
include('Xuly/cnn.php');
$sql="SELECT * FROM account WHERE isActive=1 AND accountName='$username'";
$result=mysqli_query($con, $sql);

 while ($row= mysqli_fetch_array($result)) {?>
<div class="container p3" style="padding: 70px;">
	<div class="row font-weight-bold">
		<h2>THÔNG TIN TÀI KHOẢN</h2>
	</div>
	<div class="row font-weight-bold mt-3">	
		<div class="col-md-3	">
			<h4>Tên tài khoản</h4>
		</div>
		<div class="col-md-6">  
			<h4 class="text-danger"><?php echo $row['accountName']; ?></h4>
		</div>
	</div>
	<div class="row font-weight-bold mt-3">
		<div class="col-md-3	">
			<h4>Email:</h4>
		</div>
		<div class="col-md-6">  
			<h4 class="text-danger"><?php echo $row['email']; ?></h4> <br>
			
		</div>
	</div>
	<div class="row font-weight-bold mt-3">
		<div class="col-md-3">
			<h4>Điện thoại:</h4>
		</div>
		<div class="col-md-6">  
			 <h4 class="text-danger"><?php echo $row['phoneNumber']; ?></h4>
		</div>
	</div>	
	<div class="row font-weight-bold mt-5">
		<button class="btn btn-info ml-5"> 
			<i class="fa fa-edit"></i>
			Update
		</button>
	</div>	
</div>

<?php } ?>

<?php 
include('formphp/footer.php');

?>