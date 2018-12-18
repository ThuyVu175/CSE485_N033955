<?php 
include('cnn.php');
$usernameSignUp= isset($_POST['usernameSignUp']) ? $_POST['usernameSignUp']:"";
$passwordSignUp= isset($_POST['passwordSignUp']) ? $_POST['passwordSignUp']: "";
$confirmPasswordSignUp= isset($_POST['confirmPasswordSignUp']) ? $_POST['confirmPasswordSignUp']: "";
$emailSignUp= isset($_POST['emailSignUp']) ? $_POST['emailSignUp']: "";
$phoneNumberSignUp= isset($_POST['phoneNumberSignUp']) ? $_POST['phoneNumberSignUp']: "";

$bumPass= md5($passwordSignUp);

$Select= "SELECT * FROM account WHERE isActive=1 AND accountName='$usernameSignUp' AND email='$emailSignUp'";

$Add="INSERT INTO account(accountName, passWord,positionID, createDate, isActive, email, phoneNumber) VALUES('$usernameSignUp', '$bumPass',2,NOW(),1,'$emailSignUp','$phoneNumberSignUp')";

$check= mysqli_query($cnn, $Select);


if(mysqli_num_rows($check)==0 && $passwordSignUp== $confirmPasswordSignUp){
	mysqli_query($cnn, $Add);
	echo 1;
}
else{
	# code...
	echo 2;
}
if ($passwordSignUp!= $confirmPasswordSignUp) {
	# code...
	echo 3;
}

?>