<?php
session_start();
require("../model/model_login.php");
$err = $name = $pass = "";

// var_dump($_POST);

unset($_SESSION['authentication-error']);

if (isset($_POST['login'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['username'];
        $remme = false;

        if (isset($_POST['remme'])) {
            $remme = true;
        }

        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $_SESSION['authentication-error'] = "Both Username and Password are required";
            header("location:../view/view_login.php");
        }
        
        $data = user_authentication($name, $pass);
        
        if($data != null) {

            if ($name == $data["username"] && password_verify($_POST["password"], $data["password"])) 
            {
                $_SESSION["username"] = $data["username"];

                if ($remme) {
                    setcookie("username", $name, time() + 60*15, "/");
                }
                header("location: ../view/view_dashboard.php");
            }
            else {
                $_SESSION['username'] = $name;
                $_SESSION['authentication-error'] =  "Username and password are not matched";
                header("location: ../view/view_login.php");
            }
        } 
        else
        {
            header("location:../view/view_login.php");
        }
    }
}
