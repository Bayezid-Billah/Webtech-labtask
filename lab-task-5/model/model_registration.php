<?php
require("../dbconnect.php");

function regUser($data){
    $d = date('Y-m-d H:i:s');
    $q = q('INSERT INTO `users`(`username`, `password`, `email`, `sign_up_date`) VALUES ("'.$data['reg_uname'].'", "'.$data['reg_pass'].'", "'.$data['reg_email'].'", "'.$d.'")');
    return $q !== false;
}

?>