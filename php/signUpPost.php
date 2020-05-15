<?php
include('connection.php');

if (isset($_POST['signUpButton'])) {

    $Username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    RegisterClientByPDO($Username, $email, $password, $password2);
}
else{
    header("Location: ../signUp.php");
    exit();
}