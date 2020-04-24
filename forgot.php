<?php include_once('lib/header.php') ?>

<h2>Your Request: Forgot Password</h2>
 <p><h3>Please provide your Email Login Details?</h3></p>

 <p>	
   	<?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
   		echo "<span style='color:red'>" . $_SESSION['error'] . "<span>";
   		session_unset();
   	}?>
   	</p>
  <form method="POST"  action="proccessforgot.php">
  <div class="container-center">
		   <div class="row col-2 col-6">
			   <div class="input-group">
  	<p>
	  <label>Email</label><br />
		<input  <?php if(isset($_SESSION['email'])){
			echo "value=" . $_SESSION['email'];
			 }?>
	   type="text" name="email" placeholder="Email" >
	</p>
 </div>
 <div class="input-group">
  <p>
	<button type="submit" name="submit" class="btn">Send Reset Code</button>		
  </p>
 </div>
 </div>
  </div>
  </form>

<?php include_once('lib/footer.php') ?>
 