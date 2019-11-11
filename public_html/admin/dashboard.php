<?php
session_start();

$config = include ($_SERVER["DOCUMENT_ROOT"] . '/app/Config/config.php');
$token = $config['token'];

if (isset($_SESSION['token']) && $_SESSION['token'] == $token) {

    if(isset($_POST['logout'])){
        unset($_SESSION['token']);
        header('Location: /admin/auth');
    }

    echo ('<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <title>Material Design Bootstrap</title>
                <!-- Font Awesome -->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
                <!-- Bootstrap core CSS -->
                <link href="resources/assets/css/bootstrap.min.css" rel="stylesheet">
                <!-- Material Design Bootstrap -->
                <link href="resources/assets/css/mdb.css" rel="stylesheet">
                <!-- Login component styles -->
                <link href="resources/assets/css/login.css" rel="stylesheet">
            </head>
            
            <!--<body>-->
            
            <!-- Start your project here-->
             <form method="post">
                <input type="submit" name="logout" value="Logout">
             </form>
            <!-- End your project here-->
            
            <!-- JQuery -->
            <script type="text/javascript" src="resources/assets/js/jquery-3.4.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="resources/assets/js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="resources/assets/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="resources/assets/js/mdb.min.js"></script>
            <!--Login component JavaScript-->
            <script type="text/javascript" src="resources/assets/js/login.js"></script>
            <!--Ajax login request JavaScript-->
            <script type="text/javascript" src="resources/assets/js/login-ajax.js"></script>
            <!--</body>-->
            
            </html>');
} else {
    header('Location: https://skeleton-telegram-bot.000webhostapp.com/admin/auth');
}
?>