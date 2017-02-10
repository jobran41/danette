<?php 
session_start();
$estimated = mktime(22,59,30,7,3,2018);  
$current =mktime();
if($estimated - $current < 0){
	echo 'restricted aceess';exit;
}
	if(!isset($_SESSION['user_id'])){
		header('Location: index.php');    
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jadida</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">	
	<link rel="stylesheet" href="css/font-awesome.min.css">	
	<link rel="stylesheet" href="css/style.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="background-game partage form">
			<div class="content hidden-xs bgmenured">
				<div class="container menu">
                                    <a  class="alogo" href="index.php">
                                        <img src="images/bena/logo22.png" alt="" class=" img-responsive ">
                                    </a>
					<ul class="stylemenu">
						<li><a href="index.php">Accueil</a></li>
						<li><a href="game.php" class="active">Jeu</a></li>
						<li><a href="gallerie.php">Galerie</a></li>
						<li><a href="reglement.pdf">Règlement</a></li>
					</ul>
				</div>
			</div> 
			<div class="form-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-1 col-lg-10">
							<div class="content-form-white">
								<h2>Merci pour votre participation</h2>
								<section class="button-partage">
									<a href="gallerie.php" class="voir">Visualisez votre photo</a>
									<a href="#" class="partager" id="partager" data-nom="<?php echo $_SESSION['name'];?>" data-url="files/<?php echo $_SESSION['url'];?>">Partagez votre photo sur Facebook</a>
									<a href="#" class="inviter" id="inviter">Invitez vos amis</a>
								</section>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="container-fluid">
					<ul id="social">
						<li class="facebook"><a href="https://www.facebook.com/jadida.medoil/?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuMobile" >
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<div class="visible-xs">
				<div id="menuMobile" class="collapse navbar-collapse">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="game.php" class="active">Jeu</a></li>
						<li><a href="gallerie.php">Galerie</a></li>
						<li><a href="reglement.pdf">Règlement</a></li>
					</ul>
				</div>
			</div>
		</div>


		<script language="JavaScript" src="js/jquery-1.12.3.min.js"></script>
		<script language="JavaScript" src="js/bootstrap.min.js"></script>
		<script language="JavaScript" src="js/uikit.min.js"></script>
		<script language="JavaScript" src="js/lightbox.min.js"></script>
		<script language="JavaScript" src="js/jquery.share.js"></script>
		<script language="JavaScript" src="js/fb.js"></script>
		<script language="JavaScript" src="js/jquery.validate.js"></script>
		<script language="JavaScript" src="js/script.js"></script>
	</body>
</html>