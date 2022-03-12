<!DOCTYPE html>
<html>
<head>
</head>
<body>

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