<?php 
include('Xuly/cnn.php');
$Name= isset($_POST['Name']) ? $_POST['Name']:"";
$phoneNumber= isset($_POST['phoneNumber']) ? $_POST['phoneNumber']: "";
$email= isset($_POST['email']) ? $_POST['email']: "";
$subjectID= isset($_POST['subjectID']) ? $_POST['subjectID']: "";

$insert= "INSERT INTO sign_up(name, phoneNumber, subjectID, status, createDate, isActive) VALUES('$Name','$phoneNumber','$subjectID','Chưa tư vấn',NOW(),1)" ;

 

if(mysqli_query($con, $insert)){

	echo 1;
}
else{
	# code...
	echo 0;
}
