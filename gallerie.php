<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require_once 'database.php';

	$sql = "select * from bin_users";
        //print_r($sql); 
	$images = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jadida</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">	
	<link rel="stylesheet" href="css/uikit.min.css">	
	<link rel="stylesheet" href="css/font-awesome.min.css">	
	<link rel="stylesheet" href="css/style.css">	 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="background-game gallerie-page form scrol">
			
			<div class="gallerie">
				<div class="container" id="content-press">
                                    
                                    <p class="clear" ></p>
					<ul class="gallerie-content row1" id="gallerie-content">
						<?php while($image = $images->fetch()):?>
						<?php 
                                                    //print_r($image);
							/*$req = "select count(*) as num from bin_image_vote where id_image = ".$image['id'];
							$res = $pdo->query($req);
							$f = $res->fetch();
  							$nb = $f['num'];*/
						
                                        
                                            ?>
						<?php endwhile; ?> 
                                            
                                                   
                                                <li>
                                                    <div class="videolook" style="text-align:center">  
                                                            <button onclick="playPause()">Play/Pause</button> 
                                                            <br><br>
                                                            <video id="video1" width="420"> 
                                                              <source src="video/mov_bbb.mp4" type="video/mp4"> 
                                                              <source src="video/mov_bbb.ogg" type="video/ogg">
                                                              Your browser does not support HTML5 video.
                                                            </video>
                                                          </div> 
                                                         
                                                </li>
                                               
                                                 <li>
                                                    <div class="videolook" style="text-align:center">  
                                                        <button onclick="playPause2()">Play/Pause</button>  
                                                        <br><br>
                                                        <video id="video2" width="420">  
                                                          <source src="video/mov_bbb.mp4" type="video/mp4"> 
                                                          <source src="video/mov_bbb.ogg" type="video/ogg">
                                                          Your browser does not support HTML5 video.
                                                        </video>
                                                      </div>
                                                         
                                                </li>
                                                <li>
                                                    <div class="videolook" style="text-align:center">  
                                                            <button onclick="playPause3()">Play/Pause</button>  
                                                            <br><br>
                                                            <video id="video3" width="420">  
                                                              <source src="video/mov_bbb.mp4" type="video/mp4"> 
                                                              <source src="video/mov_bbb.ogg" type="video/ogg">
                                                              Your browser does not support HTML5 video.
                                                            </video>
                                                          </div>
                                                         
                                                </li>
                                                <li> 
                                                    <div class="videolook" style="text-align:center">  
                                                            <button onclick="playPause4()">Play/Pause</button>  
                                                            <br><br>
                                                            <video id="video4" width="420">  
                                                              <source src="video/mov_bbb.mp4" type="video/mp4"> 
                                                              <source src="video/mov_bbb.ogg" type="video/ogg">
                                                              Your browser does not support HTML5 video.
                                                            </video>
                                                          </div>
                                                         
                                                </li>
                                                
                                                
                                                
                                                
					</ul>
					<div id="page_navigation"></div> 
					<input type="hidden" id="current_page" value="">
					<input type="hidden" id="show_per_page" value="6" > 
				</div>
                            <a type="button" class="" data-toggle="modal" data-target="#myModal">Open Modal</a> 
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="">
                                        <div class="instruction">
                                            <div class="instructionheader"> 
                                                <h3>
                                                    Instruction
                                                    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                                </h3>
                                            </div> 
                                            <div class="instructiontext">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="insvideo">
                                                            <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="insinputvideo">   
                                                            Ecrivez votre réponse ici
                                                        </div>
                                                        <div class="insbtn">
                                                            Valider
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p class="styltext">
                                                            Lorem ipsum dolor sit amet, ad magna molestie vis. Ad duis libris reformidans est, ei impedit partiendo salutandi sea, mei ad ludus offendit. Ne eos eros oporteat, et vidit dicat pro midans est, ei impedit partiendo salutandi sea, mei ad ludus offendit.
                                                        </p>
                                                        <p class="styltext">
                                                            Lorem ipsum dolor sit amet, ad magna molestie vis. Ad duis libris reformidans est, ei impedit partiendo salutandi sea, mei ad ludus offendit. Ne eos eros oporteat, et vidit dicat pro midans est, ei impedit partiendo salutandi sea, mei ad ludus offendit.
                                                        </p>
                                                        <p class="styltext">
                                                            Lorem ipsum dolor sit amet, ad magna molestie vis. Ad duis libris reformidans est, ei impedit partiendo salutandi sea, mei ad ludus offendit. Ne eos eros oporteat, et vidit dicat pro midans est, ei impedit partiendo salutandi sea, mei ad ludus offendit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            
                                <div id="dialogoverlay"></div> 
                                <div id="dialogbox">
                                  <div>
                                    <div id="dialogboxhead"></div>
                                    <div id="dialogboxbody"></div>
                                    <div id="dialogboxfoot"></div>
                                  </div>
                                </div>
                                <h1>My web document content ...</h1>
                                <h2>My web document content ...</h2> 
                                <button onclick="alert('You look very pretty today.')">Default Alert</button>
                                <button onclick="Alert.render('You look very pretty today.')">Custom Alert</button>
                                <button onclick="Alert.render('And you also smell very nice.')">Custom Alert 2</button>
                                <h3>My web document content ...</h3>
                            </div>
                            <div class="head-button" id="start-anim">Start animation</div>
                            <div id="demo-text">Hello, I am div element.</div> 
			
		<script language="JavaScript" src="js/jquery-1.12.3.min.js"></script>
		<script language="JavaScript" src="js/bootstrap.min.js"></script>
		<script language="JavaScript" src="js/uikit.min.js"></script>
		<script language="JavaScript" src="js/lightbox.min.js"></script>
		<script language="JavaScript" src="js/jquery.share.js"></script>
		<script language="JavaScript" src="js/fb.js"></script>	
		<script language="JavaScript" src="js/jquery.validate.js"></script>	
		<script language="JavaScript" src="js/script.js"></script>
		<script language="JavaScript" src="js/pagination.js"></script>

		
	</body>
</html>