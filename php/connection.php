<?php
require 'database.php';

//Prep for DB Connection:
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "+265carts";
$message = "";


function RegisterClientByPDO($Username, $email, $password, $password2) {
    echo 'RegisterClientByPDO()';
    $conn = PDODBConnect($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);
    $hashedPass = password_hash($password, md5($password)) ;

    $query = "INSERT INTO users (Username, email, userpass)"."VALUES(?, ?, ?)";
    $statement = $conn->prepare($query);
    $result = $statement->execute([$Username, $email, $hashedPass]);

   // Check if any of the required fields are empty
    if (empty($Username) || empty($email) || empty($password) || empty($password2)) {
        header('Location: ../signUpPost?error=emptyfields&Username=' . $Username . '$email=' . $email);
        exit();
    }

//    //This condition checks if the email user submitted is valid
//    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        header('Location: ../signUpPost?error=invalidemail&Username=' . $Username);
//        exit();
//    }

    //Check if the passwords match
    elseif ($password !== $password2) {
        echo "Passwords do not match!!";
        session_start();

        header('Location: ../signUp.html');
        exit();
    }
    if ($result) {
        echo "Sign Up Successful!";
        session_start();

        header('Location: ../index.html');

    } else {
        echo "Could not sign up!";

    }
}

function LogInClient($email, $password){
    echo $email;
    $conn = PDODBConnect($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);

    if (empty($_POST['email']) || empty($_POST['password'])){
        $GLOBALS['$message'] = '<label>All fields are required</label>';
    }
    else{

        $query = "SELECT * FROM users WHERE email=$email AND userpass=$password";
        $statement = $conn->prepare($query);
        $statement->execute([$email, $password]);
        $count = $statement->rowCount();
        echo $count;
        if($count>0){
            echo 'Successfully logged in';
            $_SESSION['email'] = $_POST['email'];
            header('Location: ../index.html');
        }
        else{
            $GLOBALS['$message'] = '<label> Wrong Email or Password</label>';
        }
    }
}
