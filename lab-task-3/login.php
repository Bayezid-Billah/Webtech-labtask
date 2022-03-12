<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$unameErr = $passErr= "";
$uname = $pass= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $nameErr = "Name is required";
  }else if (strlen($uname)<2) {
    $nameErr = "User Name must contain at least two characters";
  }
   else {
    $name = $_POST["uname"];
    if (!preg_match("/^[a-zA-Z0-9.-_]*$/",$name)) {
      $nameErr = "Can only contain numbers, letter, period and dash";
    }
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
    }else if(!preg_match("/[@#$%]/", $string)){
        $passErr = "Password need at least one special character (@,#,$,%)";
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