<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>R.A.A.J airlines</title>
      <link rel="stylesheet" type="text/css" href="Web_Project/css/main.css">
     <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="Web_Project/dist/slick.js"></script>
     <script type="text/javascript" src="Web_Project/dist/jquery.scrollUp.js"></script>
    <link rel="stylesheet" type="text/css" href="Web_Project/css/slick.css">
    <link rel="stylesheet" href="Web_Project/homepage.css">
    	<link rel="stylesheet" href="Web_Project/forcompany.css">
    	<link rel="stylesheet" href="Web_Project/AdminSignin.css">
	<script src="login.js"> </script>
	<script src="jump.js"> </script>

         <script type="text/javascript" src="Web_Project/dist/demo.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    </head>
    
<body >  
    <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                <a class="navbar-brand" href="homePage.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                <a class="navbar-brand" href="FlightSchedule.php"><span class="glyphicon glyphicon-"></span> Flight Schedule</a>
                <a class="navbar-brand" href="FlightSchedule.php"><span class="glyphicon glyphicon-"></span> About Us</a>
                				
                				
                				
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					


					<li class="dropdown" id = "new">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign in&nbsp;</span><span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
<!--
						  <li><a href="signup.html">Register</a></li>
						  
-->
						  <li class="dropdown-submenu">
							<a tabindex="-1" href="#">Sign in</a>
							<ul class="dropdown-menu">
							  <li><a tabindex="-1" href="Web_Project/Adminpage.html">Manager Sign in</a></li>
							  <li><a href="Web_Project/form.html">Customer Sign in</a></li>
					
							</ul>
						  </li>
						
						</ul>
					</li>
					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcome</span>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							<li><a href="Web_Project/showhistory.php">History</a></li>							
							<li><a href="#" id="logout">Sign out</a></li>
						</ul>
						</li>
				</ul>
			</div>
		</div>
	</nav>
    

    <section class="tm-imgslider">
    <div class="slider single">
					<div><div class="tm-slider"><img class="tm-sliderimage" src="Web_Project/images/YETI-WEBSITE-BANNER-1920_660-MAIN.png" alt="R.A.A.j Airlines"> 
                        <div class="tm-slidertext">
                      </div>
                </div></div>
					<div><div class="tm-slider"><img class="tm-sliderimage" src="Web_Project/images/1.jpg" alt="R.A.A.j Airlines"> 
                        <div class="tm-slidertext">
                       ></div>
                </div></div>
					<div><div class="tm-slider"><img class="tm-sliderimage" src="Web_Project/images/3.jpg" alt="R.A.A.j Airlines"> 
                        <div class="tm-slidertext">
                        </div>
                </div></div>				
				</div>

   </section>
   <br/>
      
    <footer class="tm-footer">
        <div class="tm-us">
        <p class="bold">About Us</p>
        <p>R.A.A.J Airlines goes the extra mile to help you find the best choice of flight tickets to destinations. Our search results provide you with the most up-to-date prices for flights, along with real-time flight statuses, durations, and departure and arrival times to help you find cheap flight tickets quickly.</p>    
        </div>
       
        <div class="tm-address">
        <p class="bold">Nepal (Head Office)</p>
        <p>R.A.A.J Airlines Corporation Building,
            Kathmandu, Nepal    
            Tel No:+977-1-( 4220757, 4248614)<br>
            Fax: +977-1-4225348 <br>
            Email: raajairlines@info.com</p>    
        </div>
<br/>
        
    <section class="tm-reviewsection">
         
         <div class="tm-review ">
             <div class="slider review">
             <div class="tm-revcon">
         <p class="b"> Reviews</p>
             <div class="tm-stars">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
             </div>
                 <div class="tm-rev">
         <p> Great flight, I am recommending it to everyone.</p>  <br/>
         <p> Rachel Green &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Tripster</p> </div>
  
                 </div>
             
             <div class="tm-revcon">
         <p class="b"> Reviews</p>
             <div class="tm-stars">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
             </div>
                 <div class="tm-rev">
         <p> Nice Flight, I had a wonderful expeirence and a safe flight. </p>  <br/>
         <p> Ross Geller</p> </div>
  
                 </div>
             
            
             <div class="tm-revcon">
         <p class="b"> Reviews</p>
             <div class="tm-stars">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
             </div>
                 <div class="tm-rev">
         <p> Great services,Great staff, Safe flight,enough said. </p>  <br/>
         <p> Joey Tribiani &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Actor</p> </div>
  
                 </div>    
                 
                 
             <div class="tm-revcon">
         <p class="b"> Reviews</p>
             <div class="tm-stars">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
             </div>
                 <div class="tm-rev">
         <p> Enjoyed the comfortable and and luxurious flight. I recommend it. </p>  <br/>
         <p> Pheobe Buffay </p> </div>
  
                 </div>   
                 
                 <div class="tm-revcon">
         <p class="b"> Reviews</p>
             <div class="tm-stars">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
             </div>
                 <div class="tm-rev">
         <p> Nice, safe and clean just the way I like it. </p>  <br/>
         <p> Monica Geller </p> </div>
  
                 </div>    
                 
                        <div class="tm-revcon">
         <p class="b"> Reviews</p>
             <div class="tm-stars">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
                  <img src="Web_Project/images/star.png">
             </div>
                 <div class="tm-rev">
         <p> Knock knock whose there ? ... a satisfied customer. </p>  <br/>
         <p> Chandler Bing </p> </div>
  
                 </div>  
                 
             </div>
             
 
         </div>
     </section>
    
    <div class="tm-media">
        <a href="#"> <img src="Web_Project/images/fb.png"></a>
        <a href="#"> <img src="Web_Project/images/G.png"> </a>
        <a href="#"> <img src="Web_Project/images/twittr.png"> </a>
        <a href="#">  <img src="Web_Project/images/insta.png"> </a>
        
        </div>


</body>
</html>

    