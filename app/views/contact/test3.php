<!DOCTYPE html>
<html lang="en"><center>
<head>

    <meta charset="UTF-8">
    <title>File Upload Form</title>
	<script src="js/mouse.js"></script>
	 <script src = "js/sc.js" type = "text/javascript"/></script>
	 <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	  <link rel="stylesheet" type="text/css" href="css/animate.css">


</head>

<header class="site__header island">
  <div class="wrap">
   <span id="animationSandbox" style="display: block;" class="wobble animated"><h1 class="site__title mega">krisorn kachai</h1></span>
 
  </div>
</header>

<body>

<?php
echo "<br>";
echo '<img  src="images/krisorn.jpg."width=200 height=200"  class="wobble animated " alt="icon"  />';
echo "<br>";

?>  
 
    <form action="test3.php" method="post" enctype="multipart/form-data">
        <h2 id="mouse" onmouseover="mouseOver();" onmouseout="mouseOut();">Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo[]" id="fileSelect" multiple > 
        <input type="submit" onclick = "Hello();" name="submit" value="Upload">

   
    </form>
	<audio controls autoplay loop>
<source src="audio/music.mp3" type="audio/ogg">

</audio>
</body>
</center>
</html>
<?php if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
     $total_files = count($_FILES['photo']['name']);
 for($key = 0; $key < $total_files; $key++) {
    if(true){
       
       // $filename = $_FILES["photo"]["name"];
        //$filetype = $_FILES["photo"]["type"];
        //$filesize = $_FILES["photo"]["size"];
   
            
        
      
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $_FILES["photo"]["name"][$key])){
                echo"<center>";
				echo $_FILES["photo"]["name"][$key] . " is already exists.";
				echo"/center";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"][$key], "upload/" . $_FILES["photo"]["name"][$key]);
                echo "Your file was uploaded successfully. <br>";
            } 
       
    } else{
        echo "Error: " . $_FILES["photo"]["error"][$key];
    }
}
}
?>