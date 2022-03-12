<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<br><fieldset>
    <legend>Change Password</legend>
    <label for="pass">Current Password</label>
    <input type="password" name="pass" value="<?php echo $uname;?>"><br>
    <label for="npass">New Password</label>
    <input type="password" name="npass" value="<?php echo $npass;?>"><br>
    <label for="rnpass">Retype New Password</label>
    <input type="password" name="rnpass" value="<?php echo $rnpass;?>"><br>

</fieldset><br>
<input type="submit" name="">


</form>
</body>
</html>