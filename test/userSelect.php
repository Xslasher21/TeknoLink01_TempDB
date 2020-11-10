<?php
	include('connection.php');

	$whereField = $_POST['whereField'];
	$whereCondition = $_POST['whereCondition'];


	$sql = "select * from users where ".$whereField."='".$whereCondition."'";
	$result = mysqli_query($connect,$sql);

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			echo "UserID:".$row['User']."|Password:".$row['Password']."|Name:".$row['Name']."|Year:".$row['Year']."|Address:".$row['Address']."|Contact:".$row['Contact']."|College:".$row['College']."|Course:".$row['Course']."|Year:".$row['Year']."|Department:".$row['Department'];
		}
	}
?>