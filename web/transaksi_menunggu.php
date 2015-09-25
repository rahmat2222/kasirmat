<?php
	$sql = 'SELECT * FROM `transaksi` WHERE `nomor` = "'.$_GET['nomor'].'" AND `status` = 1 ORDER BY `noo` DESC' ;
	$query = mysqli_query($link,$sql);
	$row = mysqli_fetch_row($query);
	if (empty($row[0]))
	{
	  	?>	  
	  	Menunggu Konfirmasi dari kasir....	
        
		<META HTTP-EQUIV="refresh" CONTENT="5">	  
	  	<?php	  
	}else 
	{	  
	header('Location:?index=transaksi_harga&nomor='.$_GET['nomor']);
	}	
?>
