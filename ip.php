<?php
	$mysqli = new mysqli('localhost', 'root', 'root', 'sensor');
	if($mysqli->connect_errno) {
		echo '[MySQL 연결 오류]';
	} else {
		echo '[MySQL 연결 성공]';
	}
	mysqli_close($mysqli);
?>