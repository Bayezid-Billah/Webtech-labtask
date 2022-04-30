<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    
    $con = mysqli_connect('localhost', 'root', '', 'webtech_ofs');

    if(mysqli_errno($con)!==0)
    die('Failed to connect to database.');

    function q($qry) {
        global $con;
        return mysqli_query($con, $qry);
    }
?>

    
