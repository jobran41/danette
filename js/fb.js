//var facebook = false ;
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
     
     
     FB.api('/me', 'GET', { 
        "fields": "id,name,email"
    },function(response) {
    console.log(JSON.stringify(response)); 

     });

     
    } 
  }

  function checkLoginState() {
    alert('salut');
    FB.getLoginStatus(function(response) {
      if (response.hasOwnProperty("error")) {
        alert("Error: " + response.error.message);
    } else {
        //Success!
    }
      statusChangeCallback(response);
    });
  }

   window.fbAsyncInit = function() {
    
    FB.init({
    appId      : '1645221172439951',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });
  };
function fb_login(){
    FB.login(function(response) {

        if (response.authResponse) {
            console.log('Welcome!  Fetching your information.... ');
            //console.log(response); // dump complete info
            var access_token = response.authResponse.accessToken; //get access token
            var user_id = response.authResponse.userID; //get FB UID
            

            FB.api('/me', 'GET', {
        "fields": "id,name,email"
    }, function(response) { 

          
          var res = response.name.split(" "); 
                    $('#nom').val(res[0]);
                    $('#email').val(response.email);
                    $('#user_id').val(user_id);  
                     
                    $('#prenom').val(response.name.substring(res[0].length+1, response.name.length));
                    
            $.ajax({
              url: 'ajax.php',
              type: 'post',
              data: {
                ajax : "verif", 
                user_id:$('#user_id').val()    
              },
              success: function (data) { 
                //console.log('it work sucée'); 
                if(data == 00){ 
                 $("#first").animate({
                              left: '-=100%',
                      },700 ,function(){
                      });
                      $("#second").animate({
                              left: '-=100%',
                      },700 ,function(){
                      });
                }
                else if(data == 10){ 
                    $("#first").animate({
                              left: '-=100%',
                      },700 ,function(){
                      });
                      $("#third").animate({ 
                              left: '-=100%',
                      },700 ,function(){
                      });
                } 
                else if(data == 11){       
                    $("#first").animate({
                              left: '-=100%',
                      },700 ,function(){
                      });
                      $("#fourth").animate({ 
                              left: '-=100%',
                      },700 ,function(){
                      });
                }
                else if(data == 12){        
                    $("#first").animate({
                              left: '-=100%',
                      },700 ,function(){
                      });
                      $("#five").animate({ 
                              left: '-=100%',
                      },700 ,function(){
                      });
                }
                else if(data == 13){       
                    $("#first").animate({
                              left: '-=100%',
                      },700 ,function(){
                      });
                      $("#sixe").animate({  
                              left: '-=100%',
                      },700 ,function(){
                      });
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                    console.log(thrownError);
                }
              });
                  
            });

        } else {
            //user hit cancel button
            console.log('User cancelled login or did not fully authorize.');
        }
    }, {
        scope: 'public_profile,email'
    });
}
function addVoteFb(id_image,element){
    FB.login(function(response) {
        if (response.authResponse) {
            var user_id = response.authResponse.userID; //get FB UID

            FB.api('/me', 'GET', {
        "fields": "id"
    }, function(response) {
          console.log(response);

           $.ajax({
              url: 'ajax.php',
              type: 'post',
              data: {
                ajax : "setVotes",
                user_id : user_id,              
                id_image : id_image             
              },
              success: function (res) {
                $.ajax({
                  url: 'ajax.php',
                  type: 'post',
                  data: {
                    ajax : "setVote",
                    user_id : user_id,              
                    id_image : id_image,
                    data: res             
                  },
                  success: function (data) {
                    //var content = '<i class="fa fa-heart" aria-hidden="true"></i> <' + data;
                    if(data !='no-time') element.find('span').html(data);
                    else alert('Notre jeu a pris fin Merci à tous pour votre participation et à bientôt !');
                  }
                  });          
              }
              });          
            });


          

        } else {
            //user hit cancel button
            console.log('User cancelled login or did not fully authorize.');

        }
    }, {
        scope: 'public_profile,email'
    });
}
// partage image
function partageImage(){

  var msg = 'Faites comme moi et partager une part de vous avec Tunisair. Vous pouvez gagner un billet gratuit.';
                 FB.ui(
                     {
                         method: 'feed',
                         name: 'fihamenni',
                         link: 'http://asslelbenna.tn/',
                         picture: 'http://www.animationresources.org/pics/achmedreiniger.jpg',
                       //  source: self._song.media,
                         caption: 'http://fihamenni.com/',
                         description: msg,
                         message: msg
                     },
                     function(response) {
                         if (response && response.post_id) {
                             self.register_share('facebook');
                         } else {
                             console.log("Post not shared");
                         }
                     }
                 );
}
function partageGallerie(name,url){

  var msg = 'Voici ma recette avec un produit Jadida. Vous aussi prenez en photo votre recette accompagnée d\'un produit Jadida et tentez de gagner un voyage à Istanbul pour 2 personnes !';
                 FB.ui(
                     {
                         method: 'feed',
                         name: name,
                         link: 'http://asslelbenna.tn/',
                         picture: 'http://asslelbenna.tn/' + url,
                       //  source: self._song.media,
                         caption: 'http://asslelbenna.tn/',
                         description: msg,
                         message: msg
                     },
                     function(response) {
                         if (response && response.post_id) {
                             self.register_share('facebook');
                         } else {
                             console.log("Post not shared");
                         }
                     }
                 );
}
function inviteFriends(){
  /*FB.ui({ 
    method: 'apprequests',
    message: 'You should learn more about this awesome game.',
    data: 'tracking information for the user',
    action_type:'send',
  });*/
  FB.ui({
    method:'apprequests',
    message: 'Awesome application try it once' }
    , requestCallback); 
} 


function requestCallback(response) {
console.log(response);
}
// fin partage
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      
      console.log('Successful login for: ' + response.name);
      //document.getElementById('status').innerHTML =
       // 'Thanks for logging in, ' + response.name + '!';
    });
  }
