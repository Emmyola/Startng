  
<?php 
session_start();

// collecting data
 $errorCount = 0;

   $email = $_POST['email']!=""? $_POST['email'] : $errorCount++;
    
   $_SESSION['email'] = $email;
   
   if($errorCount > 0){
      $session_error ="you have" . $errorCount ."error";
      if($errorCount > 1){
            $session_error .="s";
      }
      $session_error .= "in your submission";
      $_SESSION['error'] = $session_error;

      header("location: forgot.php");
   }else{

      $allUsers =scandir("db/users/");
      $countAllusers = count($allUsers);

      for ($counter = 0; $counter <  $countAllusers ; $counter++) { 
         $currentUser = $allUsers[$counter];

         if ($currentUser == $email . ".json") {
            
      // send the mail and redirect to the reset password//
          $token = "jajfujbjbKJIEUFJEBFJ;dbb";
          // generating token code//

          $subject = "password reset link";
          $message =  "password reset initiated link sent to your, or visit: localhost/sng/reset.php?token=" . $token;
          $hearder = "From: no-reply@sng.org" . "\r\n".
          "CC: olu@sng.org";
          file_put_contents('db/tokens/' . $email . ".json", json_encode(['token'=>$token]));
        	  
          $xender = (['mail'=>$email,$subject,$message,$header]);
           
         if ($xender){
            $_SESSION["message"] = "Password reset link has been sent your Email:" . $email; 
            header("location: login.php");
         }else{
            $_SESSION["error"] = "Something went wrong to sent your:" . $email;
           header("location: forgot.php");
         }
         die();
     }
   }
      $_SESSION["error"] = "Email not register with us ERR:" . $email;
      header("location: forgot.php");
}
  
  
?>