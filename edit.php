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
        <div class="container-fluid">
          <div class="responsive">
              
              
                        <div class="row">				 
                                 <div class="col-sm-12" style="background-color:lightgray; height:85px">
                                     <h4 align="center" class="text-info">Your Profile will sent to relevant matches in <label class="w3-text-red">03h:42m:58s</label></h4>
                                     <div class="col-sm-4" align="center">
                                         <a href="#" class="text-danger"><span class="badge">!</span> family detail pending</a>    
                                     </div>
                                     <div class="col-sm-4" align="center">
                                      <a href="#" class="text-danger"><span class="badge">!</span> carrer detail pending</a>    
                                     </div>
                                     <div class="col-sm-4" align="center">
                                      <a href="#" class="text-danger"><span class="badge">*</span> photo uploaded</a>    
                                     </div>
                                     </div>
                        </div>
              
              
            
                           <div class="row">
                           <div class="col-sm-8"> 
                        <div class="logo"><img src="images/mtrlogo.png"></div>
                        </div>
                            
                            
                            
          <div class="col-sm-4">
               <div class="row" style="height:55px;"></div> 
							<?php
								include("database.php");
								if(!isset($_COOKIE["user"])){
								 header("location:index.php");
								}
								else{
								 $email=$_COOKIE["user"];
								
								 $rs=mysql_query("select * from login where emailid='$email'");
								 while($r=mysql_fetch_array($rs)){
								  echo "<h3>"."<b class='w3-text-blue'>"."WELCOME ".$r[2]." ".$r[3]."</b>"."</h3>";
								 }
								}
								
							?>


	     </div>    
                            
                        </div> 
                               <div class="row" style="height:5px;"></div>  
                               
                               
                    
                        <div class="w3-container  w3-border w3-section w3-round-xlarge" style="background-color:pink;">
                              <div class="wrapper row">
                                      <div class="rounded">
                                            <nav id="mainav" class="clear"> 

                                                <label>
                                                <ul class="nav nav-pills nav-tabs" >
                                                <li><a href="index.jsp">Home</a></li>
                                                <li><a href="#">MATCHES(20)</a></li>
                                                <li><a href="login.jsp">PROFILE</a>    </li>

                                                </li>
                                                <li><a href="#">CONTACT</a></li>
                                                <li><a href="sign.jsp">INBOX</a></li>
                                                <li><a href="search.jsp">SEARCH</a></li>

                                              </ul></label>

                                            </nav>
                                      </div>
                               </div>
                         </div>
                               
                               
        
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-12 w3-card-12" style="height:160px;">
                                    <div class="row">
                                    <div class="tabel-responsive">
                                        <tabel class="tabel">
                                            <div class="col-sm-4">
                                            <img src="pro/<?=$email?>.jpg" class="img-responsive img-rounded">
                                            </div>
                                            <div class="col-sm-8">
                                                <a href="edit.php" class="w3-text-blue"><b>Edit Profile</b></a><br>
                                                <a href="change.php" class="w3-text-blue"><b>Change Password</b></a><br>
                                                <a href="#" class="w3-text-blue"><b>Change Profile photo</b></a><br>
                                                <a href="logout.php" class="w3-text-blue"><b>Logout</b></a>
                                                </div>
                                           </tabel> 
                                    </div> 
                                        </div>
                                    	<div align="cenetr">	
                                   <form enctype="multipart/form-data" action="photo.php" method="POST">
							<?php /*Email<input type="email" name="email" required="required" /><br />*/ ?>
							<input type="file" name="photo">
							&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
							<input type="submit"></form>
							</div>
                                </div>
                            </div>
                            
                           <div class="row">
                               
                            <div class="panel panel-danger">
                                <div class="panel-body w3-card-12">
                                    
                              <div class="well well-sm" align="center">
                                  <b class="w3-text-pink">Edit Your Profile</b>
                              </div>    
                                     
										<?php
											include("database.php");
											
											 $email=$_COOKIE["user"];
											$rs=mysql_query("select * from login where emailid='$email'");
											while($r=mysql_fetch_array($rs)){
										?>	
										<div class="row" align="center">
                                   <img src="pro/<?=$email?>.jpg" width="30%" class="img-responsive img-rounded">
                                   
                                </div>   <br>
										
											<form method="post" action="editprofile.php">
											<div class=row>
											<label class="col-sm-3">Fname:</label>
											<div class="col-sm-9">
											<input type="text" name="fname" value="<?=$r[2]?>" required="required"><br>
											</div>
											</div>
											<div class=row>
											<label class="col-sm-3">lname:</label>
											<div class="col-sm-9">
											<input type="text" name="lname" value="<?=$r[3]?>" required="required"><br>
											</div>
											</div>
											<div class=row>
											<label class="col-sm-3">Mobile:</label>
											<div class="col-sm-9">
											<input type="text" name="mobile" value="<?=$r[4]?>" required="required"><br>
											</div>
											</div>
											<div class=row>
											<label class="col-sm-3">Address:</label>
											<div class="col-sm-9">
											<input type="text" name="address" value="<?=$r[5]?>" required="required"><br>
											</div>
											</div>
											<div class=row>
											<label class="col-sm-3">Age:</label>
											<div class="col-sm-9">
											<input type="text" name="age" value="<?=$r[6]?>" required="required"><br>
											</div>
											</div>
											<div class=row>
											<label class="col-sm-3">Category:</label>
											<div class="col-sm-9">
											<input type="text" name="category" value="<?=$r[7]?>" required="required"><br>
											</div>
											</div>
											<div class=row>
											<label class="col-sm-3">Gender:</label>
											<div class="col-sm-9">
											<input type="text" name="gender" value="<?=$r[8]?>" required="required"><br>
											</div>
											</div>
											<div class=row>
											<label class="col-sm-3">Religion:</label>
											<div class="col-sm-9">
											<input type="text" name="religion" value="<?=$r[9]?>" required="required"><br>
											</div>
											</div>
											<div class=row>
											<label class="col-sm-3">Country:</label>
											<div class="col-sm-9">
											<input type="text" name="country" value="<?=$r[10]?>" required="required"><br>
											</div>
											</div>
											<div class="col-sm-9">
											<input type="submit" value="submit">
											</div>
											</form>
											<?php
										  }
										  
										?>  
                               
                       </div>        
                           </div>    
                            </div>
                            
   </div>      
                               
                               
                               
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-body">
                    <div class="col-sm-5" align="center">
                       <b class="w3-text-pink">Complete Your Profile</b>  
                    </div>
                    <div class="col-sm-6" align="center">
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped active w3-round-xlarge" role="progressbar"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                          65%
                        </div>
                      </div>
                    </div>  
                    <div class="col-sm-1" align="center">
                        <span class="badge">65%</span>

                    </div>
                        <div class="row">
                            <img src="images/line2.png" class="img-responsive">    
                        </div>
                        <p>Upload a Govt issued/approved ID proof to unlock <br>
                            <b>offline Id's</b> Truste badge <a href="#" class="w3-text-red" style='text-decoration:underline;'>what's this ?</a></p>
                        <div class="dropdown" align="center">
                            <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Upload Now
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">IMAGE</a></li>
                              <li><a href="#">STATUS</a></li>
                              <li><a href="#">LOCATION</a></li>
                            </ul>
                          </div>
                </div>
                    </div>
                   <div class="panel panel-info">
                      <div class="panel-body">
                          <div class="row" style="background-color:lightpink;">
                              <h4><b> &nbsp;New Matches(140) <a href="#" class="w3-text-blue"> view all</a></b></h4>
                          </div>
                          
                          <div class="row" style="height:80px;">
                                        <div class="col-sm-2">
                                            <img src="images/p7.jpeg" class="img-responsive img-circle">
                                            </div>
                                        <div class="col-sm-10">
                                           <b> <a href="#" class="w3-text-blue">Lovely K</a></b> <br>
                                            19 , 5'0" , hindu , sc , munger <br>
                                            Teacher , india <a href="#" class="w3-text-blue">full profile...</a>
                                             </div>
                                    </div>
                          <div class="row">
                              <img src="images/line2.png" class="img-responsive">
                              </div>
                          
                          <div class="row" style="height:80px;">
                                        <div class="col-sm-2">
                                            <img src="images/p7.jpeg" class="img-responsive img-circle">
                                            </div>
                                        <div class="col-sm-10">
                                           <b> <a href="#" class="w3-text-blue">Lovely K</a></b> <br>
                                            19 , 5'0" , hindu , sc , munger <br>
                                            Teacher , india <a href="#" class="w3-text-blue">full profile...</a>
                                             </div>
                                    </div>
                          <div class="row">
                              <img src="images/line2.png" class="img-responsive">
                              </div>
                          
                          <div class="row" style="height:80px;">
                                        <div class="col-sm-2">
                                            <img src="images/p7.jpeg" class="img-responsive img-circle">
                                            </div>
                                        <div class="col-sm-10">
                                           <b> <a href="#" class="w3-text-blue">Lovely K</a></b> <br>
                                            19 , 5'0" , hindu , sc , munger <br>
                                            Teacher , india <a href="#" class="w3-text-blue">full profile...</a>
                                             </div>
                                    </div>
                          
                          </div>
                          
                      </div>
                       <div class="w3-card-12">
                       <div class="panel panel-info">
                      <div class="panel-body">
                          <div class="well-sm row w3-text-blue" style="background-color:lightgray">
                              <b>Recent Profile Visitor</b>
                          </div>
                          <h2>you have no Recent Profile Visitor</h2>
                      </div>
                           </div>
                       </div>
  </div>    
            
                    
                    
                    
                    
    <div class="col-sm-3">
        
        
         <div class="row">      
                             
                    <div class="w3-card-12">
                        <div class="panel panel-info">
                            <div class="panel-body">
                               <div class="w3-text-pink">
                                  <div class="row" style="background-color:lavender;">
                                      <h4 align="center"><b> Upgrade & unlock</b></h4>
                                  </div>
                               </div>
                            <ul>
                                <li>Send email directly</li>
                                <li>Connect instantly via metrimonial chat</li>
                                <li>initiate calls/send sms</li>
                                <li>Access Detailed process</li>
                                <li>Enjoy private Brousing</li>
                                <li>Get noticed by more member</li>
                            </ul>  
                                <div class="row" style="background-color:lavender;">
                                    <h5 align="right"><a href="#" class="text-danger"> Know more/Upgrade now &nbsp; &nbsp;</a></h5> 
                               </div>
                            </div> 
                        </div>
                    </div>
            </div>
        
        
        
             <div class="row">      
                             
                             <div class="w3-card-12">
                                    <div class="panel panel-info">
                                    <div class="panel-body">
                                        <div class="w3-text-pink">
                                            <h2 align="center"><b>Find your partner</b></h2>
                                                    <form method="post" action="search.php">

                                                         <label>Category:</label><select name="categry" class="form-control">
                                                             <option value="gen">gen</option>
                                                             <option value="obc">obc</option>
                                                             <option value="st">gen</option>
                                                             <option value="sc">sc</option>
                                                             <option value="other">other</option>
                                                             </select> 
                                                         <label>Country:</label><select name="country" class="form-control">
                                                             <option value="india">india</option>
                                                             <option value="pakistan">pakistan</option>
                                                             <option value="usa">america</option>
                                                             <option value="austrelia">austrelia</option>
                                                             <option value="other">other</option>
                                                             </select> 
                                                         <label>Religion:</label><select name="religion" class="form-control">
                                                             <option value="hindu">hindu</option>
                                                             <option value="crisdian">crisdian</option>
                                                             <option value="muslim">muslim</option>
                                                             <option value="sikh">sikh</option>
                                                             <option value="other">other</option>
                                                             </select> 
                                                         <label> Gender: <input class="w3-radio" type="radio" name="gender" value="male"> Male <input class="w3-radio" type="radio" name="gender" value="female"> Female</label>  <br>
                                                     <label> 
                                                         <span class="glyphicon glyphicon-search"></span> 
                                                         <input type="submit" value="search"></label>

                                                   </form>
                                           </div>

                                          </div>
                                    </div>
                             </div>      
                 </div>
        
        
        
        
 </div>
     
    
        </div>
        </div>  
    </body>
</html>
		
		
</body>
</html>