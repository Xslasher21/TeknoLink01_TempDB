<?php
	include('connection.php');

	$whereField = $_POST['whereField'];
	$whereCondition = $_POST['whereCondition'];
/*
	$whereField = 'User';
	$whereCondition = '11-1111-111';
*/
	$sql = "select Picture from users where ".$whereField."='".$whereCondition."'";
	$result = mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			echo "".base64_encode($row['Picture']);
		}
	}
	else{
		echo 'false';
	}

?>