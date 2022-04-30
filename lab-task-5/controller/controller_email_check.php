<?php
    require('../dbconnect.php');

    if(isset($_GET['email']))
    {
        $q = q('SELECT * FROM users WHERE email = "'.$_GET['email'].'"');

        if(mysqli_num_rows($q)>0)
            echo 'email exits';
        else echo '';
    }