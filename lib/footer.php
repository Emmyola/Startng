
<p> <a href="index.php">Home</a> 
	<?php if (!isset($_SESSION['logged in'])){?> |
   	<a href="login.php">Login</a> |
   <a href="register.php">Register</a> |
   <a href="forgot.php">Forget Password </a> |
<?php } else{  ?>

	<a href="logout.php">Logout</a> <?php }?>
   <a href="reset.php">Reset Password </a>
</p>


