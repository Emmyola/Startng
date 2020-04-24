<?php session_start();

$errorCount = 0;
   
   $token = $_POST['token']!=""? $_POST['token'] : $errorCount++;
   $email = $_POST['email']!=""? $_POST['email'] : $errorCount++;
   $passowrd = $_POST['password']!=""? $_POST['password'] : $errorCount++;
    
   $_SESSION['token'] = $token;
   $_SESSION['email'] = $email;

 if($errorCount > 0){
    $session_error ="you have" . $errorCount ."error";
    if($errorCount > 1){
          $session_error .="s";
    }
    $session_error .= "in your submission";
    $_SESSION['error'] = $session_error;

    header("location: reset.php");
}else{
    $allUserstoken =scandir("db/tokens/");
    $countAlluserstoken = count($allUserstoken);

    for ($counter = 0; $counter <  $countAlluserstoken ; $counter++) { 
       $currentUsertoken = $allUserstoken[$counter];

       if ($currentUsertoken == $email . ".json"){
        $TokenString = file_get_contents("db/tokens/" . $email . ".json");
        $Tokenobject = json_decode($TokenString);

        $tokenFromDB = $Tokenobject->token;
        echo $tokenFromDB;
        die();

       if($tokenFromDB == $token){
       
       } 
       }
    }
    $_SESSION["error"] = "Password reset failed, token/email is invalid or expired"; 
    header("location: login.php");
}
?>