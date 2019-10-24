<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blogpost</title>   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    
    <body>
 <?php 
    include("config.php");
    $err = "";
    $usname = $pass = $email = "";
    if(isset($_POST['submit']))
    {
      if($_POST['psw'] != $_POST["psw-repeat"])
      {
        $err= "incorrect";
      }
      else
      {
        $email = $_POST["email"];
        $usname = $_POST["uname"];
        $pass = $_POST["psw"];
        $err = "correct";
        $query = "INSERT INTO userinfo(username,password,Email1) VALUES('".$usname."','".$pass."','".$email."')";
        if(mysqli_query($conn,$query))
        {
          echo "SUCCEESFUL";
          header('Location: home.php');
        }
        else
        {
          echo "invaild";
          $err="invaild";
        }
      }
    }

?>
        <div class="navbar">
            <a href="home.php">Blogpost</a>            
            <a href="signup.php" class="right">Sign-Up</a>
        </div>

        <div id="id02">       
            <form class="modal-content" method="post">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <label for="uname"><b>Username</b></label><br>
                    <input type="text" placeholder="Enter Username" name="uname" required><br>

                    <label for="email"><b>Email</b></label><br>
                    <input type="text" placeholder="Enter Email" name="email" required><br>
      
                    <label for="psw"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="psw" required><br>
      
                    <label for="psw-repeat"><b>Repeat Password</b></label><br>*<?php echo "$err"; ?><br>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label><br>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>        
            </form>
        </div> 

        <script>

           var modal = document.getElementById('id02');

           window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }  
        
        </script>
    </body>
</html>