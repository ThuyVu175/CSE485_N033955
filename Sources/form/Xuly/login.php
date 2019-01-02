<?php  
include('cnn.php');
session_start();
$username= isset($_POST['username']) ? $_POST['username']:"";
$password= isset($_POST['password']) ? $_POST['password']: "";

$sql="SELECT * FROM account WHERE isActive=1 AND accountName='$username' AND passWord='$password'";

$result= mysqli_query($con, $sql);
$row= mysqli_fetch_array($result);

if(mysqli_num_rows($result)!=0 &&$row['positionID']==2){
	$_SESSION["user"] = $_POST["username"];
		header("location: ../Index.php");
}
elseif (mysqli_num_rows($result)!=0 &&$row['positionID']==1) {
	$_SESSION["user"] = $_POST["username"];
		header("location: ../../form_admin/admin.php");
}
else {
	echo 0;
	# code...
}
	