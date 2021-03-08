
<?php 
session_start();
  require 'includes/header.php';
?>
 

<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
          <div class="card">
            <div class="card-body">
          	<br>
          	 <div class="card" style="width: 18rem;">
  						  <div class="card-body">
                  <h2><img width="250px" src="uploaded/<?=$_SESSION['image'] ?>"></h2>

                  <h5 class="card-title"><?= $_SESSION['data']['firstname'];?></h5>
                  <h5 class="card-title"><?= $_SESSION['data']['lastname'];?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><strong> Email : </strong> <?= $_SESSION['data']['email'];?></h6>      
                  <a href="index.php" class="card-link">Logout</a>
  							</div>
						  </div>
		        </div>
		      </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/jquery-3.0.0.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
