<?php require("head.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<div class="menu">
</div>
<?php  
 $message = '';  
 $error = '';  

 if(isset($_POST["reg_name"]))  
 {  
     $reg_name =  $_POST["reg_name"];
     $reg_email = $_POST["reg_email"]; 
     $reg_uname = $_POST["reg_uname"]; 

      if(empty($_POST["reg_name"]))  
      {  
          $error .= "<div class='text-danger'>Enter Name</div>";  
          
    if (!preg_match("/^[a-zA-Z-. ]*$/",$_POST["reg_name"])) {
      $error = "Can only contain letter, period and dash";
    }
      }

      if(empty($_POST["reg_email"]))  
      {  
          $error .= "<div class='text-danger'>Enter an Email</div>";  
      }  
      
      if(empty($_POST["reg_uname"]))  
      {  
          $error .= "<div class='text-danger'>Enter a User Name</div>";  
      }  
      
      if(empty($_POST["pass"]))  
      {   
          $error .= "<div class='text-danger'>Enter a Password</div>"; 
          if(!preg_match("/[@|#|$|%]/", $_POST['pass'])){
               $error = "Password need at least one special character (@,#,$,%)"; 
      }}
      
      if(empty($_POST["Cpass"]))  
      {  
           $error .= "<div class='text-danger'>Confirm password field cannot be empty</div>";  
      } 
      
      if(empty($_POST["gender"]))  
      {  
           $error .= "<div class='text-danger'>Gender cannot be empty</div>";  
      } 

     if(file_exists('data.json'))  
     {  
          $current_data = file_get_contents('data.json');  

          $array_data = json_decode($current_data, true);  
          $new_data = array(  
               'name'               =>     $_POST['reg_name'],  
               'email'          =>     $_POST["reg_email"],  
               'username'     =>     $_POST["reg_uname"],  
               'password'     =>     $_POST["reg_pass"],  
               'confirmpassword'     =>     $_POST["reg_cpass"]  
          );  
          $array_data[] = $new_data;  
          $final_data = json_encode($array_data, JSON_PRETTY_PRINT);  

          if(file_put_contents('data.json', $final_data))  
          {  
               $message = "<label class='text-success'>File Appended Success fully</p>";  
          }  
     }  
     else  
     {  
          $error = 'JSON File not exits';  
     }
     
     if($error != "")
          echo $error;
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