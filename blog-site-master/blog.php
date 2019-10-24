<?php
include("config.php");
session_start();
$uname = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">

  </head>

  <body>

    <div class="navbar">
      <a href="home.php">Blogpost</a>    
      <a href="logout.php" class="right">Logout</a>
      <a href="new.php" class="right">New Blog</a>
    </div>
    
    <div>
      <?php  
      echo '<h2>'.$_SESSION["username"].'</h2>'?>
    </div> 
    <div class="row">
      <div class="leftcolumn">
        
          <?php 
           $query = "SELECT * FROM `img_vid` where username ='".$uname."' ";  
           $result = mysqli_query($conn, $query); 
           while($row = mysqli_fetch_array($result))  
           {
              echo '<div class="card"> ';
                echo'<h2>'.$row['Title1'].'</h2>';
                echo'<h5>Title description, Dec 7, 2017</h5>';
                if ($row['Img1'] != "") {
                       echo '<img src="images1/'.$row['Img1'].'" height="200" width="200"   class="img-thumnail"/>';
                         echo '<p>'.$row['Text15'].'</p>';
                     }
                if($row['Vide1'] != "")
                { 
                  echo '<video width ="300" height="200" controls><source src ="videos/'.$row['Vide1'].'" type="video/mp4"></video>'; 
                      echo $row['Text15'];
                }
              echo'</div>';
           }

         ?>
        
      </div>
      <div class="rightcolumn">
        <div class="card">
          <h2>About Me</h2>
          
         <?php  
         echo '<p>Username:'.$_SESSION["username"].'</p>';
         echo '<p>Email:'.$_SESSION["Email"].'</p>'; ?>
        </div>
      </div>
    </div>  

    <div class="footer">
        <h5>Made by Blogpost | email: blogpost@info.com </h5>
    </div>

  </body>
</html>
