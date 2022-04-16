<?php require("view_header.php"); 
?>

<form method ="POST" action="../controller/controller_login.php">
<fieldset>
      <legend>LOGIN</legend>
      <label for="username">User Name</label>
      <input type="text" name="username" value="<?php echo $_SESSION['username']; unset($_SESSION['username']); ?>"><span class="red">&nbsp;<?php echo $unameErr?></span><br>
      <label for="password">Password</label>
      <input type="password" name="password" value="<?php ?>"><span class="red">&nbsp;<?php echo $passErr ?></span><br>
      <input type="checkbox" id="me" name="remme">
      <label for="remme">Remember Me</label><br>
      <input type ="submit" name="login" value="Log In">
      <a href="forgot_password.php"><span class="blue">Forgot Password</span></a>
    </fieldset>
    
    <span>
    <?php if(isset($_SESSION['authentication-error'])){
        echo $_SESSION['authentication-error'];
        $_SESSION['authentication-error']="";}?></span>
    
    </span>
</form>
<?php require("foot.php");?>