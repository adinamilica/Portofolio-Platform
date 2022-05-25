

<?php


//loginul predefenit
$user='111';
$pass='222';



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
         
         echo 'welcome back ' .$_COOKIE['username'];
        
     }
}

else{
    
    header("Location: index.php");
    
}


?>



<a href='log_out_user.php'>logout</a>
