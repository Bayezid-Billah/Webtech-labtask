<?php require("view_header.php"); ?>
<link rel="stylesheet" href="../css/bootstrap.min.css">

<script>
    function _(e) {
        return document.getElementById(e);
    }

function check() {
    var error = '';
    // var error2='';
    
    if (_("reg_pass").value !== _("reg_cpass").value) {
        error += '<div>Passwords dont match</div>';
    }

    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        _('error').innerHTML += xhttp.responseText;    
        // _('error2').innerHTML += xhttp.responseText;   
    }

    xhttp.open("GET", "../controller/controller_email_check.php?email=" + _('reg_email').value );
    // xhttp.open("GET", "../controller/controller_username_check.php?email=" + _('reg_email').value );

    xhttp.send();

    _('error').innerHTML = error;    
}

</script>


<form method="POST" action="../controller/controller_registration.php">

    <br>
    <fieldset>
        <div id="error"></div>
        <div id="error2"></div>
        <legend>Update Information</legend>
        <label for="reg_email">Email</label>
        <input type="text" id="reg_email" name="reg_email" value="<?php echo $reg_email;?>" onblur="check()"><br>
        <label for="reg_uname">User Name</label>
        <input type="text" id="reg_uname" name="reg_uname" value="<?php echo $reg_uname;?>" onblur="check()"><br>
        <label for="reg_pass">Password</label>
        <input type="password" id="reg_pass" name="reg_pass" value="<?php echo $reg_pass;?>" onblur="check()"><br>
        <label for="reg_cpass">Confirm Password</label>
        <input type="password" id="reg_cpass" name="reg_cpass" value="<?php echo $reg_cpass;?>" onblur="check()">



    </fieldset><br>
    <input type="submit" name="adduser" value="Update">
    <div id="added"></div>


</form>