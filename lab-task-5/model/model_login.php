<?php
require("../dbconnect.php");

function user_authentication($username, $password){
    $q = q("SELECT * FROM `users` WHERE `username` = '$username';");
    return mysqli_fetch_array($q);
}
?>