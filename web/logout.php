<?php
if( isset($_SESSION['ID']))
{
	
	$_SESSION = array();
	session_destroy();
	
	echo 'Anda telah logout.<br>';
	echo 'Mau <a href="?index=login">login</a> lagi??';
}
else
{
	echo 'Anda belum <a href="index=login">login</a>';
}
?>