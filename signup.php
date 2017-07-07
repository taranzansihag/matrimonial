<?php
	include("database.php");
	if(empty($_POST["fname"]) && empty($_POST["lname"]) && empty($_POST["mobile"]) && empty($_POST["address"]) && empty($_POST["age"]) && empty($_POST["category"]) && empty($_POST["gender"]) && empty($_POST["relegion"]) && empty($_POST["country"])){
	  header("location:sign.php?err=1");
	}
	else{
		  $email=$_POST["email"];
		  $pass=$_POST["pass"];
		  $fname=$_POST["fname"];
		  $lname=$_POST["lname"];
		  $mobile=$_POST["mobile"];
		  $address=$_POST["address"];
		  $age=$_POST["age"];
		  $category=$_POST["category"];
		  $gender=$_POST["gender"];
		  $religion=$_POST["religion"];
		  $country=$_POST["country"];
		  $rs=mysql_query("select * from login where emailid='$email' ");
		  if($r=mysql_fetch_array($rs)){
		    header('location:sign.php?metch=1');
			}
			else{
		  mysql_query("insert into login values('$email','$pass','$fname','$lname','$mobile','$address','$age','$category','$gender','$religion','$country')");
		   setcookie("user",$email,time()+600);
		  header('location:profile.php');
		  }
	}
?>	