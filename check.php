<?php
	include("database.php");
	if(empty($_POST["email"]) && empty($_POST["pass"])){
	  header("location:index.php?err=1");
	}
	else{
	  $email=$_POST["email"];
	  $pass=$_POST["pass"];
	  $rs=mysql_query("select * from login where emailid='$email' AND password='$pass'");
	  if($r=mysql_fetch_array($rs)){
	  setCookie("user",$email,time()+600);
	  header("location:profile.php");
	  }
	  else{
	     header("location:index.php?invalid=1");
	  }
	}
?>