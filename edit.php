<?php require 'includes/header.php';

if(isset($_GET['id']))
{
    $id= abs((int)$_GET['id']);
    if ($id<1) {
       header('location:students.php');
    }
    $sql="SELECT * FROM `users`WHERE id = $id ";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
 }

if (isset($_POST['update'])) 
{
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $sql="UPDATE `users` SET `firstname`='$firstname' ,`lastname`='$lastname' ,`email`='$email' WHERE id= $id ";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header('location:edit.php?id='.$id);
    }
    
}


?>
 
    <div class="row">
        <div class='col-md-8 offset-md-2'>
            <div class="card mt-2">
                <div class="card-header">
                  Students
                </div>
                <div class="card-body">
                <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">

                    <div class="mb-3">
                        <label  class="form-label">First Name:</label>
                        <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?= ! empty($data)? $data['firstname']:''?> >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Last Name:</label>
                        <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?= ! empty($data)? $data['lastname']:''?>>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?= ! empty($data)? $data['email']:''?>>
                    </div>
                    <button type="submit" class="btn btn-primary" name="update">update</button>
                </form>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Sign in</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_orange">Sign in</button>
                    </div>
                </div>
            </form>
            <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
            </p>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- form itself end-->
<form id="test-form2" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Resistration</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="Password" placeholder="Confirm password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_orange">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->


<!-- JS here -->
<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/scrollIt.js"></script>
<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/nice-select.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/gijgo.min.js"></script>

<!--contact js-->
<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/mail-script.js"></script>

<script src="assets/js/main.js"></script>
</body>

</html>