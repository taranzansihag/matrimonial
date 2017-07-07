
<html>
          <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>php Page</title>
  <link rel="stylesheet" href="file/bootstrap.min.css">
  <script src="file/jquery.min.js"></script>
  <script src="file/bootstrap.min.js"></script>
  <link rel="stylesheet" href="file/w3.css">
  <link href="layout1.css" rel="stylesheet" type="text/css" media="all">
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height: 50%;
      margin: auto;
  }
 
  </style>
  
    </head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
        <?php
   if(empty($_POST["categry"]) &&empty($_POST["country"]) && empty($_POST["religion"]) &&empty($_POST["gender"])){
	header('location:index.php');
   }
?>
        <div class="container-fluid">
            <div class="responsive">
                
                
           <div class="logo">
               <img src="images/mtrlogo.png" class="img-responsive">
           </div>    
                <div class="row" style="height:5px;"></div>
                
                
                    <div class="w3-container  w3-border w3-section w3-round-xlarge" style="background-color:greenyellow;">
               
                                    <div class="wrapper row">
                                   <div class="rounded">
                                     <nav id="mainav" class="clear"> 

                                         <label>
                                         <ul class="nav nav-pills nav-tabs" >
                                         <li><a href="index.jsp"> My Home</a></li>
                                         <li><a href="#">ABOUT</a></li>
                                         <li><a href="#">Message</a>    </li>

                                         
                                         <li><a href="#">CONTACT</a></li>
                                         <li><a href="#">Matches(2)</a></li>
                                         <li><a href="#">SERVICE</a></li>

                                       </ul></label>

                                     </nav>
                                   </div>
                                 </div>
                    </div>
                
          <div class="well well-sm" style="background-color:lightgray;">
              <h3> <b class="w3-text-pink">&nbsp;&nbsp;&nbsp;Choose your Best Life Partner With Our Metrimonial Service</b> </h3>  
              
          </div>    
                
        
        <div class="col-sm-3">
            
        </div>
                
                
                
        <div class="col-sm-6">        
            
        
        <?php
		   $categry=$_POST["categry"];
		   $country=$_POST["country"];
		   $religion=$_POST["religion"];
		   $gender=$_POST["gender"];
           include("database.php");	
		   $rs=mysql_query("select * from login where categry='$categry' and country='$country' and religion='$religion' and gender='$gender'");
         	while($r=mysql_fetch_array($rs)){
			?>	
		   
        
            <div class="panel panel-primary">
                <div class="panel-body w3-card-12">
                    <div class="col-sm-4">
                        <img src="images/dummy2.jpg" class="img-rounded img-responsive">
                     </div>
                    <div class="col-sm-8">
            <?php
                 
                 echo "<b>Email id = ".$r[0]."<br>"."Name = ".$r[2]." ".$r[3]."<br>"."Mobile No = ".$r[4]."<br>"."Address = ".$r[5]."<br>"."Age = ".$r[6]."<br><br></b>";
				 
             ?>
                 &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="w3-text-red"><b>  more detail......</b></a>
                 </div>
                 
            </div>
            </div>
                      <?php
              }
       
          
          
        ?>      
            
        <button class="button w3-text-black" style="background-color:lightseagreen"> <a href="profile.php"><b>BACK</b></a> </button>
        <br><br>
        </div>
        
        
        <div class="col-sm-3">
        
            
        </div>    
        
        </div>
        </div>
        
    </body>
</html>
