<?php
session_start();

$config = include ($_SERVER["DOCUMENT_ROOT"] . '/app/Config/config.php');
$token = $config['token'];

if (isset($_SESSION['token']) && $_SESSION['token'] == $token) {
    header("Location: /admin/dashboard");
} else {
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
            <div class="container">
                <div class="d-flex vh-100">
                    <div class="d-flex w-100 justify-content-center align-self-center">
                        <div id="loginPanel" class="card w-25">
                            <div class="card-header bg-primary text-center text-white">
                                <i id="spinner" class="fas fa-robot fa-2x"></i>
                            </div>
                            <form method="post" action="/" onsubmit="return doLogin();">
                                <div class="card-body pt-0">
                                    <div id="loginForm" class="md-form">
                                        <input type="text" id="loginInput" class="form-control">
                                        <label id="validLoginLabel" for="loginInput">Login</label>
                                    </div>
                                    <div id="passwordForm" class="md-form">
                                        <input type="password" id="passwordInput" class="form-control">
                                        <label id="validPasswordLabel" for="passwordInput">Password</label>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                                <button id="loginBtn" type="submit" class="btn btn-outline-primary waves-effect">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
}
?>
