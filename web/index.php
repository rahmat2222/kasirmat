<?php
	session_start();
	include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kasirmat</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">
    </head>	
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-1">
                	<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?index=login">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="menu-1">
            	<ul class="nav navbar-nav">
                	<li><a href="?index=riwayat">Riwayat</a></li>
                    <li><a href="?index=saldo">Saldo</a></li>
                    <li><a href="?index=Poin">Poin</a></li>
                    <?php		
						if (isset($_SESSION['ID']) && ($_GET['index'] != "logout")) {
							echo "<li><a href='?index=logout'>Logout</a></li>";
						}					
					?>
                </ul>
            </div>
        </nav>
    </nav>
	
    <div class="container">
    	<div class="row">
        	<div class="col-md-12">
				<?php
					if (isset($_GET['index'])) {
						include($_GET['index'].".php");
					}else {
						header("Location:?index=login");
							
					}
				
				?>
            </div>
        </div>
		<footer>
			<div class="row">
				<div class="col-md-12">
					Copyright &copy; Rahmat Burhanudin 2015
				</div>
			</div>
		</footer>
    </div>


	<script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>