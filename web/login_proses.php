<?php
$user_id = $_REQUEST['user_id'];
$pass = $_REQUEST['pass'];
$error = 0;
if(empty($user_id) || empty($pass))
{
	echo 'Tidak boleh ada kolom yang kosong.<br><br>';
	$error++;
}
else
{
	$sql = 'select * from user where id="'.$user_id.'"';
	$query = mysqli_query($link,$sql);
	$row = mysqli_fetch_row($query);
	
	if(empty($row[0]))
	{
		echo 'User tidak dikenal.<br>';
		$error++;
	}
	else
	{
		if($row[1] != $pass)
		{
			echo 'Password salah.<br>';
			$error++;
		}
		else
		{
			
			$_SESSION['ID'] = $user_id;
			
		}
	}
}

if($error == 0)
{	
	header('Location:?index=transaksi');	
}
else
{
	echo '<a class="btn btn-primary btn-large" href="?index=login">Kembali</a>';
}
?>