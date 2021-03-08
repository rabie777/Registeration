<?php require 'includes/header.php';

if(isset($_GET['id']))
{
    $id= abs((int)$_GET['id']);
    if ($id<1) {
       header('location:students.php');
    }
    $sql="SELECT id FROM `users`WHERE id = $id ";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    if (! empty($data)) {
     	 $sql="DELETE from `users` where id=$id";
     	 $result=mysqli_query($conn,$sql);
     	 if ($result) {
     	 	 header('location:students.php');
     	 }
     } 
    die();
 }