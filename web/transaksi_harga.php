<?php
	$sql = 'SELECT `total` FROM `transaksi` WHERE `nomor` = "'.$_GET['nomor'].'" AND `status` = 1 AND `total` != 0 ORDER BY `noo` DESC';
	$query = mysqli_query($link,$sql);
	$row = mysqli_fetch_row($query);
	if (empty($row[0]))
  	{
		?>	  
	   	Sudah di konfirmasi oleh kasir <br>
	  	Menunggu Total harga  
 		<META HTTP-EQUIV="refresh" CONTENT="5">
	    <?php	  
  }else 
  {
	  $nomor = $_GET['nomor'];
	  echo 'Total Harga : '.$row[0].'<br><br><a class="btn btn-primary btn-large" href="?index=bayar&nomor='. $nomor.'"> Bayar Dengan Saldo</a> <br><br>  <a class="btn btn-primary btn-large" href="?index=riwayat">Bayar Cash</a>';
  }
  
?>