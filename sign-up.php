<?php


require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$success = "";
$errors = [];

$name_error = $email_error = $password_error = $confirm_error = $general_error = "";

if(isset($_POST['submit'])){

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirmpassword'] ?? '';

    if(empty($name) || empty($email) || empty($password) || empty($confirm)){

        $general_error = "All fields required!";
    }

    // Password match
    if($password !== $confirm){
        $confirm_error = "Password and Confirm Password do not match!";
    }

    // Password character 
    if(strlen($password) < 6){
    
        $password_error = "Password must be at least 6 characters!";
    }

    if(!preg_match('/[A-Z]/', $password)){
    
        $password_error = "Password must contain at least one uppercase letter!";
    }
    
    if(!preg_match('/[a-z]/', $password)){
    
        $password_error = "Password must contain at least one lowercase letter!";
    }
    
    if(!preg_match('/[\W]/', $password)){  // Special character
    
        $password_error = "Password must contain at least one special character!";
    }

    $check = mysqli_query($conn, "SELECT * FROM user_tb WHERE email='$email'");
    
    if(mysqli_num_rows($check) > 0){
    
        $email_error = "Email already registered!";
    }

    if(empty($general_error) && empty($password_error) && empty($confirm_error) && empty($email_error)){
    
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
        $verification_code = md5(rand() . time());

        $insert = mysqli_query($conn, "INSERT INTO user_tb 
    
            (name, email, password, verification_code, verification_status, created_at) 
    
            VALUES ('$name', '$email', '$hashed_password', '$verification_code', 0, NOW())");

        if($insert){
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'mehdi12502@gmail.com';
                $mail->Password   = 'chxpbqekbpwjnhrw';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;
                $mail->setFrom('mehdi12502@gmail.com', 'SocialV');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Verify Your SocialV Account';
                $mail->Body    = "<h3>Hello $name,</h3><p>Click below to verify your email:</p>
                                  <a href='http://localhost//verify.php?code=$verification_code' 
                                     style='background:#4361ee;color:white;padding:15px 30px;text-decoration:none;border-radius:8px;'>
                                     Verify Email Now
                                  </a>";

                $mail->send();
                $success = "Registration successful! Please check your email to verify your account.";
            } catch (Exception $e) {
                $success = "Registered successfully but email not sent.";
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SocialV | Sign Up</title>
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
    <link rel="stylesheet" href="/assets/css/libs.min.css">
    <link rel="stylesheet" href="/assets/css/socialv.css?v=4.0.0">
    <link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="/assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="/assets/vendor/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
</head>
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
                        <div class="sign-slider overflow-hidden">
                            <ul class="swiper-wrapper list-inline m-0 p-0">
                                <li class="swiper-slide"><img src="/assets/images/login/1.png" class="img-fluid mb-4" alt="logo"><h4 class="mb-1 text-white">Find new friends</h4></li>
                                <li class="swiper-slide"><img src="/assets/images/login/2.png" class="img-fluid mb-4" alt="logo"><h4 class="mb-1 text-white">Connect with the world</h4></li>
                                <li class="swiper-slide"><img src="/assets/images/login/3.png" class="img-fluid mb-4" alt="logo"><h4 class="mb-1 text-white">Create new events</h4></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5 pb-5">
                    <div class="sign-in-from">

                        <?php if($success): ?>
                            <div class="alert alert-success text-center"><?php echo $success; ?></div>
                        <?php endif; ?>

                        <?php if($general_error): ?>
                            <div class="alert alert-danger text-center"><?php echo $general_error; ?></div>
                        <?php endif; ?>

                        <h1 class="mb-0">Sign Up</h1>
                        <p>Enter your details to create your account</p>

                        <form class="mt-4" method="POST">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control mb-0 <?php echo $general_error ? 'is-invalid' : ''; ?>" 
                                       placeholder="Your Full Name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
                                <?php if($general_error): ?>
                                    <div class="invalid-feedback">
                                        This field is required!
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control mb-0 <?php echo $email_error || $general_error ? 'is-invalid' : ''; ?>" 
                                       placeholder="Enter email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                                <?php if($general_error): ?>
                                    <div class="invalid-feedback">This field is required!</div>
                                <?php elseif($email_error): ?>
                                    <div class="invalid-feedback"><?php echo $email_error; ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control mb-0 <?php echo $password_error || $general_error ? 'is-invalid' : ''; ?>" 
                                       placeholder="Password" required>
                                <?php if($general_error): ?>
                                    <div class="invalid-feedback">This field is required!</div>
                                <?php elseif($password_error): ?>
                                    <div class="invalid-feedback"><?php echo $password_error; ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirmpassword" class="form-control mb-0 <?php echo $confirm_error || $general_error ? 'is-invalid' : ''; ?>" 
                                       placeholder="Confirm Password" required>
                                <?php if($general_error): ?>
                                    <div class="invalid-feedback">This field is required!</div>
                                <?php elseif($confirm_error): ?>
                                    <div class="invalid-feedback"><?php echo $confirm_error; ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="d-inline-block w-100">
                                <button type="submit" name="submit" class="btn btn-primary float-end">Sign Up</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Already Have Account? <a href="sign-in.php">Log In</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

<?php include('includes/scripts.php');?> -->
<!-- .. -->