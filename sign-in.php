<?php

session_start();

include("connection_db.php");

$message = "";

if(isset($_POST['submit'])){
  
    $email = trim($_POST['email']);
  
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);
  
    $check = mysqli_query($conn, "SELECT * FROM user_tb WHERE email='$email'");

    if(mysqli_num_rows($check) > 0){
  
        $user = mysqli_fetch_assoc($check);

        if($user['verification_status'] == 0){
  
            $message = "<div class='alert alert-warning'>Please verify your email first!</div>";
        }
  
        elseif(password_verify($password, $user['password'])){
            $_SESSION['email'] = $user['email'];
            $_SESSION['name']  = $user['name'];
            $_SESSION['user_id'] = $user['id'];
  
            header("Location: index.php");
            exit();
  
        } else {
  
            $message = "<div class='alert alert-danger'>Incorrect password!</div>";
        }
    } else {
  
        $message = "<div class='alert alert-danger'>Email not found!</div>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SocialV | Sign In</title>
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
    <link rel="stylesheet" href="/assets/css/libs.min.css">
    <link rel="stylesheet" href="/assets/css/socialv.css?v=4.0.0">
    <link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="/assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="/assets/vendor/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
</head>
<body class=" ">
    <div id="loading"><div id="loading-center"></div></div>
    
    <div class="wrapper">
    <section class="sign-in-page">
        <div id="container-inside">
            <div id="circle-small"></div>
            <div id="circle-medium"></div>
            <div id="circle-large"></div>
            <div id="circle-xlarge"></div>
            <div id="circle-xxlarge"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-center pt-5">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="#"><img src="/assets/images/logo-full.png" class="img-fluid" alt="logo"></a>
                        <div class="sign-slider overflow-hidden ">
                            <ul class="swiper-wrapper list-inline m-0 p-0 ">
                                <li class="swiper-slide">
                                    <img src="/assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                </li>
                                <li class="swiper-slide">
                                    <img src="/assets/images/login/2.png" class="img-fluid mb-4" alt="logo"> 
                                    <h4 class="mb-1 text-white">Connect with the world</h4>
                                </li>
                                <li class="swiper-slide">
                                    <img src="/assets/images/login/3.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Create new events</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Sign in</h1>
                        <p>Enter your email address and password to access admin panel.</p>

                        <?php echo $message; ?>

                        <form class="mt-4" method="POST">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control mb-0" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control mb-0" placeholder="Password" required>
                            </div>
                            <div class="d-inline-block w-100">
                                <button type="submit" name="submit" class="btn btn-primary float-end">Sign in</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="sign-up.php">Sign up</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    </div>
    
 <?php include('includes/scripts.php');?>
