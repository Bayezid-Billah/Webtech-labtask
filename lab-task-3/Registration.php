<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<br><fieldset>
    <legend>Registration</legend>
    <label for="reg_name">Name</label>
    <input type="text" name="reg_name" value="<?php echo $reg_name;?>"><br>
    <label for="reg_email">Email</label>
    <input type="text" name="reg_email" value="<?php echo $reg_email;?>"><br>
    <label for="reg_uname">User Name</label>
    <input type="text" name="reg_uname" value="<?php echo $reg_uname;?>"><br>   
    <label for="reg_pass">Password</label>
    <input type="password" name="reg_pass" value="<?php echo $reg_pass;?>"><br>   
    <label for="reg_cpass">Name</label>
    <input type="password" name="reg_cpass" value="<?php echo $reg_cpass;?>"><br>
    <fieldset>Gender:<input type="radio" name="gender">
    <input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male

		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female

		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="other">Other<span class="red">*<?php echo $genderErr ?></span>
    </fieldset>


    <fieldset>
            <legend>Date of Birth</legend>
            <input type="text" name="day" value="<?php echo $day;?>"><span class="red">*<?php echo $dayErr ?></span>
            <input type="text" name="month" value="<?php echo $month;?>"><span class="red">*<?php echo $monthErr ?></span>
            <input type="text" name="year" value="<?php echo $year;?>"><span class="red">*<?php echo $yearErr ?></span>
    </fieldset><br>

</fieldset><br>
<input type="submit" name="">


</form>
</body>
</html>