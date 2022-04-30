
<?php
require("../dbconnect.php");

function profile($username){
    $q = q("SELECT * FROM `users` WHERE `username` = '$username';");
    return mysqli_fetch_array($q);
}
?>