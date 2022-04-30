<?php
    require('../dbconnect.php');

    if(isset($_GET['username']))
    {
        $q = q('SELECT * FROM users WHERE username = "'.$_GET['username'].'"');

        if(mysqli_num_rows($q)>0)
            echo 'username exists';
        else echo '';
    }