<?php 
include('websiteDB.php');

?>
<html>
    <head>
        <meta charset="utf-8">
      <title>Home page</title>
      <link rel="stylesheet" href="style3.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
     <style>
.container {
width: 100%;
height: 100vh;

background: url('./red.jpg');
background-position: center;
background-size: cover;
padding-left: 8%;
padding-right: 8%;
box-sizing: border-box;
}  
.info{
    text-align: justify; 
}  
h2{
  color:#ffff;
  font-size:100%;
}

.logo{
  width:60px;
  padding-right:20px;
  }
  
  .uum{
        width: 200px;
        padding-right:20px;
     }
h4{ 
    text-align: center;
}
.uum{
    width:20%;
}
     </style>
    </head>
    <body>
        <div class="container">
<div class="navbar">
<img src="logo.png" class="logo">
<nav>
    <ul>
    <li><a href="user_dashboard.php">DASHBOARD</a></li>
        <li><a href="index2.php">HOME</a></li>
        <li><a href="index2.php#about">ABOUT</a></li>
        <li><a href="user_team.php">CONTACT US</a></li> 
      
</ul>

</nav>



<div class="dropdown">
    <button class="dropbtn" style="width: 50%; height: 50%;">
        <img src="menu.png" style="width: 20px; height: 20px;" ></button>
       
    <div class="dropdown-content">
      <h4><div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<small><?php echo $_SESSION['user']['email']; ?></small>
				<?php endif ?>
			</div></h4>
            
            <h5>  <a href="user_profile.php">USER PROFILE</a>
      <a href="user_profile.php">CHANGE PASSWORD</a>
      <a href="user_logout.php">LOG OUT</a></h5>
    </div>
  </div>
 
	<div class="content">
		<!-- notification message -->
		

		
	</div>
  </body>
  </html>

        </div>
    
    <div class="row">
        <div class="col">

            <h1>E-RANKING MANAGEMENT SYSTEM</h1>
            <p class="info">Every year the number of students who would like to enroll in universities are spiking up. 
            Therefore, students face difficulties in their institutional decision making. 
            As a solution, the E-University Ranking system compares the performance of the university and displays the rank. 
            The rankings of the university will be updated every year in order to include the local Malaysian universities. </p>
                <a href="user_dashboard.php"><button type="button">Top Ranking Universities</button></a>
        </div>
        <div class="col2">
        
           <a href="user_uni comparison.php"><div class="card card3">
                <div class="overlay"></div>
                <h5>UNIVERSITY COMPARISON</h5></a>
               
            </div>
           
                <a href="user_university_overview.php"><div class="card card2"> 
                    <div class="overlay"></div>
                    <h5>RANKING OVERVIEW</h5></a>
                   
                </div>
                
        </div>
    </div>
</div>
<div class="about" id="about">
    <h1 class="title">About Us</h1>

    <img src="uum.png" class="uum">

   <h3><p class="info">This system targets to help students on their institutional decision making by comparing local universities in Malaysian. 
   This will act as guidance for the students to choose a suitable university according to their preferred state.
    This system includes research on local universities and ranks it on the E-University Ranking website to indicate which 
    university has good performance in all aspects. This system will show the rankings for each university based on the  
    university ranking, student ratio, international student and academic reputation.</p></h3>
      
    </div>

    <footer class="footer">
            <div class="container3">
          
                <div class="row2"> 
                     <div class="footer-col" >
                        <h4>Need Help or Contact Us?</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <h5>copyright ?? 2021</h5>
                </div>
            </div>
    
       </footer>
    </body>
</html>