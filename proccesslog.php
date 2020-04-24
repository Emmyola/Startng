<?php  session_start();

//collection
$errorCount = 0;

   $email = $_POST['email']!=""? $_POST['email'] : $errorCount++;
   $password = $_POST['password']!=""? $_POST['password'] : $errorCount++;
   $lastlog = date("Y-m-d, h:i:sa");
 //verifying and validating
 $_SESSION['email'] = $email;
// checks 
 if($errorCount > 0){
 	$session_error = " You have "  . $errorCount .  " errors";
 	if ($errorCount  > 1){
 		$session_error .= "s";
     }
 		$session_error .= " in your submission";
 		$_SESSION["error"] = $session_error;
 	 header("location:login.php");

   }else{
   	    
      $allUsers =scandir("db/users/");

      $countAllusers = count($allUsers);
   
      for ($counter = 0; $counter <  $countAllusers ; $counter++) { 
 	   	   $currentUser = $allUsers[$counter];
         
          if($currentUser == $email.".json") {
 	   	    $userString = file_get_contents("db/users/" . $email . ".json");
            $object = json_decode($userString);
            $passwordFromDB = $object->password;
            
            $passwrodFromUser = password_verify($password, $passwordFromDB);

            if($passwordFromDB == $passwrodFromUser){
				//last login capture
				// file_put_contents("db/login/". $email . ".json", json_encode(['last_login' => $lastlog]));
				$_SESSION['logged in'] = $object->id;
				$_SESSION['fullname'] = $object->first_name ." " . $object->last_name;
				$_SESSION['role'] = $object->designation;
				if ($object->designation == "Patient") {
					header("location: patient.php");
				}else{
					header("location: mt.php");
				}
				die();
 	   }
 	}
 }
               $_SESSION["error"] = "Invalid Email or Password";
 	           header("location: login.php");
 	           die();

   }




?>