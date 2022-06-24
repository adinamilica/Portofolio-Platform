<!DOCTYPE html>


<?php

//Valori predefinite pentru username si password

$user = '111';

$pass='222';



//daca cookie-ul pentru username si passowrd este setat
//daca username-ul inregistrat in cookie-uri e egal cu username predefinit
//daca password-ul inregistrat in cookie-uri e egal cu passwordul predefinit

if( isset($_COOKIE['username'])
 && isset($_COOKIE['password'])
      && ($_COOKIE['username'] == $user)
      && ($_COOKIE['password'] == md5($pass))
  ){
    
//redirect catre o alta pagina daca se intrunesc toate conditiile    
header("Location: welcome_logged_in_user.php");
//header("Location: process_login.php");

}

else{
    
 
?>





<html>
    
    <head>
        <meta charset="UTF-8">
        <title> Proiect examen 1 | Login </title>
         <link rel="stylesheet" type="text/css" href="./assets/css/styles.css"> 
    </head>
    
    <body>
        
        <div class="login-container">
            
            <div class="login-center">
            
            <h1>Log In</h1>
            
           <form name="login" action="process_login.php" method="post">
               
               <label>Username:</label>
               <input type="text" placeholder="Enter Username" name="username" required>
               
               <br><br>
               
               <label>Password:</label>
               <input type="password" placeholder="Enter Password" name="password" required>
               
               <br><br>
                                        
                             
               <div><label>Remember me:</label> <input type="checkbox" name="rememberme" value="1"></div>
               
               <br>
               
               <input class="log-in-button" type="submit" name="submit" value="Login">
               
               
               
               </div>
        
            </form>

        </div> 
        
    </body>
</html>


<?php 

}

?>


