<?php
session_start();
include('database.php');

$dbhost = "us-cdbr-east-06.cleardb.net";
$dbuser = "be62d97ed836ba";
$dbpass = "9dc7e225";
$dbname = "heroku_6c6bbf07cf6c7ad";
$message = "";

$conn = PDODBConnect($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['logInButton'])){

    if (empty($_POST['email']) || empty($_POST['password'])){
        $GLOBALS['$message'] = '<label>All fields are required</label>';}

    else{

        $query = "SELECT * FROM users WHERE email=:email AND userpass = :password";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
                'email'=>$_POST['email'],
                'password'=>$_POST['password']));

        $count = $statement->rowCount();

        if($count>0){
            session_start();
            $_SESSION['email'] = $_POST['email'];
            header('Location: ../profile.php');
            exit();
        }
        else{
            header("Location: ../logIn.php?error=1");
            exit();
        }
    }

}
else{
    header("Location: ../logIn.php");
    exit();
}