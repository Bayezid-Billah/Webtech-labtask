<?php require("view_header.php"); 
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script>
    function nameValidation() {
    if (document.getElementById("username").value === "") {
        document.getElementById("unameErr").innerHTML = "Username can't be blank";
        document.getElementById("username").style.outlineColor = "red";
    } else if (document.getElementById("username").value.length <= 2) {
        document.getElementById("unameErr").innerHTML = "Username must have at least 2 characters";
        document.getElementById("username").style.outlineColor = "red";
    } else {
        document.getElementById("unameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "black";

    }


    function passwordValidation() {
        if (document.getElementById("password").value == "") {
            document.getElementById("passErr").innerHTML = "Password can't be blank";
            document.getElementById("password").style.borderColor = "red";
        } else {
            document.getElementById("unameErr").innerHTML = "";
            document.getElementById("name").style.borderColor = "black";

        }
    }
}
</script>

<form method ="POST" action="../controller/controller_login.php">
<div class="col-md-4 col-sm-6 col-xs-12">
<fieldset>
      <legend>LOGIN</legend>
      <label for="username">User Name</label>
      <input type="text" id="username" name="username" value="<?php echo $_SESSION['username']; unset($_SESSION['username']); ?>"onkeyup ="nameValidation()"><p id="unameErr"></p><?php echo $unameErr?></span><br>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="<?php ?>"onkeyup ="passwordValidation()"><p id="passErr"></p><?php echo $passErr?></span><br>
      <input type="checkbox" id="me" name="remme">
      <label for="remme">Remember Me</label><br>
      <input type ="submit" name="login" value="Log In">
      <a href="forgot_password.php"><span class="blue">Forgot Password</span></a>
    </fieldset>
</div>
    <span>
    <?php if(isset($_SESSION['authentication-error'])){
        echo $_SESSION['authentication-error'];
        $_SESSION['authentication-error']="";}?></span>
    
    </span>
</form>
<?php require("foot.php");?>
