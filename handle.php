<?php  
session_start();

include_once 'functions.php';

if (isset($_POST['click'])) {
    
       decomposed($_POST);
       
       $connect=connect();

       if (empty($firstname)) {
       	setItemErrors('firstname','firstname is require');
       }
       elseif (strlen($firstname)<5) {
       	 setItemErrors('firstname','firstname must be longer than 9 chars');
       }
       elseif (strlen($firstname)>30) {
       	setItemErrors('firstname','firstname must be less than 30chars');
       }
       else
       {
       	savesession('firstname',$firstname);
       }


      if (empty($lastname)) {
       	setItemErrors('lastname','lastname is require');
       }
       elseif (strlen($lastname)<5) {
       	 setItemErrors('lastname','lastname must be longer than 9 chars');
       }
       elseif (strlen($lastname)>30) {
       	setItemErrors('lastname','lastname must be less than 30chars');
       }
       else
       {
       	savesession('lastname',$lastname);
       }

       if (empty($email)) {
       	setItemErrors('email','email is require');
       }
       elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
       	 setItemErrors('email','email must be vaild email');
      }
      else
       {
       	savesession('email',$email);
       }
       if (empty($_FILES['image'])) {
       		setItemErrors('image','image is require');
       }
       
       if (empty($password)) {
       	setItemErrors('password','password is require');
       }
       elseif (strlen($password)<9) {
       	 setItemErrors('password','password must be longer than 9 chars');
       }
       elseif (strlen($password)>30) {
       	setItemErrors('password','password must be less than 30chars');
       }
       else
       {
            $password=password_hash($password, PASSWORD_DEFAULT);
       	savesession('password',$password);
       }



if (empty($errors))
 {
 	$source=upload();
      $_SESSION['image']=$source;
 	$_SESSION['data']=$data;
     
    foreach ($data as $key => $value) {
      $$key=$value;      
     }
   $sql="INSERT INTO `users`(`firstname`, `lastname`, `email`,`password`,`image`) VALUES ('$firstname','$lastname','$email','$password','$source')";
    $res=mysqli_query($connect,$sql);
    if ($res) {
        header('location:students.php');
    }
 else
      die();

   
 }
else
{
	$_SESSION['errors']=$errors;
	
	header('location: index.php');
	
}



}
















?>