<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

if(isset($_POST["sub"])) {
	
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["fname"]["name"]);
	$upl = true;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$img_name =  $target_dir.basename($_FILES["fname"]["name"]);

if ($_FILES["fname"]["size"] > 400000) {
  echo "Maximum size should be below 4MB";
  $upl = false;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo " Picture format must be in jpeg or jpg or png";
  $upl = false;
}

if (!$upl) {
  echo "\nSorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fname"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fname"]["name"])). " has been uploaded.";
  } else {
    echo "\nSorry, there was an error uploading your file.";
  }
}
}


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset >
      <legend>PROFILE PICTURE</legend>
      <img src="<?php echo $img_name; ?>" width="180" height="210">
      <br>
      <input type="file" id="myFile" name="fname">
      <br>
  	  <input type="submit" name="sub">
    </fieldset>
 </form>
</body>
</html>