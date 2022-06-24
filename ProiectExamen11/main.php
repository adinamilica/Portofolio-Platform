    <?php
   
    include 'connection.php';

    $sql='SELECT * FROM images;';
    $query=  mysqli_query($con, $sql)or die(mysqli_error($con));
    
    ?>

       
<html>
    <head>
        <meta charset="UTF-8">
        <title> Contact page </title>
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
            
            <div style=" display:flex; flex-direction: column; margin:auto;">
                
                <h3 style="margin:auto; padding:10px; font-size: 30px; ">Gallery</h3>
                <br><br>

        <table style="margin:auto; display:flex; flex-direction: row; flex-wrap:wrap;"width="100%" cellpadding="4" cellspace="4" >
            
            
<?php while($row=mysqli_fetch_array($query)){ ?>
            
            
                
                <td style="margin:auto;gap:10px;">
                    
                    <?php echo $row['title'];?>
                    <br>
                    
                
                <img style="width:200px; height:200px;" src="<?php echo $row['image'];?>">
                <br>
                    
                <button class="gallery-button"><?php echo "<a href=\"view.php?id=".$row['id']."\">View</a>"?></button>
                <br>
                <button class="gallery-button"><?php echo "<a href=\"edit.php?id=".$row['id']."\">Edit</a>"?></button>
                <br>
                <button class="gallery-button"><?php echo "<a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?></button>
                
                </td>
 
           <?php } ?>
            
        </table>
                
<br>
<br>


<div style="margin:auto; padding:20px;"><a href="upload.php" >Upload another image</a></div>
    </body>
</html>