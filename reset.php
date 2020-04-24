<?php 
include_once('lib/header.php'); 


 if(isset($_GET['token']) && !empty($_SESSION['token'])) {
	echo "<span style='color:red'>" . $_SESSION['error'] . "<span>";
	session_unset();
}
?>
<h2>Requesting: Reset Password</h2>
 <p><h3>Reset password assciated with your account: [email]?</h3></p>

  <form method="POST"  action="proccessreset.php">
  <p>	
   	<?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
   		$_SESSION["error"] = "you are not autherized on this page:";
           header("location: login.php");
	   }?>
	    
   </p>
   <div class="container-center">
	<div class="row col-2 col-6">
	<div class="input-group">
  	<p>
	  <label>Email</label><br />
		<input readolny <?php if(isset($_SESSION['email'])){
			   		echo "value=" . $_SESSION['email'];
			   		}
			   	?> type="text" name="email" placeholder="Email" >
   </p></div>
   <div class="input-group">
    <p>
		<label>Enter New password</label><br />
		<input type="password" name="password" placeholder= "Password" >
	 </p></div>
	 <div class="input-group">
  <p>
	<button type="submit" name="submit" class="btn">Reset password</button>		
  </p></div>
  </form>

<?php include_once('lib/footer.php') ?>
 