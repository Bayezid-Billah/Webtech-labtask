<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["reg_name"]))  
 {  
      if(empty($_POST["reg_name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["reg_email"]))  
      {  
           $error = "<label class='text-danger'>Enter an Email</label>";  
      }  
      else if(empty($_POST["reg_uname"]))  
      {  
           $error = "<label class='text-danger'>Enter a User Name</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a Password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      //else  
      //{  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                echo $current_data;
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     'name'               =>     $_POST['reg_name'],  
                     'email'          =>     $_POST["reg_email"],  
                     'username'     =>     $_POST["reg_uname"],  
                     'password'     =>     $_POST["reg_pass"],  
                     'confirmpassword'     =>     $_POST["reg_cpass"]  
                );  
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
                echo $final_data;
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
    //}  
 }  
 ?>   

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
    <label for="reg_cpass">Confirm Password</label>
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