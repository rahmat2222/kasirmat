<?php
	$nomor = $_GET['nomor'];
	if(!empty($nomor))
	{
		$sql = 'SELECT * FROM `transaksi` WHERE `status` = 0 and `id` = "" AND `nomor` = "'.$nomor.'" ORDER BY `noo` DESC';
		$query = mysqli_query($link,$sql);
		$row = mysqli_fetch_row($query);
		
		if(empty($row[0]))
		{
			header('Location:transaksi.php');
		}
		else
		{
			$sql = 'UPDATE `kasir`.`transaksi` SET `id` = "'.$_SESSION['ID'].'" WHERE `transaksi`.`nomor` = "'.$nomor.'"  AND `status` = 0 ORDER BY `noo` DESC';
			$query = mysqli_query($link,$sql);
			header('Location:?index=transaksi_menunggu&nomor='.$nomor);
		}
	}
?>