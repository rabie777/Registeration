 <?php require 'includes/header.php';
 $sql="SELECT id, concat_ws(' ',firstname,lastname) as fullName,email ,image FROM `users`";
$result=mysqli_query($conn,$sql);
$Students=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo"<pre>";
//print_r($Students);
echo"</pre>";
 ?>
    <div class="row">
        <div class='col-md-8 offset-md-2'>
            <div class="card mt-2">
                <div class="card-header">
                  Students
                </div>
                <div class="card-body"></div> 
                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">StudentId</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th> 
                            <th scope="col">Image</th>
                            <th scope="col" colspan="2">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php if(! empty($Students)):?>
                                <?php foreach ($Students as $student) :?>
                                
                          <tr>
                            <td scope="row"><?=$student['id']; ?></td>
                            <td><?=$student['fullName']; ?></td>
                            <td><?=$student['email']; ?></td>
                            <td scope="row">
                                <?php if(empty($student['image'])):?>
                                    <img src="assets/images/avatar.png " width="50" height="40">
                                    <?php else :?>
                                    <img src="uploaded/<?=$student['image']?>" width="50" height="40">
                                <?php endif;?>
                            </td>
                            <td><a href="edit.php?id=<?=$student['id']?>" class="btn btn-warning">Edit</a></td>
                            <td><a href="delete.php?id=<?=$student['id']?>" class="btn btn-danger">Delete</a></td>
                          </tr>
                      <?php endforeach;?>
                           <?php endif;?>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
<!-- form itself end-->

<?php include "includes/footer.php" ?>