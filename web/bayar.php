<?php
$nomor = $_GET['nomor'];
$id = $_SESSION['ID'];
include('db.php');
if(empty($nomor))
{
	header("Location:?index=transaksi");
}
else
{
		$sql = 'SELECT `saldo`, `poin` FROM `user` WHERE `id` = "'.$id.'"';
		$query = mysqli_query($link,$sql);
		$row = mysqli_fetch_row($query);
		$saldo = $row[0];
		$poin = $row[1];
		
		
		$sql = 'SELECT `total` FROM `transaksi` WHERE `nomor` ="'.$nomor.'" AND `status` = 1 ORDER BY `noo` DESC';
		$query = mysqli_query($link,$sql);
		$row = mysqli_fetch_row($query);
		$total = $row[0];
		
		$poin = $poin + $total/100;
		
		$saldo = $saldo - $total;		
		
		$sql = 'UPDATE `'.$nama_db.'`.`user` SET `poin` = "'.$poin.'" WHERE `user`.`id` = "'.$id.'"';
		$query = mysqli_query($link,$sql);
		
		$sql = 'UPDATE `'.$nama_db.'`.`user` SET `saldo` = "'.$saldo.'" WHERE `user`.`id` = "'.$id.'"';
		$query = mysqli_query($link,$sql);
		
		$sql = 'UPDATE `'.$nama_db.'`.`transaksi` SET `status` = 2 WHERE `transaksi`.`nomor` = "'.$nomor.'"  AND `status` = 1 ORDER BY `noo` DESC';
		$query = mysqli_query($link,$sql);
				
		echo "Transaksi Berhasil, sisal saldo : ". $saldo;
		?>
	<meta http-equiv="refresh" content="3;?index=riwayat">
	
	<?php
}
?>