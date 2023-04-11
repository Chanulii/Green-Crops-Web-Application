<?php 
		include('config/connection.php') ;
      require_once('config/session.php') ;
	
 // $fullName="";
 // $pgAdminuserID = "";
 // $pgAdminfirstName = "";
 // $pgAdminlastName = "";
 // $pgAdminuserEmail = "";
 // $pgAdminuserN = "";
      
      
    $query = "SELECT * FROM `users` WHERE `userID` = '".$_SESSION['userID']."'";
    $results = mysqli_query($con, $query);
    while($row=mysqli_fetch_array($results))
      {
        $fullName = $row['firstName'] ." " .$row['lastName'];
        $pgAdminuserID = $row['userID'];
        $pgAdminfirstName = $row['firstName'];
        $pgAdminlastName = $row['lastName'];
        $pgAdminuserEmail = $row['userEmail'];
        $pgAdminuserN = $row['userN'];
        //contact
        $pgAdminaddress   =  $row['address'];
        $pgAdmincity      =  $row['city'];
        $pgAdmincountry   =  $row['country'];
        $pgAdminpostal_code=  $row['postal_code'];
        $pgAdmincontactNo =  $row['contactNo'];
        $pgAdminbank_name =  $row['bank_name']; 
        $pgAdminaccount_no=  $row['account_no'];

      
      }
        $time_img= rand(10,10000);
        $data1 = array(
        'fullName' => $fullName,
        'pgAdminuserID' => $pgAdminuserID,
        'pgAdminfirstName' => $pgAdminfirstName,
        'pgAdminlastName' => $pgAdminlastName,
        'pgAdminuserEmail' => $pgAdminuserEmail,
        'pgAdminuserN' => $pgAdminuserN,
        'pro_pic_src' => "assets/img/propic/".$_SESSION['userID'].".png?v=".$time_img,
        'pgAdminaddress' => $pgAdminaddress,
        'pgAdmincity' => $pgAdmincity,
        'pgAdmincountry' => $pgAdmincountry,
        'pgAdminpostal_code' => $pgAdminpostal_code,
        'pgAdmincontactNo' => $pgAdmincontactNo,
        'pgAdminbank_name' => $pgAdminbank_name,
        'pgAdminaccount_no' => $pgAdminaccount_no
        
          );
        echo json_encode($data1); 
 




?>


