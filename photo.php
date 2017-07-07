<?php
$dg=$_COOKIE["user"]; // retrieve cookie ( email id)
//$email=$_POST["email"];
$img=$dg.".jpg";  // teja@tzn.com.jpg
$target = "pro/";  //  pro/teja@tzn.com.jpg
$target = $target . $img;  //  pro/teja@tzn.com.jpg
//$pic=($_FILES['photo']['name']);
$size=($_FILES['photo']['size']);
	$sn=0;
	
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
	
			
	header("location:profile.php?succ=1");
	} 
else 
{ 
	 header("location:profile.php?dlt=1");
} 
	

?> 