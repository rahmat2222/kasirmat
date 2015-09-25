<?php
	$id = $_SESSION['ID'];
	$sql = 'SELECT `saldo` FROM `user` WHERE `id` = "'.$id.'"';
	$query = mysqli_query($link, $sql);
	$row = mysqli_fetch_row($query);
	echo "Saldo anda adalah Rp ".$row[0];
?>