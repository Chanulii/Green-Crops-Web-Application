<?php
include('config/connection.php') ;


// initializing variables
$firstName = "";
$lastName = "";
$userEmail = "";
$userN = "";
$passcode = "";
$acType = "";
$contactNo = "";

$errors = array(); 

// connect to the database

$db = $con;

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    $userEmail = mysqli_real_escape_string($db, $_POST['userEmail']);
    $userN = mysqli_real_escape_string($db, $_POST['userN']);
    $acType = mysqli_real_escape_string($db, $_POST['acType']);
    $contactNo = mysqli_real_escape_string($db, $_POST['contactNo']);

    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_repeat']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstName)) { array_push($errors, "**FirstName is required"); }
  if (empty($lastName)) { array_push($errors, "**lastName is required"); }
  if (empty($userEmail)) { array_push($errors, "**Email is required"); }
  if (empty($userN)) { array_push($errors, "**Username is required"); }
  if (empty($acType)) { array_push($errors, "**acType is required"); }
  if (empty($contactNo)) { array_push($errors, "**ContactNo is required"); }

    if ($password_1 != $password_2) {
    array_push($errors, "**The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE userN='$userN' OR userEmail='$userEmail' LIMIT 1";
 // echo $user_check_query;
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userN'] === $userN) {
      array_push($errors, "**Username already exists");
    }

    if ($user['userEmail'] === $userEmail) {
      array_push($errors, "**email already exists");
    }
  }

  //select account type
  if ($acType === "none") {
      array_push($errors, "**Please Select the Account Type");
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO `users`(`firstName`,`lastName`, `userEmail`, `userN`, `passcode`, `acType`, `contactNo`) 
              VALUES(\"$firstName\",\"$lastName\", \"$userEmail\", \"$userN\", \"$password\", \"$acType\",\"$contactNo\")";
   //echo $query;
    $stmt=mysqli_prepare($db, $query);
    mysqli_stmt_execute($stmt);
     $check = mysqli_stmt_affected_rows($stmt);
     if($check==1){
        $firstName = "";
        $lastName = "";
        $userEmail = "";
        $userN = "";
        $passcode = "";
        $acType = "";
        $contactNo = "";
        header('location: login.php');
     }
     else{

     } 
    // header('location: register.php');
  }else{
    // echo '<pre>'; print_r($errors); echo '</pre>';
  }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body style="    background-color: #9e9e9e47">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>



                            <form class="user" method="post" action="register.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    	<input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="firstName" value="<?php echo $firstName; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                    	<input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Last Name" name="lastName" value="<?php echo $lastName; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                	<input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="userEmail" value="<?php echo $userEmail; ?>" required>
                                </div>

                                <div class="form-group">
                                    <input class="form-control form-control-user" type="text" id="exampleUserName" placeholder="User Name" name="userN" value="<?php echo $userN; ?>" required>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    	<input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                    	<input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_repeat">
                                    </div>

                                </div>
                                
                                <div class="form-group">
					                  <select class="form-control " name="acType" id="acType" style=" display: block; width: 100%;height: 45px; border-radius: 35rem; font-size: 1rem;" >
					                    <option value="none" disabled selected>--Account type--</option>
					                    <option value="SA" <?php if($acType =="SA" ){echo 'selected';} ?> >See add</option>
					                    <option value="PA" <?php if($acType =="PA" ){echo 'selected';} ?> >post add</option>
					                  </select>
					            </div>

					            <div class="form-group">
                                    <input class="form-control form-control-user" type="text" id="exampleContact" placeholder="Contact No" name="contactNo" value="<?php echo $contactNo; ?>" required>
                                </div>

					            <div class="form-group" style="background-color: lightblue; border-radius: 20px;">
					                  <div>
						                  <?php  if (count($errors) > 0) : ?>
						                    <div class="error">
						                      <?php foreach ($errors as $error) : ?>
						                        <p style="font-size: 15px;color: red;"><?php echo $error ?></p>
						                      <?php endforeach ?>
						                    </div>
						                  <?php  endif ?>
						                </div>
					            </div>


                                <button class="btn btn-primary btn-block text-white btn-user" type="submit"  name="reg_user">Register Account</button>
                               
                                <hr>
                            </form>

                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>

  <!-- form-control-user -->

