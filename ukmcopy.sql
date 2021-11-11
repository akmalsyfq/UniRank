<?php 
include('websiteDB.php');

?>
<html>
    <head>
        <meta charset="utf-8">
      <title>Home page</title>
      <link rel="stylesheet" href="unistyle.css">
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
  
  .uum{
        width: 200px;
        padding-right:20px;
     }
h4{ 
    text-align: center;
}

iframe {
  margin-left:75%;
  
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  border-radius: 5px;
  margin-left:80%;
  margin-top:-40%;
  padding-bottom:2%;
  align:center;
}

.card2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}



.container_text {
  padding-top:30%;
  background: rgba(7, 255, 251, 0.4);
    padding: 50px;
width:70%;
height:80vh;


}

.text{
  font-size:15px;
    text-align: justify;    
    font-family: 'Open Sans', sans-serif;
}
.box{ 
  width: 100%;
height: 100vh;
background: url('./yellow.jpg');
background-position: center;
background-size: cover;
padding-left: 8%;
padding-right: 8%;
box-sizing: border-box;

}
.h3{ 

  text-align:center;
  margin-top:%;
}

     </style>
    </head>
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
      <a href="homepage.php?logout='1'">LOG OUT</a></h5>
    </div>
  </div>
  <div class="header">
	
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
	
		</div>
	</div>	
        </div>
   

<div class="container_text"><h3>UNIVERSITY KEBANGSAAN MALAYSIA (UKM)</h3>
<div class="text"><p>The National University of Malaysia (abbreviation: UKM; Malay: 
Universiti Kebangsaan Malaysia; abbreviated UKM) is a public university located in Bandar
 Baru Bangi, Selangor which is at south of Kuala Lumpur. Its teaching hospital, Universiti
  Kebangsaan Malaysia Medical Centre (UKMMC) is located in Cheras and also has a branch campus
   in Kuala Lumpur. It is the among the most prestigious universities in Malaysia and Southeast
    Asia.There are 17,500 undergraduate students enrolled, and 5,105 postgraduate students of
     which 1,368 are foreign students from 35 countries.National University of Malaysia is one 
     of six research universities in the country. It was ranked number 259th in the world by 
     QS World University Rankings in 2014.[6] It is ranked 98th place in the 100 best new 
     universities established within the last 50 years in the world. It is the only university
      from Malaysia that made it in the 2012 Quacquarelli Symonds (QS) Top 50 Universities Under 
      50 Years Old list ranked in the 31st place. It placed 56th and 56th in the QS Top 500 
      Asian University Rankings in 2014 and 2015 respectively. It is ranked at 160th position 
      in world in the 2020 QS World University Rankings.Universiti Kebangsaan Malaysia, the national 
      university of Malaysia was born from the aspirations of the nationalists to uphold the 
      Malay language as a language of knowledge. The quest for a national university was 
      suggested in 1923 by the writer Abdul Kadir Adabi as a move against British colonisation.
       This nationalist tide galvanised Malay intellectuals of the time but met British suppression.
        The nationalists never wavered and in 1969 the movement again blossomed. A Sponsoring 
        Committee chaired by Syed Nasir Ismail, a Malay intellectual, was set up to prepare a 
        report recommending the establishment of UKM.</p></div></div>

<div class="card2">
  <img src="ukm.png" alt="Avatar" style="width:70%">

</div>
<iframe width="340" height="250" src="https://www.youtube.com/embed/tDO8InfFh5A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  
</iframe>
</div>
  </body>
  </html>

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