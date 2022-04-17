<?php require("view_header.php"); ?>
<?php require("view_edit.php");?>
<?php require("../model/model_view_profile.php");?>
<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php
// var_dump($_SESSION["username"]);

$name=$_SESSION["username"];
$userinfo = user_information($name);
foreach ($userinfo as $i){
    echo "$i <br>";
}
?>