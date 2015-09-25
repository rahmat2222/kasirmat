<?php
	$id = $_SESSION['ID'];
	$sql = 'SELECT `poin` FROM `user` WHERE `id` = "'.$id.'"';
	$query = mysqli_query($link, $sql);
	$row = mysqli_fetch_row($query);
	echo "Poin anda adalah ".$row[0];
?>