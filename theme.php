<?php
 ob_start();
  session_start();
  $_SESSION['loginid']=$_SESSION['loginid'];
  ?>
<!DOCTYPE html>
<html>
   <head>
      <title> Themes</title>
      <link rel="stylesheet" href="css/profile_style.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/style.css?v=1.3">
       <link rel="icon" href="t.png" sizes="32x32" />
      <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <style type="text/css">

        h4{
          font-family:lato;
        }
         .container{
                 top:20%;
                border-radius: 30px;
                right: 10%;
                left: 10%;
                padding: 30px;
                font-size:24px;
                
                text-align: center;
         }
      </style>
   </head>
   <body >
      <header >
      <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="0">
          <div class="container-fluid">
             <div class="navbar-header">
               <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
               </div>
             
             <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav">
                  <li > <?php      
	 if($_SESSION['loginid']=="")
	 {
	 echo "<a href='index.php'>Home</a>";
          
			}
			else{
			   echo "<a href='profile.php'>MY PROFILE</a>";
			}
			?></li>
                    <li class="active"><a href="theme.php">THEME</a></li>
                    <li  ><a href="contact.php">CONTACT US</a></li>
                    <li><a href="legend.php">THE LEGEND OF SEABISCUIT</a></li>
                 </ul>
				 <?php      
	 if($_SESSION['loginid']=="")
	 {
             echo "<form class='nav navbar-form navbar-right' style='display:inline;'>
               <div class='form-group'>
                 <input type='text' class='form-control' placeholder='Search'>
                </div>
               <button type='submit' class='btn btn-default'>Submit</button>
               </form>
                
                <ul class='nav navbar-nav navbar-right'>
                 <li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
                 <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
             </ul>";
                 }
      else
	  {
                
           echo "<ul class='nav navbar-nav navbar-right'>
                  <form action='logout.php' method='post' class='nav navbar-form navbar-right' style='display:inline;'>
                <button type='submit' class='btn btn-default'>Logout</button>
               </form> 
			    </ul>";
				}
				?>
				 
				 
             </div>
          </div>
      </nav>
      </header>
      <div class="container">
      <div class="row">
      <div class="col-sm-12" id="hiigh">
      <div id="content">
      
      	                                   <h1>Promoters </h1>
All the promoters of Seabiscuit are highly qualified engineers and management graduates from reputed institutes in the country. They are well-versed in industrial boiler technologies, plant operations, Supply Chain Management and Information Technology. The promoters also have sound background in agriculture and belong to the locale of Vidharbha, Marathwada and Andhra Pradesh. They have experience in managing large teams in excess of 100 people on projects worth multi-million dollars. The promoters are driven by single objective of making use of renewable sources of energy to help improve the standard of living in the rural areas of Marathwada, and support the government initiatives to bridge the massive gap in energy requirements using these energy sources.
<br><br>
<h1>
Completed projects</h1>
Project ACE
We have set up a Biomass Briquetting plant in Aurangabad to support the thriving industry in chemicals, pharmaceuticals, paper, food and textile sectors. The initial production capacity of this plant is 250 MT per month. The captive area around our plant is rich in black soil and supports cultivation of crops like cotton, soya, maize, and lentils like Tur and Urad. The plant is surrounded by closely knit network of small rivulets that support the farms in this area. The material handling processes right from raw material collection, sizing, transportation and storage are automated to a large extent to control the product quality and to eliminate errors due to human judgment. Qualified staff is deployed to operate the press shop, quality, maintenance, finance and administration. We have commenced operations in September 2013.><br>
<h1>
Upcoming projects</h1>
Project DUO
As we settle into Project ACE, we intend to double the capacity of the production line and increase the storage capacity by a factor of 7.

This project shall be accomplished by April 2015 with installation of high capacity briquetting machine and increasing the current raw material storage capacity from 100 tons to 850 tons and finished goods storage from 50 tons to 250 tons.
We are investing in building these capabilities to cater to customers well during the year, especially during the monsoons.

 </div>
     </div>
     </div>
      </div>
   </body>
</html>