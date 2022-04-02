<?php
require_once('../frontend/db.php');
require_once('../functions.php');
$sign_up = $_POST['sign_up'];
if (isset($sign_up))
    add_us();
//header("Location: /admin/sign-in.php");
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Aero Bootstrap4 Admin :: Sign Up</title>
    <!-- Favicon-->
    <link rel="icon" href="../admin/favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../admin/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/assets/css/style.min.css">
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form action="sign-up.php" method="post" class="card auth_form">
                    <div class="header">
                        <img class="logo" src="/admin/assets/images/logo.svg" alt="">
                        <h5>Sign Up</h5>
                        <span>Register a new membership</span>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input name="login" type="text" class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="email" type="text" class="form-control" placeholder="Enter Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of
                                    usage</a></label>
                        </div>
                        <button name="sign_up" class="btn btn-primary btn-block waves-effect waves-light">SIGN UP
                        </button>
                        <div class="signin_with mt-3">
                            <a class="link" href="sign-in.php">You already have a membership?</a>
                        </div>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    ,
                    <span>Designed by <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="../admin/assets/images/signup.svg" alt="Sign Up"/>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Jquery Core Js -->
<script src="../admin/assets/bundles/libscripts.bundle.js"></script>
<script src="../admin/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>