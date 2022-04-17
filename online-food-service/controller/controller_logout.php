<?php
session_start();
Session_destroy();
header("location:../view/view_login.php");
?>