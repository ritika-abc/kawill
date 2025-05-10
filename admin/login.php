<?php

// 
session_start();
ob_start();
include "config.php";

if (isset($_POST['submit'])) {
    $name = test_input($_POST['name']);
    $password = test_input($_POST['password']);
    $email = test_input($_POST['email']);

    $result = mysqli_query($con, "select * 
     from user WHERE name='$name' and password='$password'and email='$email'");
    $user_matched = mysqli_num_rows($result);
    if ($user_matched > 0) {
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;


        header("location:index.php");
    } else {
        echo "not matched !!!!";
    }
}


function test_input($data)
{
    $data = preg_replace('/\s+/', ' ', $data); // Replace multiple spaces with a single space
    $data = trim($data);

    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html class="h-100" lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Kawill Automation

    </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="quixlab-adminpanel/assets/images/favicon.html">
    <link href="quixlab-adminpanel/css/style.css" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <div class="text-center">
                                    <img src="../assets/image/logo/logo.jpg" height="auto" width="30%" alt="">
                                </div>
                                <a class="text-center" href="/">
                                    <h4>Kawill Automation</h4>
                                </a>

                                <form class="mt-5 mb-5 login-input" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit" name="submit">Login</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="quixlab-adminpanel/plugins/common/common.min.js"></script>
    <script src="quixlab-adminpanel/js/custom.min.js"></script>
    <script src="quixlab-adminpanel/js/settings.js"></script>
    <script src="quixlab-adminpanel/js/gleek.js"></script>
    <script src="quixlab-adminpanel/js/styleSwitcher.js"></script>

</body>

<!-- Mirrored from themewagon.github.io/quixlab/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 12:32:56 GMT -->

</html>