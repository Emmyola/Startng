
<?php include_once('lib/header.php')?>


   	<?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])) {
   		echo "<span style='color:green'>" . $_SESSION['message'] . "<span>";
   		session_unset();
   	}?>
   
<body>
  <header>
    <dev class="container">
      <dev class="row">
      <div class="col-md-4 col-12 text left">
      <h2 class="my-md-3 site-title text-white">HNG: START.NG</h2>
      <p><h3>Welcome to SNG: Hospital </h3><br /></P>
      </div>
      </dev>
      
    </dev>
  </header>
  <div class="container">
      <div class="row">
      <hr />
    <p><h3>This is a specialist hospital to cure ignorance!</h3></p>
    <p><h3>Come as you are, it is completely free!</h3></p> 
      </div>
  </div>
    
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" 
        src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
        </script>
        <script src="./js/script.js"></script>
</body>


<!--MENU-->
 
<?php include_once('lib/footer.php')?>





