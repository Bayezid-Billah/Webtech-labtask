<?php

$name=$_SESSION["username"];
$userinfo = user_information($name);

$_SESSION["username"] = $userinfo["username"];
$_SESSION["email"] = $data["email"];
?>
