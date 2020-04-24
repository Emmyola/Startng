
<?php  include_once('lib/header.php'); 

if (isset($_SESSION['loggedin']) && !empty($_SESSION['loggedin'])) {
	//redirect back to dashboard
    header("location: dashboard.php");
}
?>

   <p><h2>Welcome to SNH: Register Here</h2></p>
   <p><h2>All Field are Required</h2></p>

   <form method="POST" action="proccessreg.php">
   	<p>
   		
   	<?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
   		echo "<span style='color:red'>" . $_SESSION['error'] . "<span>";
   		session_unset();
   	}?>
	   </p>
	   <div class="container-center">
		   <div class="row col-2 col-6">
	   <div class="header"><h2>Register</h2></div>
   		   <div class="input-group">
			 <p>
			   	<label>First Name</label><br />
			   	<input 
			    <?php if(isset($_SESSION['first_name'])){
			   		echo "value=" . $_SESSION['first_name'];
			   		
			   	    }
			   	?>
			   	type="text" name="first_name" placeholder="First Name" >
			  </p>
			  </div>
			  <div class="input-group">
			 <p>
			   	<label>last Name</label><br />
			   	<input  <?php 
			   	if(isset($_SESSION['last_name'])){
			   		echo "value=" . $_SESSION['last_name'];
			   		
			   	    }
			   	?> 

			   	type="text" name="last_name" placeholder="last Name" >
			 </p>
			 </div>
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
			  <p>
			   	<label>Gender</label><br />
			   	<select name="gender" > 
			     <option value="">Select here</option>
			     <option <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] == "Male") {
   	                 echo "selected"; }?>>Male</option>
			     <option  <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] == "Famale") {
   	                 echo "selected"; }?>>Female </option>
			   	</select>
			  </p>
			  </div>
			  <div class="input-group">
			 <p>
			   	<label>Designation</label><br />
			   	<select name="designation" > 
			   	 <option value="">Select here</option>
			     <option  <?php if(isset($_SESSION['designation']) && $_SESSION['designation'] == "Medical Team (MT)") {
   	                 echo "selected"; }?>>Medical Team (MT) </option>
			     <option  <?php if(isset($_SESSION['designation']) && $_SESSION['designation'] == "Patient") {
   	                 echo "selected"; }?>>Patient</option>
			   	</select>
			 </p>
			 </div>
			 <div class="input-group">
		   <p>
			 <label>Department</label><br />
			   	<input  <?php if(isset($_SESSION['department'])){
			   		echo "value=" . $_SESSION['department'];
			   		
			   	    }
			   	?>
			   	type="text" name="department" placeholder= Department" >
			   </p>
			   </div>
			   <div class="input-group">
			   <p><label>
			   	<button type="submit" name="submit" class="btn">Register</button>
			</label>
		   </p>
		   </div>
		</div>
	</div>
	</form>


<?php include_once('lib/footer.php') ?>
