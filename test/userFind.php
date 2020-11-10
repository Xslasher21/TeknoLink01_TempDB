<?php
	include('connection.php');

	$whereField = $_POST['whereField'];
	$whereCondition = $_POST['whereCondition'];
	$whereField1 = $_POST['whereField1'];
	$whereCondition1 = $_POST['whereCondition1'];
/*
	$whereField = 'User';
	$whereCondition = '11-1111-111';
	$whereField1 = 'Password';
	$whereCondition1 = 'testdata';
*/

	$sql = "select User,Password from users where ".$whereField."='".$whereCondition."' and ".$whereField."='".$whereCondition."'";
	$result = mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)>0){
		echo 'true';
	}
	else{
		echo 'false';
	}

?>