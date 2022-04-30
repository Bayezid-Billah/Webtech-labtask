<?php
require("../model/model_profile.php");
$profile = profile($_SESSION['username']);
$username = $profile['username'];
$email =$profile['email'];
$signupdate=$profile['sign_up_date'];
?>

