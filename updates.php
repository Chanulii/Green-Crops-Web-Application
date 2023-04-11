<?php 
include('config/connection.php');
//$con = mysqli_connect('localhost','root','','cd_earn') or die('Unable To connect'); 

// user setting
    if (isset($_POST['first_name']) && isset($_POST['email'])) {     
        // sanitizing the input
        $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
         $last_name     = mysqli_real_escape_string($con, $_POST['last_name']);
         $email     = mysqli_real_escape_string($con, $_POST['email']);
         $userID = mysqli_real_escape_string($con, $_POST['userID']);

        // basic validation
        if ( trim($first_name) == '' || trim($last_name) == '' || trim($email) == '' ) {
            echo "error1";
            exit;
        }

        // preparing query to add the records
        $query     = "UPDATE `users` SET 
                        `firstName`='{$first_name}',
                        `lastName`='{$last_name}',
                        `userEmail`='{$email}' 
                        WHERE `userID` = '{$userID}'";

        $result    = mysqli_query($con, $query);

        // checking if record added successfully
        if ( mysqli_affected_rows($con) > 0 ) {
            echo "record-added";
            exit;
        } else {
            echo "error2";
            exit;
        }
    }










//profile picture
    if(isset($_FILES['pro_picbut_upload']['name'])){
      /* Getting file name */
       $filename = $_POST['userID2'].".png";
       $tmp_name = $_FILES['pro_picbut_upload']['tmp_name'];



       /* Location */
       $location = "assets/img/propic/".$filename;
       $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
       $imageFileType = strtolower($imageFileType);

       /* Valid extensions */
       $valid_extensions = array("jpg","jpeg","png");

       $response = 0;
       /* Check file extension */
       if(in_array(strtolower($imageFileType), $valid_extensions)) {
          /* Upload file */
          if(move_uploaded_file($tmp_name,$location)){
             $response = $location;
          }
       }

       echo $response;
       exit;
    }












// Contact setting
    if (isset($_POST['address']) &&
          isset($_POST['city']) &&
          isset($_POST['country']) &&
          isset($_POST['postal']) &&
          isset($_POST['contact']) &&
          isset($_POST['bank']) &&
          isset($_POST['accountno'])) {     
       

        // sanitizing the input
          $address = mysqli_real_escape_string($con, $_POST['address']);
          $city = mysqli_real_escape_string($con, $_POST['city']);
          $country = mysqli_real_escape_string($con, $_POST['country']);
          $postal = mysqli_real_escape_string($con, $_POST['postal']);
          $contact = mysqli_real_escape_string($con, $_POST['contact']);
          $bank = mysqli_real_escape_string($con, $_POST['bank']);
          $accountno = mysqli_real_escape_string($con, $_POST['accountno']);
          $userID3 = mysqli_real_escape_string($con, $_POST['userID3']);


         //validation
          if ( trim($address) == '' ||
               trim($city) == '' ||
               trim($country) == '' ||
               trim($postal) == '' ||
               trim($contact) == '' ||
               trim($bank) == '' ||
               trim($accountno) == '') {
            echo "error1";
            exit;
        } 


        // preparing query to add the records
        $query     = "UPDATE `users` SET 
                          `address`   = '{$address}',
                          `city`      = '{$city}',
                          `country`   = '{$country}',
                          `postal_code`= '{$postal}',
                          `contactNo` = '{$contact}',
                          `bank_name` = '{$bank}',
                          `account_no`= '{$accountno}' 
                        WHERE `userID`= '{$userID3}'";

        $result    = mysqli_query($con, $query);

        // checking if record added successfully
        if ( mysqli_affected_rows($con) > 0 ) {
            echo "record-added";
            exit;
        } else {
            echo "error2";
            exit;
        }
    }









//////////////////////////////////////////////////////////////////////////////////////////

// add new adds
    if(isset($_FILES['post_image']['name']) &&
          isset($_POST['post_pakage']) &&
          isset($_POST['description']) &&
          isset($_POST['post_heading']) &&
          isset($_POST['userID4']) ){
       

        // sanitizing the input
          $post_pakage = mysqli_real_escape_string($con, $_POST['post_pakage']);
          $post_description = mysqli_real_escape_string($con, $_POST['description']);
          $post_heading = mysqli_real_escape_string($con, $_POST['post_heading']);
          $userID4 = mysqli_real_escape_string($con, $_POST['userID4']);

                  $filename = rand(10,1000).".png";
                  $tmp_name = $_FILES['post_image']['tmp_name'];
                 /* Location */
                 $location = "assets/img/post/".$filename;
                 $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                 $imageFileType = strtolower($imageFileType);

                 /* Valid extensions */
                 $valid_extensions = array("jpg","jpeg","png");

                  $response = 0;


            // preparing query to add the records
            $query     = "INSERT INTO `postadds`
            (`userID`, `postHeading`, `postDescription`, `postPackage`,`Date`, `postStatus`,`postPrice`,`paymentStatus`) VALUES (
            '{$userID4}','{$post_heading}','{$post_description}','{$post_pakage}', NOW() ,'pending' ,'1000' ,'No-paid'  )";

            $stmt=mysqli_prepare($con, $query);
            mysqli_stmt_execute($stmt);
            $check = mysqli_stmt_affected_rows($stmt);

            ///////////////////////////
                  //get next post id
                  $qu = "SELECT MAX(`postID`) as 'nextID', NOW() as 'date' FROM `postadds` 
                              WHERE  `userID` = '{$userID4}' limit 1; ";
                  $re = mysqli_query($con, $qu);
                    while($ro=mysqli_fetch_array($re))
                     {
                        $nextPostid = $ro['nextID'];
                      }


                  $filename = $nextPostid.rand(10,1000).".png";
                  $tmp_name = $_FILES['post_image']['tmp_name'];
                 /* Location */
                 $location = "assets/img/post/".$filename;
                 $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                 $imageFileType = strtolower($imageFileType);
                
                

                
            ///////////////////////////
            //insert image tabale
            $query1     = "INSERT INTO `postimg`(`postID`, `imgURL`) VALUES ('{$nextPostid}' , '{$location}');";

            $stmt1=mysqli_prepare($con, $query1);
            mysqli_stmt_execute($stmt1);
            $check1 = mysqli_stmt_affected_rows($stmt1);

            if($check==1 && $check1==1 ){
        
                echo "record-added";
                
                if(in_array(strtolower($imageFileType), $valid_extensions)) {
                /* Upload file */
                if(move_uploaded_file($tmp_name,$location)){

                  }
                }
                exit;
             }
            else {
                echo "error2";
                exit;
            }
          
       

       /* Check file extension */
       
    }
////////////////////////////////////////////////////////////////////////////////////////////






















    //delete post
  if (isset($_GET['DeleteAddsPostID'])) {
    $DeleteAddsPostID1 = $_GET['DeleteAddsPostID'];

    # //delete from post tabale
      $query     = "DELETE FROM `postadds` WHERE `postID` = '{$DeleteAddsPostID1}';";

      $stmt=mysqli_prepare($con, $query);
      mysqli_stmt_execute($stmt);
      $check = mysqli_stmt_affected_rows($stmt);

      



      //image detelete upload files
      $query3 = "SELECT `imgURL` FROM `postimg` WHERE `postID` = '{$DeleteAddsPostID1}';" ;
      $results3 = mysqli_query($con, $query3);
      while($row3=mysqli_fetch_array($results3))
      {
        unlink($row3['imgURL']);
      }





      //image tabale remove row
      $query1     = "DELETE FROM `postimg` WHERE `postID` = '{$DeleteAddsPostID1}';";

      $stmt1=mysqli_prepare($con, $query1);
      mysqli_stmt_execute($stmt1);
      $check1 = mysqli_stmt_affected_rows($stmt1);




      if($check==1 && $check1 ==1){
        echo "Delete-success";
        exit();
      }else{
        echo "Delete-unsuccess";
        exit();
      }
  }



 //edite post get detais
  if (isset($_POST['updatPostID'])) {
    $postID = $_POST['updatPostID'];

    $query = "SELECT * FROM postadds WHERE postID = '{$postID}' ";
   // echo $query;
      
      $results = mysqli_query($con, $query);
      while($row=mysqli_fetch_array($results))
      {
         $postHeading = $row['postHeading'];
         $postPackage = $row['postPackage'];
         $postPrice = $row['postPrice'];
         $postDescription = $row['postDescription'];

      }



      $query1 = "SELECT * FROM `postimg` WHERE `postID` = '{$postID}'";
   // echo $query;
      
      $results1 = mysqli_query($con, $query1);
      while($row1=mysqli_fetch_array($results1))
      {
      
         $imgURL = $row1['imgURL'];

      }

      $data = array(
        'postHeading' => $postHeading,
        'postPackage' => $postPackage,
        'postDescription' => $postDescription,
        'postPrice' => $postPrice,
        'imgURL' => $imgURL
          );
      
      
      echo json_encode($data); 
     

       exit();
      
  }



























 
//edit advertisment
  if(isset($_POST['EditDescription']) &&
          isset($_POST['EditPost_heading']) &&
          isset($_POST['EditPost_pakage']) &&
          isset($_POST['IMGurl']) &&
          isset($_POST['EditPostID']) ){
       

        // sanitizing the input
          $post_pakage = mysqli_real_escape_string($con, $_POST['EditPost_pakage']);
          $post_description = mysqli_real_escape_string($con, $_POST['EditDescription']);
          $post_heading = mysqli_real_escape_string($con, $_POST['EditPost_heading']);
          $postID = mysqli_real_escape_string($con, $_POST['EditPostID']);

            // preparing query to add the records
            $query     = "UPDATE `postadds` SET 
                                `postHeading`=  '{$post_heading}',
                                `postDescription`=  '{$post_description}',
                                `postPackage`=  '{$post_pakage}'
                                WHERE `postID` ='{$postID}'; ";

            $stmt=mysqli_prepare($con, $query);
            mysqli_stmt_execute($stmt);
            $check = mysqli_stmt_affected_rows($stmt);


            $imgename = substr($_POST['IMGurl'],16,30);


            if(isset($_FILES['EditPost_image']['name']))
            {
              //echo "string";
                /* Getting file name */
                 $filename = $imgename;
                 $tmp_name = $_FILES['EditPost_image']['tmp_name'];



                 /* Location */
                 $location = "assets/img/post/".$filename;
                 $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                 $imageFileType = strtolower($imageFileType);

                 /* Valid extensions */
                 $valid_extensions = array("jpg","jpeg","png");

                 $response = 0;
                 /* Check file extension */
                 if(in_array(strtolower($imageFileType), $valid_extensions)) {
                    /* Upload file */
                    if(move_uploaded_file($tmp_name,$location)){
                       $response = $location;
                    }
                 }

                 echo $response;
                 exit;
            }else{
              //echo "noooo";
            }

                exit;
 }

























///////////////////////////////////////
 //submit payment slip
    if(isset($_FILES['payment_submit_img']['name']) && isset($_POST['Payment_PostID']) && isset($_POST['payment_ammount'] ) ){
    if (empty($_POST['payment_ammount'] )) {
      echo "Amount is empty ,
      Failure to submit payment slip";
      exit();
    }

          $payPostID=$_POST['Payment_PostID'];
          $userID10=$_POST['userID10'];
          $payment_ammount=$_POST['payment_ammount'];

        // sanitizing the input
          $Payment_PostID = mysqli_real_escape_string($con, $_POST['Payment_PostID']);
          $userID10 = mysqli_real_escape_string($con, $_POST['userID10']);

                 /* Valid extensions */
                 $valid_extensions = array("jpg","jpeg","png");

                  $response = 0;

                  $filename = $_POST['Payment_PostID'].".png";
                  $tmp_name = $_FILES['payment_submit_img']['tmp_name'];
                 /* Location */
                 $location = "assets/img/postPaymentSlip/".$filename;
                 $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                 $imageFileType = strtolower($imageFileType);

                
            ///////////////////////////
            //insert image tabale
            $query1     = "INSERT INTO `AdPaymentSlips`( `postID`, `paymentIMG`,`payment_ammount`, `paymentDate`,`userID`) VALUES 
                                                       ('{$payPostID}' , '{$location}','{$payment_ammount}', NOW(),'{$userID10}'  )";
               
            $stmt1=mysqli_prepare($con, $query1);
            mysqli_stmt_execute($stmt1);
            $check1 = mysqli_stmt_affected_rows($stmt1);


            $query2     = "UPDATE `postadds` SET `paymentStatus`='waiting', `paymentDate`= NOW() , `exDate` = DATE_ADD(NOW(), INTERVAL 30 DAY)  WHERE `postID` = '{$payPostID}';";

            $stmt2=mysqli_prepare($con, $query2);
            mysqli_stmt_execute($stmt2);
            $check2 = mysqli_stmt_affected_rows($stmt2);

            if( $check1 == 1 ){
        
                
                if(in_array(strtolower($imageFileType), $valid_extensions)) {
                /* Upload file */
                if(move_uploaded_file($tmp_name,$location)){

                  }
                }
               // echo "Payment slip submitted successfully, will be checked and your ad will be published soon";
               // echo "added-record";
                echo "added-record";
                exit;
             }
            else {
                echo "Failure to submit payment slip";
                exit;
            }
       
    }








// Password setting
    if (isset($_POST['ch_username']) && isset($_POST['ch_password'])) {     
        // sanitizing the input
      
        $ch_username = mysqli_real_escape_string($con, $_POST['ch_username']);
        $userID = mysqli_real_escape_string($con, $_POST['userID']);

       $password_1 = mysqli_real_escape_string($con, $_POST['ch_password']);
       $password_2 = mysqli_real_escape_string($con, $_POST['ch_password1']);

        if ( trim($ch_username) == ''  ) {
            echo "You can't type space1";
            exit;
        }
         if ( ($password_1) == ""  ) {
            echo "You can't type space2";
            exit;
        } 
        if ( ($password_2) == ""  ) {
            echo "You can't type space3";
            exit;
        }
        if ($password_1 != $password_2) {
            echo " passwords d not match";
            exit;
            }


             $password = md5($password_1);

        // preparing query to add the records
        $query     = "UPDATE `users` SET 
                        `userN`='{$ch_username}',
                        `passcode`='{$password}'
                        WHERE `userID` = '{$userID}'";

        $result    = mysqli_query($con, $query);

        // checking if record added successfully
        if ( mysqli_affected_rows($con) > 0 ) {
            echo "record-added";
            exit;
        } else {
            echo "error2";
            exit;
        }
    }











    echo 0;
    
    





?>
















