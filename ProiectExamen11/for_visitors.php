<?php
       //include connection file
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
            
            
                
                <td style="margin:auto;">
                    
                    <?php echo $row['title'];?>
                    
                    <br><br>
                    
            <img style="width:200px; height:200px;" src="<?php echo $row['image'];?>">
            
            <br><br>
                    
                <button class="gallery-button"><?php echo "<a href=\"view.php?id=".$row['id']."\">View</a>"?></button>
                    
                </td>
            
            
            
            
<?php } ?>
        
        
        </table>
                
                
            </div>
            
            
            <br>
            
                
        </div><!-- main container -->
            




    </body>
    
</html>