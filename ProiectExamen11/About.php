<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> About page </title>
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    </head>
    <body>
        
    <div class="main-container">
        
            <div class="nav-container">
                
                <ul>
                    <li><a href="index.php">Home</a></li>
               <li><a href="About.php">About</a></li>
               <li><a href="Contact.php">Contact</a></li>
               <li><a href="for_visitors.php">Menu</a></li>
               <li><button class="log-in-button"><a href="log_in_user.php" class="log-in-text">Login</a></button></li>
              
                </ul>
                
            </div>

        
            <div class="center-about-page">
                
                <h2>Two cool videos & a song</h2> 

                <br>
                    
                <!-- video local -->
                
                <video width="420" height="240" 
                       style="border:0; border-radius:30px; padding:20px; margin:auto;"
                       controls>
                <source src="./assets/media/Schindler.mp4" type="video/mp4" >
                </video>
                
                <br>
                
                <!-- video de pe Youtube -->
                
                <object width="420" height="240"
                        style="border:0; border-radius:30px; padding:20px; margin:auto;"
                        data="http://www.youtube.com/v/Ahg6qcgoay4" type="application/x-shockwave-flash">
                       <param name="src" value="http://www.youtube.com/v/Ahg6qcgoay4" />
                </object>
                
               
                <br>
                
                <!--  MUSIC PLAYER. Problema: nu se poate da play -->
                
                <audio  style="width: 750px; margin:auto;
                        border:0; border-radius:30px; padding:20px; margin:auto;
                        " controls autoplay muted>
                    <source src="./assets/media/InterstellarTheme" type="audio/mpeg">
                </audio>   
                
                <br>
                
                <!-- iframe ul pentru butonul de like si share. Problema: nu se vede -->
            
                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=200&layout=button_count&action=like&size=large&share=true&height=46&appId=152047580318506" 
                        width="200" height="46" 
                        style="border:none; overflow:hidden" 
                        scrolling="no" 
                        frameborder="0" 
                        allowfullscreen="true" 
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">          
                </iframe>
                 
            </div>   
        
        
            
            <div class="footer-container">
                
                <ul>
                    <li><a href="#conditions">Termeni si Conditii</a></li>
                    <li><a href="#something">Protectia datelor personale</a></li>
                </ul>
                
            </div>            
       
    </div>
    </body>
</html>

