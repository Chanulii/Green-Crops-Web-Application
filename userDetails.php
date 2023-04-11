<?php
include('config/connection.php') ;



if (!isset($_SESSION['userID'])) 
 {
    include('config/session.php') ;;
 }
 


// LOGIN USER
$errors = array(); 
$db = $con;
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password1 = md5($password);
    $query = "SELECT * FROM `users` WHERE `userN` = \"$username\"  AND `passcode`= \"$password1\" ";
    //echo $query;
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      while($row=mysqli_fetch_array($results))
      {
    
      $_SESSION['userID'] = $row['userID'];
      $userIDD = $_SESSION['userID'] ;

     
      $usertype = $row['acType'] ;

      $_SESSION['success'] = "You are now logged in";	
      }

      if ($usertype == "admin") {
       header('location: admin/Dashbord');
      }
      else if ($usertype == "SA") {
       header('location: adminSA/index.php');
      }
      else if ($usertype == "PA") {
       header('location: admin.php');
      }
    }
    else 
    {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
// foreach ($errors as $result) {
//     echo $result; 
//     echo "<br>";
// } 

?>


