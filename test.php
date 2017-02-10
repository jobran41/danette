                                                          <div class="videolook" style="text-align:center">  
                                                            <button onclick="playPause()">Play/Pause</button> 
                                                            <button onclick="makeBig()">Big</button>
                                                            <button onclick="makeSmall()">Small</button>
                                                            <button onclick="makeNormal()">Normal</button>
                                                            <br><br>
                                                            <video id="video1" width="420"> 
                                                              <source src="video/mov_bbb.mp4" type="video/mp4"> 
                                                              <source src="video/mov_bbb.ogg" type="video/ogg">
                                                              Your browser does not support HTML5 video.
                                                            </video>
                                                          </div>
                                                          <script> 
                                                            var myVideo = document.getElementById("video1"); 

                                                            function playPause() { 
                                                                if (myVideo.paused) 
                                                                    myVideo.play(); 
                                                                else 
                                                                    myVideo.pause(); 
                                                            } 

                                                            function makeBig() { 
                                                                myVideo.width = 560; 
                                                            } 

                                                            function makeSmall() { 
                                                                myVideo.width = 320; 
                                                            } 

                                                            function makeNormal() { 
                                                                myVideo.width = 420; 
                                                            } 
                                                            </script>


