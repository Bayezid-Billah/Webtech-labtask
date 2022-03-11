<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.red{
			color: red;
		}
	</style>
</head>
<body>

<?php
$nameErr = $emailErr = $dayErr = $monthErr = $yearErr = $genderErr = $degreeErr = $b_groupErr = "";
$name = $email = $day = $month = $year = $gender = $degree = $b_group = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  }else if (str_word_count($_POST["name"])<2){
      $nameErr="Name needs to be at least two words";
  }
   else {
    $name = $_POST["name"];
    if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
      $nameErr = "Can only contain letter, period and dash";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
}

  

  if (empty($_POST["day"])||empty($_POST["month"])||empty($_POST["year"])){
      $yearErr = "Date of Birth is required";
      $day=$_POST["day"];
      $month=$_POST["month"];
      $year=$_POST["year"];
  }else{
      $day=$_POST["day"];
      $month=$_POST["month"];
      $year=$_POST["year"];
      if(!preg_match("/^(0[1-9]|[1-9]$|[12][0-9]|3[01])/",$day)){
          $dayErr = "Day should be between 1-31";
        }else if(!preg_match("/^(0[1-9]|[1-9]$|1[0-2])/",$month)){
            $monthErr = "Month should be between 1-12";
        }else if( $year<1953||$year>1998){
            $yearErr= "Birth year should be within 1953 to 1998";
        }
    }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } 
  else {

    $degree = $_POST["degree"];
    if(count($degree)<2){
    	$degreeErr = "  At least two of degree must be selected";
    }
  }

  
if (empty($_POST["b_group"])) {
    $b_groupErr = "Blood group is required";
  } else {
    $blood = $_POST["b_group"];
  }

  

}

?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <br><fieldset>
            <legend>Name</legend>
            <input type="text" name="name" value="<?php echo $name;?>"><span class="red">*<?php echo $nameErr ?></span><br>
        </fieldset><br>

        <fieldset>
            <legend>Email</legend>
            <input type="text" name="email" value="<?php echo $email;?>"><span class="red">*<?php echo $emailErr ?></span><br>
        </fieldset><br>

        <fieldset>
            <legend>Date of Birth</legend>
            <input type="text" name="day" value="<?php echo $day;?>"><span class="red">*<?php echo $dayErr ?></span>
            <input type="text" name="month" value="<?php echo $month;?>"><span class="red">*<?php echo $monthErr ?></span>
            <input type="text" name="year" value="<?php echo $year;?>"><span class="red">*<?php echo $yearErr ?></span>
        </fieldset><br>

        
        <fieldset>
		Gender:
        <input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male

		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female

		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="other">Other<span class="red">*<?php echo $genderErr ?></span>
        </fieldset><br>

        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC">SSC 
            <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="HSC") echo "checked";?> value="HSC">HSC
            <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="BSc") echo "checked";?> value="BSc">BSc
            <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="MSc") echo "checked";?> value="MSc">MSc<span class = "red"><?php echo$degreeErr ?> </span>

        </fieldset><br>

        <fieldset>
        <legend>Blood Group</legend>
        <select id="b_group" name="b_group">
        <option value=""></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <span class="red"><?php echo $b_groupErr ?></span>
  
    <br>
		<input type="submit" name="">

        </fieldset>
        <br>
	</form>

	<h2>Input Data</h2>

    <a href="http://localhost/kodubaba/sandbox">CLICK</a>

</body>
</html>