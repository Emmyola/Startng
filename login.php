
<?php include_once('lib/header.php');

if (isset($_SESSION['logged in']) && !empty($_SESSION['logged in'])) {
	//redirect back to dashboard
    header("location: dashboard.php");
}

?>
<p><h2>Welcome you have Register: Login Here!</h2></p>
   <p>
   	<?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])) {
   		echo "<span style='color:green'>" . $_SESSION['message'] . "<span>";
   		session_unset();
	   }?>
	   <div class="hesder"><h2>Login</h2></div>
   </p>
   <form method="POST" action="proccesslog.php">
   	<p>
   		
   	<?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
   		echo "<span style='color:red'>" . $_SESSION['error'] . "<span>";
   		session_unset();
	   }?>
	   </p>
	   <div class="container-center">
		   <div class="row col-2 col-6">
			   <div class="input-group">
   	          <p>
			   	<label>Email</label><br />
			   	<input  <?php if(isset($_SESSION['email'])){
			   		echo "value=" . $_SESSION['email'];
			   		}
			   	?>
			   	type="text" name="email" placeholder="Email" >
			  </p>
			  </div>
			  <div class="input-group">
			  <p>
			   	<label>password</label><br />
			   	<input type="password" name="password" placeholder= "Password" >
			  </p>
			  </div>
			  <div class="input-group">
			   <p><label>
			   	<button type="submit" name="submit" class="btn">Login</button>
			</label>
		   </p>
			</div>
		   </div>
	   </div>
	</form>

<?php include_once('lib/footer.php') ?>
