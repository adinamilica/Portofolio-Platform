
<?php


class Sushi {
    public $denumire;
   public $price;
   
   function setDenumire($nume){
       $this->denumire=$nume;
   }
   
   function setPret($pret){
       $this->price=$pret;
   }
   
   function Mesaj(){
       echo $this->denumire . " costa ".  $this->price;
   }
}

?>


<?php

$sushi= new Sushi();

require_once "connection.php";
$msg="";

if(isset($_POST['upload'])){
    
    //$_FILES is an associative array containing items uploaded via HTTP POST method
    //introducem file-urile din post in folder-ul local "images" cu nume encryptat cu md5
    //luam path-ul imaginii de abia introduse si il memoram in $target
    
    $target="./images/". md5(uniqid(time())). basename($_FILES['image']['name']);

    $text=$_POST['text'];
    
    
    $sushi->setDenumire($text);
    $sushi->setPret("50");
    $sushi->Mesaj();
    
    
    //avand salvate in cele doua variabile, $target si $text...
    //...pentru incarcarea imaginii in database,
    // facem acest lucru 
    //specificiam tabelul si field-urile modificate cu valorile din variabile
   
    $sql="INSERT INTO images(title, image)VALUES('$text','$target')";
    
    mysqli_query($con,$sql);
    
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        
       //daca s-a uploadat corect,redirect la alta pagina 
        
        
      // header('location:index.php');
       
    }
    
    else{
        
       //daca NU s-a uploadat corect, mesaj 
        $msg="Vai! Vai! Vai!!!";
        echo $msg;
        
    }
}