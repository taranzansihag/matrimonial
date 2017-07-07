<<html>
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
          <div class="container">
            <div class="responsive">
	  
                
                    <div class="logo"><img src="images/mtrlogo.png"></div>
                    
                    <div class="row" style="height:5px;"></div> 
                 
            <div class="well well-sm">
			

		 </div>   
        
        
           
        
               
               <div class="row">
                       <b class="w3-text-pink" style="text-decoration:underline">New User? Register free </b><b style="text-decoration:underline">&nbsp; and find your jivansathi Today</b> 
              </div>
               
               <div class="row" style="height:15px;"></div>
               
               <div class="col-sm-8">
               
               <div class="row">
                   <div class="panel panel-primary">
                       <div class="panel-body">
               <?php
											if(isset($_GET["err"])){
											  echo "all field requird";
											}
											if(isset($_GET["metch"])){
											  echo "this email allready registered";
											}
			   ?>            
                           
                             
                            <form method="post" action="signup.php">
			<div class=row>
			<label class="col-sm-3">Email:</label>
			<div class="col-sm-9">
			<input type="text" name="email" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Password:</label>
			<div class="col-sm-9">
			<input type="text" name="pass"  required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Fname:</label>
			<div class="col-sm-9">
			<input type="text" name="fname" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">lname:</label>
			<div class="col-sm-9">
			<input type="text" name="lname" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Mobile:</label>
			<div class="col-sm-9">
			<input type="text" name="mobile" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Address:</label>
			<div class="col-sm-9">
			<input type="text" name="address" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Age:</label>
			<div class="col-sm-9">
			<input type="text" name="age" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Category:</label>
			<div class="col-sm-9">
			<input type="text" name="category" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Gender:</label>
			<div class="col-sm-9">
			<input type="text" name="gender" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Religion:</label>
			<div class="col-sm-9">
			<input type="text" name="religion" required="required"><br>
			</div>
			</div>
			<div class=row>
			<label class="col-sm-3">Country:</label>
			<div class="col-sm-9">
			<input type="text" name="country" required="required"><br>
			</div>
			</div>
			<div class="col-sm-9">
			<input type="submit" value="submit">
			</div>
		</form>
                           
                           
                           
                       </div>
                   </div>    
               </div>    
               
            </div>
        
        
        
        <div class="col-lg-4">
            
            <div class="row">
                <div class="panel panel-primary">
                <div class="panel-body w3-card-12"  style="background-color:lightcyan">
                    <div align="center">
                    <b class="w3-text-pink">Happy beginning with<br>
                        Metrimonial.com</b>
                        </div>
                    <div class="row" align="center">
                    <img src="images/m1.jpg" class="img-responsive img-thumbnail" width="50%" style="margine:15">
                    </div>
                  <div align="center">
                     <b class="w3-text-pink">Sunil Bansal</b><br>
                     <b>&nbsp;&nbsp;&nbsp;Weds</b><br>
                       <b class="w3-text-pink">Payal Gupta</b>
                     </div>  
                </div>
                    </div>
            </div>
              
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-body w3-card-12">
                        <h3><b class="w3-text-pink"><i>F I N D your Soul mate...</i></b></h3>
                       <ul>
                           <li><b>finding the soulmate may not be
                                   <br>
                                   easy we made it Simple throught</b><br></li>
                        <li> <b>Our life together begins this day.....<br>
                             <i>Two heart that beat as one.....</i></b></li>
                             <li><b>finding the soulmate may not be
                                   <br>
                                   easy we made it Simple throught</b><br></li>
                        <li> <b>Our life together begins this day.....<br>
                             <i>Two heart that beat as one.....</i></b></li>
                          </ul>   
                    </div>
               </div>
            </div>    
            
       </div>     
        
   
      
       
 </div>
 </div>      
    </body>
</html>
		