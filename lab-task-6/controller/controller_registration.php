<?php
    require('../model/model_registration.php');
    regUser($_POST);
    header("location:../view/view_registration.php");
?>

