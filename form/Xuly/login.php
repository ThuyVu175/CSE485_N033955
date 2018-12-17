<?php  
include('cnn.php');
session_start();
$username= isset($_POST['username']) ? $_POST['username']:"";
$password= isset($_POST['password']) ? $_POST['password']: "";

$sql="SELECT * FROM account WHERE isActive=1 AND accountName='$username' AND passWord='$password'";
$result= mysqli_query($cnn, $sql);

if(mysqli_num_rows($result)!=0){
	echo 1;
}
else{
	echo 0;
}

?>