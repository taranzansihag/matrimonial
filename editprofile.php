
<?php
  $email=$_COOKIE["user"];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $mobile=$_POST["mobile"];
  $address=$_POST["address"];
  $age=$_POST["age"];
  $category=$_POST["category"];
  $gender=$_POST["gender"];
  $religion=$_POST["religion"];
  $country=$_POST["country"];
    include("database.php");	
   mysql_query("update login set fname='$fname',lname='$lname',mob='$mobile',address='$address',age='$age',categry='$category',gender='$gender',religion='$religion',country='$country' where emailid='$email'") or die(mysql_error());
      header("location:profile.php");
	  
 ?>
