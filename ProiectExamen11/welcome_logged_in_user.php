

<?php


//loginul predefenit
$user='111';
$pass='222';

$welcome_msg;

$cookie_msg;

if(
    (isset($_COOKIE['username']))
 && (isset($_COOKIE['password']))
  ){
    
     if(
         ($_COOKIE['username'] != $user) ||
         ($_COOKIE['password'] != md5($pass))
       ){
         
         echo "wrong cookie :(( ";
         
        }
     
     else {
         
         //daca totul este bine (a fost activat remember me-ul), il duce la pagina principala
         
         $welcome_msg= 'Welcome back ' .$_COOKIE['username'];
         $cookie_msg='Cookie-ul a fost setat!';
        
     }
}

else{
    
    // in cazul in care nu s-a activat remember me-ul se duce la index.php
    // nu asta vrem. Pur si simplu logheaza omu intr-o sesiune si gen aia e 
    
    //header("Location: index.php");
    $welcome_msg= 'Welcome back '.$user;
    $cookie_msg='Nu ai optat pentru remember me!';
    
}


?>





<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Your page</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css"> 
    </head>
    <body>
        <div class="main-container">
            
            <div class="nav-container">
                
                <ul>
                    
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><button class="log-in-button"><a href="log_in_user.php" class="log-in-text">Login</a></button></li>
              
                </ul>
                
            </div>
            
            
            
            
            <div class="center-user-stuff">
                
                <div style="margin:auto;"><h1>Your page</h1></div>
                
                <br>
                
                <div style="margin:auto;"><p><?php echo $welcome_msg; ?></p></div>

                <br><br>

                <div style="margin:auto;"><p><?php echo $cookie_msg; ?></p></div>
                
                <br><br>

                <button style="width:100px;
                        margin:auto;
    border-radius: 10px;
    
    border: 0px;
    font-family:Montserrat;
    
    background-color: whitesmoke;
    color:black;"><a href='log_out_user.php'>logout</a></button>
                
    <br>
    
                <button style="width:100px;
                        margin: auto;
    border-radius: 10px;
    
    border: 0px;
    font-family:Montserrat;
    
    background-color: whitesmoke;
    color:black;"><a href='main.php'>Change up your database</a></button>
                
                
                
                
            </div>
            
            
            
            <div class="footer-container">
                
                <ul>
                    
                    <li><a href="#conditions">Termeni si Conditii</a></li>
                    <li><a href="#something">Protectia datelor personale</a></li>
                    
                </ul>
                
            </div>   
            
        </div><!-- main container -->
        
    </body>
    
</html>

