<?php
	if(isset($_SESSION['ID'])){
		header("Location:?index=transaksi");
	}
?>
<form role="form" action="?index=login_proses" method="POST">
	<div class="form-group">		
		<label for="user_id" >Username</label>
		<input type="text" name="user_id" id="user_id" class="form-control" />
	</div>
	<div class="form-group">
		<label for="pass" >Password</label>
		<input type="password" name="pass" id="pass" class="form-control"/>   	          	      
	</div>
	<div class="form-group">	
		<input type="submit" name="btnLogin" class="btn btn-default" value="Log in">
	</div>	
</form>