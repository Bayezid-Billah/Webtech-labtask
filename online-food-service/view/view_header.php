<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
              <h1>Online Food Delivery</h1>
                <ul>
                    <?php if(isset($_SESSION['username'])){ ?>
                    <li><?php echo "Logged in as "?><a href="#"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="logout.php">Logout</a></li>
                    
                    <?php }else{ ?>
                    <li><a href="">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="adduser.php">Registration</a></li>
                <?php } ?>
                
                </ul>
</body>
</html>