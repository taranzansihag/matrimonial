<?php
	include("database.php");
	setCookie("user","",time()-1);
	header("location:index.php");
?>