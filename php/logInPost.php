<?php

session_start();
require 'connection.php';

if (isset($_POST['logInButton'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if any of the required fields are empty
    LogInClient($email, $password);

}
else{
    header("Location: ../logIn.html");
    exit();
}