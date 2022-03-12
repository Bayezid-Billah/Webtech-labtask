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
