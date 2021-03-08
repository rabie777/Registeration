<?php
session_start();
include_once 'includes/header.php';?>
<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form action="handle.php" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                	<label for="exampleInputEmail1">First Name:</label>
                	<input type="text" class="form-control" name="firstname" placeholder="firstname" >
              	</div>
              	<div class="form-group">
                	<label for="exampleInputEmail1">last Name:</label>
                	<input type="text" class="form-control" name="lastname"  placeholder="lastname">
              	</div>
              	<div class="form-group">
                	<label for="exampleInputEmail1">Email address:</label>
                	<input type="text" class="form-control" name="email"  placeholder="email">
              	</div>
              	<div class="form-group">
                	<label for="exampleInputPassword1">Password:</label>
                	<input type="password" class="form-control" name="password"  placeholder="password">
              	</div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Photo:</label>
                  <input type="file" class="form-control" name="image"  placeholder="Your image">
                </div>
              	<div class="form-group form-check">
              	</div>
              <button type="submit" class="btn btn-primary" name="click">Register</button>
            </form>
            <?php if (!empty($_SESSION['errors'])):?>
                         <div class="alert alert-danger">
                          <ul>
                           <?php foreach ($_SESSION['errors'] as  $value): ?>
                                <li><?php echo $value;?> </li>
                           <?php endforeach;?>
                         </ul>
                         </div>
                         <?php  unset($_SESSION['errors']);?>
            <?php endif;?>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</main>
 
<?php
include_once 'includes/footer.php';?>
