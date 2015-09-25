<?php
if (!isset($_SESSION['ID'])) {	
	header('location:index.php');
}
$id = $_SESSION['ID'];

$sql = 'SELECT `noo`,`hasil` FROM `transaksi` WHERE `id` = "'.$id.'" ORDER BY `noo` DESC' ;
$query = mysqli_query($link,$sql);		  
while ($row = mysqli_fetch_array($query)) {
  
  echo "Nomor Transaksi : " .$row[0] . "<br>" . $row[1]. "<br><br>";
  

}

?>
		  