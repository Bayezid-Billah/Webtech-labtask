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
    <li><a href="../view/view_cart.php">Cart</a></li>
    <li><a href="">History</a></li>
    <li><a href="../view/view_adduser.php">Register New User</a></li>
</ul>

<?php require("view_footer.php"); ?>