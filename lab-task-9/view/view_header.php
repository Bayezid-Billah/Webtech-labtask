<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<style>
body {
 background-image: url("../images/red.png");
 background-repeat: no-repeat;
 background-size: cover;
}
</style>
<head>

</head>

<body>

    <nav id="header-nav" class="navbar navbar-default">
        <h1>Online Food Delivery</h1>
        <div class="float-right">
            <ul>
                <?php if(isset($_SESSION['username'])){ ?>
                <li><a href="../view/view_dashboard.php">Home</a></li>
                <li><?php echo "Logged in as "?><a href="../view/view_profile.php"><?php echo $_SESSION['username']; ?></a></li>
                <li><a href="../controller/controller_logout.php">Logout</a></li>

                <?php }else{ ?>
                <li><a href="/view/view_dashboard.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="view_adduser.php">Registration</a></li>
                <?php } ?>
        </div>
        </ul>
    </nav>
</body>

</html>