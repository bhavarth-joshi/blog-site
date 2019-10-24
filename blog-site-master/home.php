<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Blogpost</title>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

  </head>

  <body>
    <?php
  include("config.php"); 
  $usname = $pass = $err = "";
  if(isset($_POST['submit'])) 
  {
    $usname = $_POST['uname'];
    $pass = $_POST['psw'];
    $query = "SELECT * FROM userinfo where username ='".$usname."' and password = '".$pass."' ";  
    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)<1)
    {
      $err = "Invalid username Or password";
    }
    else
    {
      echo "successful";
      
      header('Location: blog.php');
      session_start();
      $_SESSION["username"] = $usname;
      $_SESSION["Email"] = $row["Email1"];

    }
  }  
?>  

    <div class="navbar">
      <a href="home.php">Blogpost</a>
      <a href="#" class="right" onclick="document.getElementById('id01').style.display='block'">Login</a>
      <a href="signup.php" class="right">Sign-Up</a>
    </div>

    <div class="header">
      <h1>Blogpost</h1>
      <p>Ideas worth sharing</p>
    </div>

<?php  
include("config.php");
                $query = "SELECT * FROM `img_vid`  ORDER BY id DESC";  
                
                $result = mysqli_query($conn, $query); 
                
                while($row = mysqli_fetch_array($result))  
                {  
                   // echo '<img src="videos/'.$row['name'].'" height="200" width="200" class="img-thumnail" />';
                     echo '<div class="row">
                      <div class="side">
                      <div class="main">  
                      <h2>'.$row['Title1'].'</h2>  
                      <h5>Title description, Dec 7, 2017</h5>';
                     if ($row['Img1'] != "") {
                       echo '<img src="images1/'.$row['Img1'].'" height="200" width="200"   class="img-thumnail"/>';
                         echo '<p>'.$row['Text15'].'</p>';
                     }
                     if($row['Vide1'] != "")
                   { echo '<video width ="300" height="200" controls><source src ="videos/'.$row['Vide1'].'" type="video/mp4"></video>'; 
                      echo $row['Text15'];
                    }
                    echo '</div>
                    </div>
                    </div>';   
                }
                
    
?>
    <div class="footer">
      <h5>Made by Blogpost | email: blogpost@info.com </h5>
    </div>
    
    <div id="id01" class="modal">
  
        <form class="modal-content animate"  method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            
          </div>
      
          <div class="container">
            <?php echo "$err"; ?>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button type="submit" name="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
      
          <div class="container" style="background-color:#ddd">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">
              <a href="#">Forgot password?</a>
            </span>
          </div>
        </form>    
    </div>
    
         

    <script>
        // Get the modal
        var modal01 = document.getElementById('id01');
        
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal01) {
            modal.style.display = "none";
            }
        }    

        
    </script>

  </body>
</html>