<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<?php
$passErr= "";
$pass = $npass =$rnpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = $_POST["pass"];
    $npass = $_POST["npass"];
    $rnpass = $_POST["rnpass"];
    
    if ($pass == $npass){
        $passErr = "New password can't be the same as old password";
    }else if($npass!=$rnpass){
        $passErr = "New password do not match, retype correctly";
    }else
   {
    $pass=$npass;
    }

}

?>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<br><fieldset>
    <legend>Change Password</legend>
    <label for="pass">Current Password</label>
    <input type="password" name="pass" value="<?php echo $pass;?>"><span></span><br>
    <label for="npass">New Password</label>
    <input type="password" name="npass" value="<?php echo $npass;?>"><span><?php echo $passErr ?></span><br>
    <label for="rnpass">Retype New Password</label>
    <input type="password" name="rnpass" value="<?php echo $rnpass;?>"><span></span><br>

 

</fieldset><br>
<input type="submit" name="">


</form>
</body>
</html>