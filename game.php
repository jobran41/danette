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
	require_once 'database.php';
	$sql = "select id from bin_users where user_id = '".$_SESSION['user_id']."'";
	$query = $pdo->query($sql);
	//$res  = $query->fetch();
	$user = '';
	while($post = $query->fetch()){
		$user =$post;
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
		<div class="background-game form">
			
			<div class="form-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-1 col-lg-10 col-md-offset-0 col-md-12">
							<div class="content-form-white">
                                                            <img src="images/bena/bena.png" alt="" class="center-block img-responsive imgbena">
								<p class="clear" ></p>
							<?php if($user == "") : ?>
							<form action="ajax.php" method="POST" enctype="multipart/form-data" id="form-game">
								<!--<h2>Pour participer<br> merci de remplir ce formulaire</h2>-->
								<section class="left-section">
									<div class="form-group">
									    <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name'];?>">
									</div>
									<div class="form-group">
									    <input type="text" name="cin" class="form-control" id="cin" placeholder="CIN" >
									</div>
								</section>
								<section class="right-section">
								        <div class="form-group">
									    <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>" >
									</div>
									<div class="form-group">
									    <input type="text" name="tel" class="form-control" id="tel" placeholder="N°tel" >
									</div>
								</section>
								<section class="bottom-section-left">
									<!--<div class="form-group">
										<div class="file">
											<input type="file" id="myphoto" name="myphoto">
										</div>	
                                                                             <img src="" alt="" id="imgInp" class=" img-responsive imgupload" width="">
									</div>
                                                                        <div class="form-group text-file">
                                                                               Téléchargez 
                                                                            </div>-->
                                                                        <div class="form-group"> 
									    <input type="checkbox" name="regle" value="0"  class="form-control" id="regle"  > 
									</div>
                                                                        
								</section>
								
								<section class="gp-button">
									<button class="annuler">Annuler</button>
									<button type="submit" class="valider">Valider</button>
								</section>
								<input type="hidden" name="ajax" value="envoie">
								<input type="hidden" name="user_id" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['user_id'];?>">
                                                                <input type="hidden" name="niveau" value="0" id="niveau"> 
							</form>
								<?php else :?>
                                                                <h2>Revenez la semaine prochaine pour tenter à nouveau votre chance<br>Vous pouvez consulter la galerie pour voir les recettes réalisées par les autres participants <br> <a href="gallerie.php">Galerie</a></h2>
								<?php endif;?>
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
		<script language="JavaScript" src="js/jquery.share.js"></script>
		<script language="JavaScript" src="js/uikit.min.js"></script>
		<script language="JavaScript" src="js/lightbox.min.js"></script>
		<script language="JavaScript" src="js/fb.js"></script>
		<script language="JavaScript" src="js/jquery.validate.js"></script>
		<script language="JavaScript" src="js/script.js"></script>
	</body>
</html>