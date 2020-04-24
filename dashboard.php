<?php  
include_once('lib/header.php');

 if (!isset($_SESSION['logged in'])){
     header("location: login.php");
} 

 ?>
 <h2>Dashboard</h2>
<!-- <p>Logged in User ID: <?php echo $_SESSION['']?></p> -->
<h2>welcome <?php echo $_SESSION['fullname'] ?>: you
have logged in as (<?php echo $_SESSION['role'] ?>) and your ID is <?php echo $_SESSION['logged in'] ?></h2>.

<?php include_once('lib/footer.php') ?>

