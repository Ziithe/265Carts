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

   // Check if any of the required fields are empty
    if (empty($Username) || empty($email) || empty($password) || empty($password2)) {
        header('Location: ../signUp.php?error=emptyfields&Username=' . $Username . '$email=' . $email);
        exit();
    }
    else{
        $query = "SELECT * FROM users WHERE email=:email AND Username = :Username";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
                'email'=>$_POST['email'],
                'Username'=>$_POST['Username']));

        $count = $statement->rowCount();

        if($count>0){
            $_SESSION['email'] = $_POST['email'];
            header('Location: ../signUp.php?error=exist');
            exit();
        }

        else{

            $query = "INSERT INTO users (Username, email, userpass)"."VALUES(?, ?, ?)";
            $statement = $conn->prepare($query);
            $result = $statement->execute([$Username, $email, $password]);

            //This condition checks if the email user submitted is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid Email Address!";
                session_start();
                header('Location: ../signUp.php?error=invalidemail&Username');
                exit();
            }

            //Check if the passwords match
            elseif ($password !== $password2) {
                echo "Passwords do not match!!";
                session_start();
                header('Location: ../signUp.php?error=password');
                exit();
            }

            if ($result) {
                echo "Sign Up Successful!";
                session_start();

                header('Location: ../index.php');
            } else {
                echo "Could not sign up!";
            }
        }
    }
}
