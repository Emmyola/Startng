<?php
  session_start();

// collecting data
     $errorCount = 0;

 //Verifying the data, validation

		 $first_name = $_POST['first_name'] !=""? $_POST['first_name'] : $errorCount++;
		 $last_name = $_POST['last_name']!=""? $_POST['last_name'] : $errorCount++;
		 $email = $_POST['email']!=""? $_POST['email'] : $errorCount++;
		 $password = $_POST['password']!=""? $_POST['password'] : $errorCount++;
		 $gender = $_POST['gender']!=""? $_POST['gender'] : $errorCount++;
		 $designation = $_POST['designation']!=""? $_POST['designation'] : $errorCount++;
		 $department = $_POST['department']!=""? $_POST['department'] : $errorCount++;

    
		   $_SESSION['first_name'] = $first_name;
		   $_SESSION['last_name'] = $last_name;
		   $_SESSION['email'] = $email;
		   $_SESSION['gender'] = $gender;
		   $_SESSION['designation'] = $designation;
		   $_SESSION['department'] = $department;

 if($errorCount > 0){
 	$_SESSION["error"] = " You have "  . $errorCount .  " errors in your form submission ";
 	 header("location:register.php");

 }else{
    
      $allUsers =scandir("db/users/");

      $countAllusers = count($allUsers);

      $newUsersid = $countAllusers-1;
        
 	    $object = [
        'id' =>$newUsersid,
        'first_name' =>$first_name,
        'last_name' =>$last_name,
        'email' =>$email,
        'password' =>password_hash($password, PASSWORD_BCRYPT),
        'gender' =>$gender,
        'designation' =>$designation,
        'department' =>$department,
 	    ];

          //check for user alredy exist

 	   for ($counter = 0; $counter <  $countAllusers ; $counter++) { 
 	   	   $currentUser = $allUsers[$counter];

      if ($currentUser == $email . ".json") {
         
 	   	   	 	$_SESSION["error"] = " Registration Failed, user already exist"  .  $first_name;
 	           header("location: register.php");
 	           die();
 	   	   }
 	   }

       // save to database....

    file_put_contents('db/users/' . $email . ".json", json_encode($object));
 	$_SESSION["message"] = " Registration successful, you can login now" . "  " . $first_name;
 	 header("location: login.php");
 }

     

?>