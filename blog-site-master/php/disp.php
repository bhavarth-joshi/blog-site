<?php  
 $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "daishik";

  $conn = mysqli_connect($servername,$username,$password,$db_name);
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 ?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM `img_vid`  ORDER BY id DESC";  
                
                $result = mysqli_query($conn, $query); 
                while($row = mysqli_fetch_array($result))  
                {  
                   // echo '<img src="videos/'.$row['name'].'" height="200" width="200" class="img-thumnail" />';
                      
                     if ($row['Img1'] != "") {
                       echo '<img src="images1/'.$row['Img1'].'" height="200" width="200" class="img-thumnail"/>';
                       echo $row['Text15'];
                     }
                     if($row['Vide1'] != "")
                   { echo '<video width ="300" height="200" controls><source src ="videos/'.$row['Vide1'].'" type="video/mp4"></video>'; 
                      echo $row['Text15'];
                    }
                            
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  