<?php 
include('websiteDB.php');

?>
<html>
    <head>
        <meta charset="utf-8">
      <title>Home page</title>
      <link rel="stylesheet" href="styleoverview.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>
     .container {
width: 100%;
height: 100vh;
background: url('./red.jpg');
position:static;
background-position: center;
background-size:cover;
padding-left: 8%;
padding-right: 8%;
}
     h2{
  color:#ffff;
  font-size:100%;
}

     h1 
	{text-align: auto;
	 color: white;
	 font-size: 20px;
	 font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif'; 
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

.row{ 
    margin-left:-60%;
    display: flex;
    height: 70%;
    align-items: center;
}
.col{ 
    flex-basis: 50%;
    align-items: center;
}
.col2{ 
    flex-basis: 50%;
}
.card{ 
position: relative;
width: 300px;
height: 300px;
display: inline-block;
border-radius: 10px;
padding: 15px 25px;
box-sizing: border-box;
cursor: pointer;
margin: 70px 15px;
    background-image: url(Seach1.jpg);
    background-position: center;
    background-size: cover;
    transition: transform 0.5s;
}
.card3{ 
    background-image: url(Search.jpg); 
}
.card4{ 
    background-image: url(Search1.jpg); 
}
     </style>
       <body>
        <div class="container">
<div class="navbar">
<img src="logo.png" class="logo">
<h2>E-UNIVERSITY RANKING SYSTEM</h2>
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
            
            <h5>  <a href="user_profile.php">ADMIN PROFILE</a>
      <a href="user_profile.php">CHANGE PASSWORD</a>
      <a href="user_logout.php">LOG OUT</a></h5>
    </div>
  </div>
                </div>
  <h1>UNIVERSITY OVERVIEW</h1>
	
	

        <div class="row" style="align-items:center">
  
        <div class="col">

    
        </div>
        <div class="col2">
        
           
                
                  <div class="card card3" >
                          <a href="user_overview.php"><div class="overlay"></div> 
                        <h5>View by Year</h5></a>
                        
                    </div>
                  
                        <a href="user_overview2.php"><div class="card card4">
                            <div class="overlay"></div> 
                            <h5>View by University</h5></a>
                            
                        </div>
        </div>
    </div>
</div>

      
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
                    <h5>copyright © 2021</h5>
                </div>
            </div>
    
       </footer>
    </body>
</html>