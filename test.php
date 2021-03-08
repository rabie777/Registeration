
<?php
session_start();
 printdata($_FILES);
$source=upload();
//$_SESSION['so']=$sourc;

 function upload()
 {
	  $name=$_FILES['image']['name'];
	  $tmp_name = $_FILES['image']['tmp_name'];
	 if (isset($name)) {
	 	if (! empty($name)) {
	 		$name=uniqid().$name;
	 		if(move_uploaded_file( $tmp_name,UPLOADS.$name))
	 		
	 			echo 'Uploaded';
	 		 else
	 		
            echo "Not Uploaded";
	 		
	 	}
	 	else 
	    {
	        echo 'Please choose a file';
	    }
	 }
	  
	  return  $name;

 }

function printdata($data)
{
echo "<pre>";
print_r($data);
echo "</pre>";
}

function decomposed($data)
{
    
    foreach ($data as $key => $value) 
	 {
	 	global $$key;
	 	 $$key=$value;

	 }

}
 //echo "string".$_FILES['image']['tmp_name'];
?>

<?php if(!empty($_SESSION['so'])):?>
<img src="<?=$_SESSION['so'] ?>" width="500" height="500">
<?php endif;?>
