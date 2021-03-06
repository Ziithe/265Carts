<!DOCTYPE html>
<html>
<head>
    <title>+265Carts Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/log%20in.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- //web font -->

    <!-- Favicon -->
    <link href="img/favicon.png" rel="shortcut icon"/>

</head>
<body>
<!-- main -->
<div class="main-w3layouts wrapper">
    <h1>+265Carts Log In </h1>
    <h1><i>Welcome Back</i></h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <?php
            session_start();

            if (isset($_GET['error=logOut'])==true) {
                echo '<font color="#f0ffff>" <h2 align="center">Please Log In First </h2></font color>';
            }
            if (isset($_GET['error=1'])==true){
                echo '<font color="#f0ffff>" <p align="center">Incorrect Email or Password</p></font color>';
            }
            ?>
            <form action="php/logInPost.php" method="post" >
                <input class="text" type="text" name="email" placeholder="Email" required="">
                <input class="text" type="password" name="password" placeholder="Password" required="">

                <input type="submit" name="logInButton" value="LOG IN">
            </form>
            <p>Don't have an Account? <a href="signUp.php"> Sign Up Now!</a></p>
        </div>
    </div>
    <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- //main -->
</body>
</html>
