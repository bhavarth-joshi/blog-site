<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">




<head>
     <?php
        include("config.php");
     
        if(isset($_POST['but_upload'])){
            $maxsize = 5242880; // 5MB 
           // $text1 = document.getElementById('noise').value;           
            $text1 = $_POST['noise'];
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
                        $query = "INSERT INTO img_vid(Vide1,location,Text15) VALUES('".$name."','".$target_file."','".$text1."')";

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
                        $query = "INSERT INTO img_vid(Img1,location,Text15) VALUES('".$name."','".$target_file."','".$text1."')";

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
<title>Text Editor</title>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="The Man in Blue" />
<meta name="robots" content="all" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<style type="text/css" media="all">
	@import "css/info.css";
	@import "css/main.css";
	@import "css/widgEditor.css";
</style>

<script type="text/javascript" src="scripts/widgEditor.js"></script>

</head>



<body>
	<div id="content">
		<form method="post" action="" enctype='multipart/form-data'>
			<fieldset>
	
				<textarea id="noise" name="noise" class="widgEditor nothing"></textarea>
			</fieldset>
			<fieldset class="submit">
				<input type="submit" value="Check the submitted code" name = "but_upload"/>
				<input type='file' name='file' />
			</fieldset>
			
		</form>
	</div>
<!-- END content -->
</body>




</html>
