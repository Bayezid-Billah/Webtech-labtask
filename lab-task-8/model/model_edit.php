<?php
require("../dbconnect.php");

function regUser($data){
    $q = q('UPDATE `users` SET `username` = "'.$data['reg_uname'].'",
                               `password` = "'.$data['reg_pass'].'",
                               `email` = "'.$data['reg_email'].'"
            WHERE username = "'.$_SESSION['username'].'"');
    
    $_SESSION['username'] = $data['reg_uname'];

    return $q !== false;
}

?>
