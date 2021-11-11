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
     h2{
  color:#ffff;
  font-size:100%;
}

.logo{
  width:60px;
  padding-right:20px;
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
.card1{
    margin-left:40%;
    align-items: center;
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
    background-image: url(Seach2.jpg);
    background-position: center;
    background-size: cover;
    transition: transform 0.5s;
}
.card3{ 
    background-image: url(Search.jpg); 
    

}
.card4{ 
    background-image: url(Search2.jpg); 
}
     </style>
       <body>
        <div class="container">
<div class="navbar">
<img src="logo.png" class="logo">
<h2>E-UNIVERSITY RANKING SYSTEM</h2>
<nav>
    <ul>
    <li><a href="dashboard.php">DASHBOARD</a></li>
        <li><a href="homepage.php">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="team.php">CONTACT US</a></li> 
      
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
            
            <h5>  <a href="profile.php">ADMIN PROFILE</a>
      <a href="profile.php">CHANGE PASSWORD</a>
      <a href="logout.php">LOG OUT</a></h5>
    </div>
  </div>
                </div>
  <h1>UNIVERSITY OVERVIEW</h1>
	
	

        <div class="row" style="align-items:center">
  
        <div class="col">

    
        </div>
        <div class="col2">
        
           
                
                  
                          <a href="overview.php"><div class="card card3" >
                              <div class="overlay"></div> 
                               <h5>View by Year</h5></a>
                        
                    </div>
                  
                        <a href="overview2.php"><div class="card card4">
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