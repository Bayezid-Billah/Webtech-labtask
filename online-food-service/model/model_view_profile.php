<?php
require("../dbconnect.php");

function user_information($username){
    $q = q("SELECT username,email FROM `users` WHERE `username` = '$username';");
    return mysqli_fetch_array($q);
}
?>