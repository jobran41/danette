
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Danette</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">	
        <link rel="stylesheet" href="css/font-awesome.min.css">	
        <link rel="stylesheet" href="css/style.css">	
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="socialtop"> 
            <div class="lleft"> 
                <a href="#" class="volume">
                    <i class="fa fa-volume-up" aria-hidden="true"></i> 
                </a> 
                <!--<img src="images/jedid.png" class="img-responsive"> -->  
            </div>
            <div class="lright">  
                <ul>
                    <li>
                        <a class="condition " href="">termes et conditions </a>
                    </li>
                    <li> 
                        <a href="https://www.facebook.com/DanetteTn"> 
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/danettetunisieofficiel/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div> 
        <ul id="scene">
            <li class="layer" data-depth="0.00"><img style="margin-left: -120px;" id="wave"  src="images/layer1.png"></li>   
            <li class="layer" data-depth="0.00"><img class="wave " src="images/layer2.png"></li> 
            <li class="layer" data-depth="0.00"><img class="clouds"  src="images/layer.png"></li>  
            <li class="layer" data-depth="0.0"><img class="clouds2" src="images/layer.png"></li> 
            <li class="layer" data-depth="0.00"><img  class="clouds3" src="images/layer.png"></li>    
            <li class="layer" data-depth="0.00"><img class="wave2" src="images/layer4.png"></li> 
            <li class="layer" data-depth="0.00"><img class="wave22"  src="images/layer44.png"></li>
            <li class="layer" data-depth="0.00"><img class="wave2"  src="images/layer444.png"></li>    
        </ul>  
        <section id="first" class="section">
               
                <div class="content"> 
                    
                    <div class="logo text-center">
                        <img src="images/logo.png" class="img-responsive center-block">
                        
                    </div>
                    
                    <div class="marque text-center">
                        <img src="images/chocolat.png" class="img-responsive center-block">
                    </div>
                    <div class="jouer text-center">
                       <a href="#" id="commencer" class="commencer ">Jouer</a> 
                       <a href="#" id="instruction" class="instruction " data-toggle="modal" data-target="#myModal">Instruction</a> 
                    
                    </div> 
                    
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                            <div class="instruction">
                                <div class="instructionheader"> 
                                    <h3>
                                        Instruction 
                                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle-o " aria-hidden="true"></i></button>
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
                                            <p class="styltext margintop"> 
                                               Regardez la vidéo et utilisez les flèches de votre clavier ou bien tournez votre téléphone pour avoir une vue complète. Cherchez les pots de Danette Le Liégeois
                                            </p>
                                            <p class="styltext">
                                               Inscrivez le nombre de pots de Danette Le Liégeois que vous avez vus dans la vidéo
                                            </p>
                                            <p class="styltext">
                                                Validez votre réponse 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>  
        </section>
        <section id="second" class="section"> 
            <div class="content">
                <div class="logo text-center"> 
                    <img src="images/logo.png" class="img-responsive center-block">
                </div>
                <div class="formmarque marque text-center">
                    <img src="images/fontchokolat.png" class="img-responsive center-block">
                    <div class="divform">
                        <div class="form-content">
                            <div class="container"> 
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10 col-md-12"> 
                                        <div class="content-form-white">
                                        <?php if($user == "") : ?>
                                                <div class=" parentinput tailleinput">
                                                    <input type="text" class="form-control tailleform1" id="nom" placeholder="Nom" name="nom" value="">
                                                    <input type="text" name="prenom" class="form-control tailleform2" id="prenom" placeholder="Prenom" >
                                                </div>
                                                <div class="tailleinput"> 
                                                    <input type="text" name="email" class="form-control tailleform3" id="email" placeholder="E-mail" value="" >
                                                </div> 
                                                <div class="parentinput tailleinput"> 
                                                    <input type="text" name="tel" class="form-control tailleform4" id="tel" placeholder="N°tel" >
                                                    <input type="text" name="cin" class="form-control tailleform5" id="cin" placeholder="CIN" >
                                                </div>
                                                <div class=" tailleinput">   
                                                    <p class="acceptregelemet">Accepter les reglement du jeu</p>
                                                    <input type="checkbox"  name="regle" value="0"  class="form-control chreglement" id="regle"  > 
                                                </div>
                                                <input type="hidden" name="user_id"  id="user_id" value="" >
                                                <p class="clear"></p>
                                                <?php else :?>
                                                <h2>Revenez la semaine prochaine pour tenter à nouveau votre chance<br>Vous pouvez consulter la galerie pour voir les recettes réalisées par les autres participants <br> <a href="gallerie.php">Galerie</a></h2>
                                                <?php endif;?>
                                        </div> 
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jouer text-center">  
                   <a  class="commencer" href="#" id="validerformhorsform" class="validerform">Valider</a>   
                </div>
            </div>
        </section> 
        <section id="third" class="section"> 
            <div class="content">
                    <div class="logo text-center">
                        <img src="images/logo.png" class="img-responsive center-block">
                    </div>
                    <div class="videmarque marque text-center">
                        <div class="videolook" style="text-align:center">  
                            <video id="video1" width="600" style="border: 5px solid rgb(250, 243, 231);">  
                              <source src="video/mov_bbb.mp4" type="video/mp4"> 
                              <source src="video/mov_bbb.ogg" type="video/ogg">
                              Your browser does not support HTML5 video.
                            </video>
                            <div class="detaille"> 
                                <h5>Instruction</h5>
                                <div class="cadretext">
                                    <p class="pcadretetx">
                                       Regardez la vidéo et utilisez les flèches de votre clavier ou bien tournez votre téléphone pour avoir une vue complète. Cherchez les pots de Danette Le Liégeois
                                    </p>
                                </div>
                                <a href="#" class="bgbton sttext btnjouerclick " onclick="playPause()">Jouer</a> 
                            </div>
                            <div class="divvideoform"> 
                                <input type="text" name="calcul" class="form-control" id="calcul1" placeholder="" value="" >
                                <a href="#" id="btnvideo1"    class="bgbton sttext">Valider</a> 
                            </div>
                          </div> 
                    </div> 
                    <div class="jouervideo jouer text-center"> 
                       <div class="paginationfixe">
                           
                           <div class="axeelipse">
                               <span class="firstsmallelipse"></span>
                               <hr>
                               <a class="active" href="">
                                   01
                                   <i class="fa fa-check" aria-hidden="true"></i>
                               </a> 
                               <hr>
                               <a href=""> 
                                   02
                                   <i class="fa fa-lock" aria-hidden="true"></i>
                               </a>
                               <hr>
                               <a href="">
                                   03
                                   <i class="fa fa-lock" aria-hidden="true"></i>
                               </a>
                               <hr>
                               <a href="">
                                   04
                                   <i class="fa fa-lock" aria-hidden="true"></i>
                               </a> 
                               <hr>
                               <span class="lastsmallelipse"></span>
                           </div> 
                           
                       </div> 
                    </div>
                </div>
        </section> 
        <section id="fourth" class="section">
            <div class="content">
                    <div class="logo text-center">
                        <img src="images/logo.png" class="img-responsive center-block">
                    </div>
                    <div class="videmarque marque text-center"> 
                        
                        <div class="videolook" style="text-align:center">  
                            <div class="overlay">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    <p>
                                       Bravo, vous avez donné la bonne réponse!
Il ne vous manque plus que x réponses pour faire partie du tirage au sort
La prochaine vidéo sera publiée le xx/xx/2017, restez connecté ;)
                                    </p>
                                </div> 
                            <video id="video2" width="600" style="border: 5px solid rgb(250, 243, 231);">   
                              <source src="video/mov_bbb.mp4" type="video/mp4"> 
                              <source src="video/mov_bbb.ogg" type="video/ogg">
                              Your browser does not support HTML5 video.
                            </video> 
                            <!--<div class="detaille"> 
                                <h5>fourth</h5> 
                                <div class="cadretext">
                                    <p class="pcadretetx">
                                        Lorem ipsum dolor sit amet, ad magna molestie vis. Ad duis libris reformidans est, ei impedit partiendo salutandi sea, mei ad ludus offendit. Ne eos eros oporteat, et vidit dicat pro
                                    </p>
                                </div>
                                <a href="#" class="bgbton sttext btnjouerclick" onclick="playPause2()">Jouer</a>
                            </div>-->
                            <div class="divvideoform"> 
                                <input disabled type="text" name="calcul" class="form-control " id="calcul2" placeholder="" value="" >
                                <a href="#" id="btnvideo2" class="bgbton sttext">Valider</a>  
                            </div>
                          </div> 
                    </div> 
                    <div class="jouervideo jouer text-center"> 
                       <div class="paginationfixe">
                           
                           <div class="axeelipse">
                               <span class="firstsmallelipse"></span>
                               <hr>
                               <a class="" href="">
                                   01
                                   <i class="  fa fa-check" aria-hidden="true"></i>
                               </a> 
                               <hr>
                               <a href="active"> 
                                   02
                               </a>
                               <hr>
                               <a href="">
                                   03
                                   <i class="fa fa-lock" aria-hidden="true"></i>
                               </a>
                               <hr>
                               <a href="">
                                   04
                                   <i class="fa fa-lock" aria-hidden="true"></i>
                               </a> 
                               <hr>
                               <span class="lastsmallelipse"></span>
                           </div> 
                           
                       </div> 
                    </div>
                </div>
        </section> 
        <section id="five" class="section">
            <div class="content">
                    <div class="logo text-center">
                        <img src="images/logo.png" class="img-responsive center-block">
                    </div>
                    <div class="videmarque marque text-center">
                        <div class="videolook" style="text-align:center">  
                            <video id="video1" width="600" style="border: 5px solid rgb(250, 243, 231);">  
                              <source src="video/mov_bbb.mp4" type="video/mp4"> 
                              <source src="video/mov_bbb.ogg" type="video/ogg">
                              Your browser does not support HTML5 video.
                            </video>
                            <div class="detaille"> 
                                <h5>five</h5>
                                <div class="cadretext">
                                    <p class="pcadretetx">
                                        Lorem ipsum dolor sit amet, ad magna molestie vis. Ad duis libris reformidans est, ei impedit partiendo salutandi sea, mei ad ludus offendit. Ne eos eros oporteat, et vidit dicat pro
                                    </p>
                                </div>
                                <a href="#" class="bgbton sttext btnjouerclick" onclick="playPause()">Jouer</a>
                            </div>
                            <div class="divvideoform"> 
                                <input type="text" name="calcul3" class="form-control" id="calcul3" placeholder="" value="" > 
                                <a href="#" id="btnvideo3" class="bgbton sttext">Valider</a> 
                            </div>
                          </div> 
                        <button onclick="Alert.render('You look very pretty today.')">Custom Alert</button>
                        
                    </div> 
                    <div class="jouervideo jouer text-center"> 
                       <div class="paginationfixe">
                           <div class="axeelipse">
                               <span class="firstsmallelipse"></span>
                               <hr>
                               <a class="active" href="">01</a> 
                               <hr>
                               <a href="">02</a>
                               <hr>
                               <a href="">03</a>
                               <hr>
                               <a href="">04</a> 
                               <hr>
                               <span class="lastsmallelipse"></span>
                           </div> 
                       </div> 
                    </div>
                </div>
        </section> 
        <section id="sixe" class="section">
            <div class="content">
                    <div class="logo text-center">
                        <img src="images/logo.png" class="img-responsive center-block">
                    </div>
                    <div class="videmarque marque text-center">
                        <div class="videolook" style="text-align:center">  
                            <video id="video1" width="600" style="border: 5px solid rgb(250, 243, 231);">  
                              <source src="video/mov_bbb.mp4" type="video/mp4"> 
                              <source src="video/mov_bbb.ogg" type="video/ogg">
                              Your browser does not support HTML5 video.
                            </video>
                            <div class="detaille"> 
                                <h5>sixe</h5>
                                <div class="cadretext">
                                    <p class="pcadretetx">
                                        Lorem ipsum dolor sit amet, ad magna molestie vis. Ad duis libris reformidans est, ei impedit partiendo salutandi sea, mei ad ludus offendit. Ne eos eros oporteat, et vidit dicat pro
                                    </p>
                                </div>
                                <a href="#" class="bgbton sttext btnjouerclick" onclick="playPause()">Jouer</a>
                            </div>
                            <div class="divvideoform"> 
                                <input type="text" name="calcul4" class="form-control" id="calcul4" placeholder="" value="" >
                                <a href="#" id="btnvideo4" class="bgbton sttext">Valider</a> 
                            </div>
                          </div> 
                    </div> 
                    <div class="jouervideo jouer text-center"> 
                       <div class="paginationfixe">
                           
                           <div class="axeelipse">
                               <span class="firstsmallelipse"></span>
                               <hr>
                               <a class="active" href="">01</a> 
                               <hr>
                               <a href="">02</a>
                               <hr>
                               <a href="">03</a>
                               <hr>
                               <a href="">04</a> 
                               <hr>
                               <span class="lastsmallelipse"></span>
                           </div> 
                           
                       </div> 
                    </div>
                </div>
        </section> 
        <div class="socialbottom">
            <div class="leftlbcopyright demo-text" id="demo-text">Copyright © danette 2017</div> 
            <div class="rightlogodanon">
                <img width="150" src="images/logodelice.png" class="img-responsive center-block"> 
            </div>
        </div>
        <div id="dialogoverlay"></div>
        <div id="dialogbox" class="alert alert-danger">   
          <div>
            <div id="dialogboxhead"></div>
            <div id="dialogboxbody"></div>
            <div id="dialogboxfoot"></div>
          </div>
        </div>
        <script language="JavaScript" src="js/jquery-1.12.3.min.js"></script>
        <script language="JavaScript" src="js/bootstrap.min.js"></script> 
        <script language="JavaScript" src="js/uikit.min.js"></script>  
        <script language="JavaScript" src="js/fb.js"></script> 
        <script language="JavaScript" src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script language="JavaScript" src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js"></script> 
        <script language="JavaScript" src="js/parallax.js"></script> 
        <script language="JavaScript" src="js/script.js"></script> 
    </body> 
</html>