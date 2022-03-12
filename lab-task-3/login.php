<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$unameErr = $passErr= "";
$uname = $pass= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $unameErr = "Name is required";
  }else if (strlen($_POST["uname"])<2) {
    $unameErr = "User Name must contain at least two characters";
  }else if (!preg_match("/^[a-zA-Z-._]*$/",$_POST["uname"])) {
      $unameErr = "Can only contain numbers, letter, period and dash";
    }
    else{
      $uname = $_POST["uname"];
    }
  

    if (empty($_POST["pass"])) 
    {
    $passErr = "Password is required";
    } 
   else
   {
    if(strlen($_POST['pass']) < 8)
    {
    $passErr = "Password must be at least 8 characters ";
    }else if(!preg_match("/[@|#|$|%]/", $_POST['pass'])){
        $passErr = "Password need at least one special character (@,#,$,%)";
    }else{
      $pass=$_POST['pass'];
    }

}}

?>

    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<br><fieldset>
    <legend>LOGIN</legend>
    <label for="uname">User Name</label>
    <input type="text" name="uname" value="<?php echo $uname;?>"><span><?php echo $unameErr ?></span><br>
    <label for="pass">Password</label>
    <input type="password" name="pass" value="<?php echo $pass;?>"><span><?php echo $passErr ?></span><br>
    <input type="checkbox" name="remme">
    <label for="remme">Remember Me</label>
</fieldset><br>
<input type="submit" name="">
<a href="reset password link">Forgot Password</a>

</form>
</body>
</html>