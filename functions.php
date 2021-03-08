<?php

define("DOC_ROOT", $_SERVER['DOCUMENT_ROOT']."/eraasoft/register/");
define("UPLOADS", DOC_ROOT."uploaded/");
$errors=array();
$data=array();
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

function clean($data)
{
if(is_array($data))
{
	foreach ($data as $key => $value) 
		 $data[$key]=htmlspecialchars(trim($value));
}
else{
         $data=htmlspecialchars(trim($value));
}
return $data;
}

 function upload()
 {
	  $name=$_FILES['image']['name'];
	  $tmp_name = $_FILES['image']['tmp_name'];
	 if (isset($name)) {
	 	if (! empty($name)) {
	 		$name=uniqid().$name;
	 		if(move_uploaded_file($tmp_name,UPLOADS.$name))
	 		
	 			return  $name;
	 		 else
	 		
            echo "Not Uploaded";
	 		
	 	}
	 	else 
	    {
	        echo 'Please choose a file';
	    }
	 }
	  
	  

 }

function connect()
{

	$connect=mysqli_connect('localhost','root','','courses');

	if (mysqli_connect_error()) {
		 die('connection falid'.mysqli_connect_error());
	}
	return $connect;
}
function setItemErrors($Item,$message)
{
global $errors;
$errors[$Item]=$message;

}

function savesession($user,$value)
{
global $data;
$data[$user]=$value;

}


?>