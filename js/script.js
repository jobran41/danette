$(document).ready(function(){
    
	
   	$('#commencer').click(function(e){
   		e.preventDefault();
   		fb_login();  
   	});

   	$('#partager').click(function(e){
                e.preventDefault();
                var nom = $(this).data('nom');
                var url = $(this).data('url');
                partageGallerie(nom, url);
            });
   	
   	$('#inviter').click(function(e){
   		e.preventDefault();
   		inviteFriends();
   	});

   	$('.jaime-button').click(function(e){
   		e.preventDefault();
   		var id_image = $(this).data('idimage');
   		addVoteFb(id_image, jQuery(this));
   	});

   	UIkit.on('showitem.uk.lightbox', function (event, data) {
   		console.log(data);
   		var nb = $(data.item.link.context).data('nbimage');
   		var idimage = $(data.item.link.context).data('idimage');
   		var foulen = $(data.item.link.context).data('nom');
   		var url = data.source;
   		$('#jaime').attr('data-idimage',idimage);
   		$('#jaime span').html(nb);
   		$('#foulen').html(foulen);
   		$('.partager-fb').attr('data-nom',foulen);
   		$('.partager-fb').attr('data-url',url);
   	});
        
        $("#myphoto").change(function(){
            readURL(this);
        });

        $('#validerformhorsform').click(function(e){
            e.preventDefault(); 
            if($('#nom').val() == "") {
             alert('Vous devez saisir votre nom');
             return false;
         }
         if($('#prenom').val() == "") {
             alert('Vous devez saisir votre prénom');
             return false;
         }
         if($('#age').val() == "") { 
             alert('Vous devez saisir votre age');
             return false;
         }
         if($('#email').val() == "") {
             alert('Vous devez saisir votre email');
             return false;
         }
         if($('#tel').val() == "") {
             //alert('Vous devez saisir votre numéro de telephone ');
             Alert.render('Vous devez saisir votre numéro de telephone '); 
             return false;
         }
         if($('#cin').val() == "") {
             //alert('cin');
             Alert.render('Vous devez saisir votre cin ');
             return false;
         }
         if(!$('#regle').is(':checked')){  
                Alert.render('il faut cocher le reglement');  
                //alert('il faut cocher le reglement');
                return false;
            }
            
            
            $.ajax({
              url: 'ajax.php',
              type: 'post',
              data: {
                ajax : "setToken", 
                nom : $('#nom').val(),
                prenom : $('#prenom').val(),               
                email : $('#email').val() ,
                tel : $('#tel').val(),
                cin : $('#cin').val(),
                user_id:$('#user_id').val() 
              },
              success: function (data) { 
                //console.log('it work sucée'); 
                if(data == 'true'){
                 $("#second").animate({
                    left: '-=100%',
                },700 ,function(){

                });
                $("#third").animate({
                    left: '-=100%',
                },700 ,function(){

                });
                }else if(data == 'error'){
                    //alert('erreur inconnue merci de contacter');
                    Alert.render('erreur inconnue merci de contacter');
                }else if(data == 'cinexiste'){
                    //alert('cin existe déja');
                    Alert.render('cin existe déja'); 
                }
                else{
                    
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                    console.log(thrownError);
                }
              });
        });
        $('.btnjouerclick').click(function(e){
            e.preventDefault();
            $('.cadretext').hide();   
            $('.detaille h5').hide();  
            $('.btnjouerclick').css({"position":"absolute",'top':" -180px","right":" 0"});
            $(this).addClass('pause');
            $(this).html('<i class="fa fa-play" aria-hidden="true"></i>');
            var clicks = $(this).data('clicks');
            if (clicks) {
               // alert('click one');
               $(this).html('<i class="fa fa-play" aria-hidden="true"></i>');
            } else {
               // alert('click two'); 
               $(this).html('<i class="fa fa-pause" aria-hidden="true"></i>');
            }
            $(this).data("clicks", !clicks);
        });
        
        
        $('#btnvideo1').click(function(e){    
            e.preventDefault();
             $.ajax({
              url: 'ajax.php',
              type: 'post', 
              data: {
                ajax : "video1", 
                calcul1 : $('#calcul1').val(),
                user_id:$('#user_id').val() 
                
              },
              success: function (data) { 
                //console.log('it work sucée'); 
                if(data == 'true'){
                 $("#third").animate({
                    left: '-=100%',
                },700 ,function(){

                });
                $("#fourth").animate({
                    left: '-=100%',
                },700 ,function(){

                });
                }
                else{ 
                    //alert('Votre Reponse est fausse verifier bien la video ');  
                    Alert.render('Votre Reponse est fausse verifier bien la video');  
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                    console.log(thrownError);
                }
              });
        });
        
        $('#btnvideo2').click(function(e){     
            e.preventDefault();
             $.ajax({
              url: 'ajax.php',
              type: 'post', 
              data: {
                ajax : "video2",  
                calcul2 : $('#calcul2').val(), 
                user_id:$('#user_id').val() 
                
              },
              success: function (data) { 
                //console.log('it work sucée'); 
                if(data == 'true'){
                 $("#fourth").animate({
                    left: '-=100%',
                },700 ,function(){

                });
                $("#five").animate({
                    left: '-=100%',
                },700 ,function(){

                });
                }
                else{ 
                    //alert('Votre Reponse est fausse verifier bien la video five'); 
                    Alert.render('Votre Reponse est fausse verifier bien la video five'); 
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                    console.log(thrownError);
                }
              });
        }); 
        
        var $startAnim = $("#start-anim");
        var $demoText = $(".demo-text");  

        //Split the text into characters and wrap every character into span element, then convert the whitespaces to whitespace characters.
        $demoText.html( $demoText.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));

        $startAnim.on("click", startAnimation);  

        function startAnimation(){
                TweenLite.set($startAnim, {autoAlpha:0});

                TweenMax.staggerFromTo( $demoText.find("span"), 0.2, {autoAlpha:0}, {autoAlpha:1}, 0.1, reset );	
        }

        function reset(){
                TweenMax.to($startAnim, 1, {autoAlpha:1});
        }
        setTimeout(startAnimation, 2000);
        
        var bounce_obj = $(".wave");   
        var duration = 1;
        var tl = new TimelineMax({repeat:-1, repeatDelay:1}); 
        tl.set(bounce_obj, {y: 0}).to(bounce_obj, duration / 4, {y:+40, ease:Power2.easeOut}, "bounceme")
        .to(bounce_obj, duration / 2, { y:0, ease:Bounce.easeOut, delay:duration / 4 }, "bounceme");
        
        
});  
 
var myVideo2 = document.getElementById("video2");  
var myVideo = document.getElementById("video1"); 
var myVideo3 = document.getElementById("video3");   
var myVideo4 = document.getElementById("video4");  

function playPause2() { 
        if (myVideo2.paused)  
            myVideo2.play(); 
        else 
            myVideo2.pause(); 
    }
    function playPause3() { 
        if (myVideo3.paused)  
            myVideo3.play(); 
        else 
            myVideo3.pause(); 
    }
    function playPause4() { 
        if (myVideo4.paused)  
            myVideo4.play(); 
        else 
            myVideo4.pause();  
    }

    function playPause() { 
        if (myVideo.paused)  
            myVideo.play(); 
        else 
            myVideo.pause(); 
    } 



function randomize(num){
	var number = 1 + Math.floor(Math.random() * num);
	return number;
}
var scene = document.getElementById('scene');
var parallax = new Parallax(scene);   

var Alert = new CustomAlert();
function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth; 
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Message d'erreur";   
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}
//TweenMax.to('#scene', 2, {opacity:1,delay:1});   
TweenMax.from( $('#scene'), 0.5,{css:{scale:0.3, opacity:0.9}, ease:Quad.easeInOut});  
TweenMax.to('.section .content', 3, {left:0,ease:Elastic.easeOut,delay:1.5});
TweenMax.to('#wave', 1 / 4, {y:-50, ease:Power2.easeOut}); 

//TweenMax.to('.logo1', 3, {right:0,ease:Elastic.easeOut,delay:1.5});