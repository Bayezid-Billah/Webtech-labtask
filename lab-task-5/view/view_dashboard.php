<?php require("../view/view_header.php"); ?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
if(!isset($_SESSION["username"])){
    header("location:view_login.php");
}
?>
<ul>
    <li><a href="../view/view_dashboard.php">Dashboard</a></li>
    <li><a href="../view/view_profile.php">Profile</a></li>
    <li><a href="../view/view_food.php">Order Food</a></li>
    <li><a href="../view/data.json" target="_blank" >Cart</a></li>
    <li><a href="../history.json" target="_blank" >History</a></li>
    <li><a href="../view/view_registration.php">Register New User</a></li>
</ul>

<?php require("view_footer.php"); ?>