
<?php
    require('../model/model_edit.php');
    regUser($_POST);
    header("location:../view/view_edit.php");
?>

