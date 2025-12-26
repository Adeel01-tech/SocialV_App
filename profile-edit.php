<?php

session_start();

include('includes/head.php');
include('includes/header.php');
include('includes/right-sidebar.php');
include("connection_db.php");

if (!isset($_SESSION['user_id'])) {
   
    header("Location: sign-in.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$user    = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user_tb WHERE id = '$user_id'"));


//manage contact 

if (!isset($_POST['submit_contact'])) {

    $contact = $user['contact_number'] ?? '';

    $url     = $user['url'] ?? '';

} else {

    $contact = mysqli_real_escape_string($conn, $_POST['contact'] ?? '');

    $url     = mysqli_real_escape_string($conn, $_POST['url'] ?? '');

    // contact update query

    mysqli_query($conn, "

    UPDATE user_tb SET contact_number = '$contact', url = '$url' WHERE id = '$user_id'");

    $user = mysqli_fetch_assoc(

        mysqli_query($conn, "SELECT * FROM user_tb WHERE id = '$user_id'")
    );
}

// profile form

$success = "";

if (isset($_POST['submit'])) {

    $first_name     = mysqli_real_escape_string($conn, $_POST['first_name'] ?? '');
    $last_name      = mysqli_real_escape_string($conn, $_POST['last_name'] ?? '');
    $username       = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
    $city           = mysqli_real_escape_string($conn, $_POST['city'] ?? '');
    $birth_date     = $_POST['birth_date'] ?? '';
    $gender         = mysqli_real_escape_string($conn, $_POST['gender'] ?? '');
    $marital_status = mysqli_real_escape_string($conn, $_POST['marital_status'] ?? '');
    $country        = mysqli_real_escape_string($conn, $_POST['country'] ?? '');
    $state          = mysqli_real_escape_string($conn, $_POST['state'] ?? '');
    $address        = mysqli_real_escape_string($conn, $_POST['address'] ?? '');
    $contact        = mysqli_real_escape_string($conn, $_POST['contact'] ?? '');
    $url            = mysqli_real_escape_string($conn, $_POST['url'] ?? '');

    $profile_pic = $user['profile_pic'] ?? '';

    if (!empty($_FILES['profile_pic']['name'])) {

        $ext = pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
        $profile_pic = "user_{$user_id}_" . time() . "." . $ext;
        
        $upload_dir = "../assets/images/users/";

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $upload_path = $upload_dir . $profile_pic;

        // Upload success check 
        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $upload_path)) {
        
        } else {

            $profile_pic = $user['profile_pic'] ?? '';
        }
    }

$update_sql = "UPDATE user_tb SET
    first_name='$first_name',
    last_name='$last_name',
    username='$username',
    city='$city',
    birth_date='$birth_date',
    gender='$gender',
    marital_status='$marital_status',
    country='$country',
    state='$state',
    address='$address',
    profile_pic='$profile_pic',
    contact_number='$contact',
    url='$url' WHERE id='$user_id'";

    if (mysqli_query($conn, $update_sql)) {

        $success = "Profile updated successfully!";

        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user_tb WHERE id = '$user_id'")
        
    );

    } else {
    
        die("Database Error: " . mysqli_error($conn));
    }
}

$photo = (!empty($user['profile_pic']) &&

    file_exists("../assets/images/users/" . $user['profile_pic'])) ? "assets/images/users/" . $user['profile_pic'] : "assets/images/user/01.jpg";


// change pass
$pass_error = "";
$pass_success = "";

if (isset($_POST['change_pass'])) {

    $old_pass     = $_POST['old_pass'] ?? '';
    $new_pass     = $_POST['new_pass'] ?? '';
    $confirm_pass = $_POST['confirm_pass'] ?? '';

    $result = mysqli_query($conn,"SELECT password FROM user_tb WHERE id = '$user_id'"
    
);

    $row = mysqli_fetch_assoc($result);
    $hashed_db_pass = $row['password'] ?? '';

    if (!password_verify($old_pass, $hashed_db_pass)) {

        $pass_error = "Current password is wrong";
    }
    elseif ($new_pass != $confirm_pass) {

        $pass_error = "New password and Confirm password not match";
    }
    elseif (strlen($new_pass) < 6) {

        $pass_error = "New password required must be 6 character!";
    }

    else {

        $new_hashed_pass = password_hash($new_pass, PASSWORD_DEFAULT);

        $update = mysqli_query(
            $conn,
            "UPDATE user_tb SET password='$new_hashed_pass' WHERE id='$user_id'"
        );

        if ($update) {
            $pass_success = "Password successfully change";
        } else {
            $pass_error = "Database error";
        }
    }
}


?>



             <div class="right-sidebar-mini right-sidebar">
           <div class="right-sidebar-panel p-0">
              <div class="card shadow-none">
                 <div class="card-body p-0">
                    <div class="media-height p-3" data-scrollbar="init">
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-online">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Greta Life</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-away">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Ira Membrit</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center">
                          <div class="iq-profile-avatar">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Monty Carlo</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                    </div>
                    <div class="right-sidebar-toggle bg-primary text-white mt-3">
                       <i class="ri-arrow-left-line side-left-icon"></i>
                       <i class="ri-arrow-right-line side-right-icon"><span class="ms-3 d-inline-block">Close Menu</span></i>
                    </div>
                 </div>
              </div>
           </div>
        </div>       <div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="iq-edit-list">
                            <ul class="iq-edit-profile row nav nav-pills">
                                <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                                        Personal Information
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                        Change Password
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-bs-toggle="pill" href="#emailandsms">
                                        Email and SMS
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-bs-toggle="pill" href="#manage-contact">
                                        Manage Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                       <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Personal Information</h4>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group row align-items-center">
                    <div class="col-md-12">
                        <div class="profile-img-edit">
                            <img class="profile-pic" 
                                 src="<?php echo !empty($photo) ? '../'.$photo : '../assets/images/user/11.png'; ?>" 
                                 alt="profile-pic">
                            <div class="p-image">
                                <i class="ri-pencil-line upload-button text-white"></i>
                                <input class="file-upload" type="file" name="profile_pic" accept="image/*"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-6">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="fname" name="first_name" placeholder="Bni">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="lname" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lname" name="last_name" placeholder="Jhon">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="uname" class="form-label">User Name:</label>
                        <input type="text" class="form-control" id="uname" name="username" placeholder="Bni@01">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="cname" class="form-label">City:</label>
                        <input type="text" class="form-control" id="cname" name="city" placeholder="Atlanta">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label d-block">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio10" value="Male">
                            <label class="form-check-label" for="inlineRadio10">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio11" value="Female">
                            <label class="form-check-label" for="inlineRadio11">Female</label>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="dob" class="form-label">Date Of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label">Marital Status:</label>
                        <select class="form-select" name="marital_status" aria-label="Default select example">
                            <option selected>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                            <option>Divorced</option>
                            <option>Separated</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label">Age:</label>
                        <select class="form-select" name="age" aria-label="Default select example 2">
                            <option>46-62</option>
                            <option>63 ></option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label">Country:</label>
                        <select class="form-select" name="country" aria-label="Default select example 3">
                            <option>Canada</option>
                            <option>Noida</option>
                            <option selected>USA</option>
                            <option>India</option>
                            <option>Africa</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label">State:</label>
                        <select class="form-select" name="state" aria-label="Default select example 4">
                            <option>California</option>
                            <option>Florida</option>
                            <option selected>Georgia</option>
                            <option>Connecticut</option>
                            <option>Louisiana</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="form-label">Address:</label>
                        <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                        37 Cardinal Lane
                        Petersburg, VA 23803
                        United States of America
                        Zip Code: 85001
                        </textarea>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn bg-soft-danger">Cancel</button>
            </form>
        </div>
    </div>
</div>

<div class="tab-pane fade" id="chang-pwd" role="tabpanel">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Change Password</h4>
            </div>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="cpass" class="form-label">Current Password:</label>
                    <a href="#" class="float-end">Forgot Password</a>
                    <input type="password" class="form-control" name="old_pass" id="cpass">
                </div>
                <div class="form-group">
                    <label for="npass" class="form-label">New Password:</label>
                    <input type="password" class="form-control" name="new_pass" id="npass">
                </div>
                <div class="form-group">
                    <label for="vpass" class="form-label">Verify Password:</label>
                    <input type="password" class="form-control" name="confirm_pass" id="vpass">
                </div>
                <button type="submit" name="change_pass" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn bg-soft-danger">Cancel</button>
            </form>
        </div>
    </div>
</div>

<div class="tab-pane fade" id="emailandsms" role="tabpanel">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Email and SMS</h4>
            </div>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group row align-items-center">
                    <label class="col-md-3" for="emailnotification">Email Notification:</label>
                    <div class="col-md-9 form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="email_notification" id="flexSwitchCheckChecked11" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked11">Checked switch checkbox input</label>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                    <div class="col-md-9 form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="sms_notification" id="flexSwitchCheckChecked12" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked12">Checked switch checkbox input</label>
                    </div>
                 </div>
                                                     <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="npass">When To Email</label>
                                        <div class="col-md-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                <label class="form-check-label" for="flexCheckDefault12">
                                                    You have new notifications.
                                                </label>
                                            </div>
                                            <div class="form-check d-block">
                                                <input class="form-check-input" type="checkbox" value="" id="email02">
                                                <label class="form-check-label" for="email02">You're sent a direct message</label>
                                            </div>
                                            <div class="form-check d-block">
                                                <input type="checkbox" class="form-check-input" id="email03" checked="">
                                                <label class="form-check-label" for="email03">Someone adds you as a connection</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                        <div class="col-md-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="email04">
                                                <label class="form-check-label" for="email04">
                                                    Upon new order.
                                                </label>
                                            </div>
                                            <div class="form-check d-block">
                                                <input class="form-check-input" type="checkbox" value="" id="email05">
                                                <label class="form-check-label" for="email05">New membership approval</label>
                                            </div>
                                            <div class="form-check d-block">
                                                <input type="checkbox" class="form-check-input" id="email06" checked="">
                                                <label class="form-check-label" for="email06">Member registration</label>
                                            </div>
                                        </div>
                                    </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn bg-soft-danger">Cancel</button>
            </form>
        </div>
    </div>
</div>

<div class="tab-pane fade" id="manage-contact" role="tabpanel">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Manage Contact</h4>
            </div>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="cno" class="form-label">Contact Number:</label>
                    <input type="text" class="form-control" name="contact" id="cno" value="<?php echo htmlspecialchars($user['contact'] ?? '001 2536 123 458'); ?>">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($user['email'] ?? 'Bnijone@demo.com'); ?>">
                </div>
                <div class="form-group">
                    <label for="url" class="form-label">Url:</label>
                    <input type="text" class="form-control" name="url" id="url" value="<?php echo htmlspecialchars($user['url'] ?? 'https://getbootstrap.com'); ?>">
                </div>
                <button type="submit" name="submit_contact" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn bg-soft-danger">Cancel</button>
            </form>
                           </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>

    <!-- Wrapper End-->

<?php include('includes/footer.php')?>    
<?php include('includes/scripts.php')?>    

    <!-- offcanvas start -->