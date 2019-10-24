<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
	
		<title>New Blog</title>

		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<meta name="author" content="The Man in Blue" />
		<meta name="robots" content="all" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/blog.css">
		<link rel="stylesheet" type="text/css" href="css/widgEditor.css">
			
		<script type="text/javascript" src="scripts/widgEditor.js"></script>
		<?php
        include("config.php");
        session_start();
        if(isset($_POST['but_upload'])){
            $maxsize = 5242880; // 5MB 
           // $text1 = document.getElementById('noise').value;           
            $text1 = $_POST['noise'];
            $uname = $_SESSION["username"];
            $title = $_POST['title'];
            $name = $_FILES['file']['name'];
            $target_dir = "videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];
            $target_dir_img = "images1/";
            $target_file_img = $target_dir_img . $_FILES["file"]["name"];

            // Select file type for image
            $imageFileType = strtolower(pathinfo($target_file_img,PATHINFO_EXTENSION));
            // valid img extension
            $extensions_arr_img = array('gif','png','jpg','jpeg');
            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                        $query = "INSERT INTO img_vid(Title1,Vide1,location,Text15,username) VALUES('".$title."','".$name."','".$target_file."','".$text1."','".$uname."')";

                        mysqli_query($conn,$query);
                        echo "Upload successfully.";
                    }
                }

            }
            else if(in_array($imageFileType, $extensions_arr_img))
            {
            	 // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file_img)){
                        // Insert record
                        $query = "INSERT INTO img_vid(Title1,Img1,location,Text15,username) VALUES('".$title."','".$name."','".$target_file."','".$text1."','".$uname."')";

                        mysqli_query($conn,$query);
                        echo "Upload successfully.";
                    }
                }
            }
            else{
                echo "Invalid file extension.";
            }
        
        }
        ?>

	</head>

	<body>

		<div class="navbar">
			<a href="blog.php">Blogpost</a>			
			<a href="logout.php" class="right">Logout</a>
			<a href="new.php" class="right">New Blog</a>
		</div>				  

		<div id="content" class="main">
			<form action="" method="post" enctype='multipart/form-data'>
				<label for="title"><b>Title:</b></label><br>
				<input type="text" placeholder="Enter Title" name="title" required>
				<div>
					<textarea id="noise" name="noise" class="widgEditor nothing"></textarea>
				</div>
				<button type="submit" name="but_upload">Upload</button>
				<input type='file' name='file' style="background-color: #333;color: white;padding: 14px 0px;
				border: none;cursor: pointer;width: 45%;" >
			</form>
		</div>

		<div class="footer">
			<h5>Made by Blogpost | email: blogpost@info.com </h5>
		</div>
		
	</body>

</html>