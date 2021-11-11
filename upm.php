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
   

<div class="container_text"><h3>UNIVERSITY PUTRA MALAYSIA (UPM)</h3>
<div class="text"><p>University Putra Malaysia (UPM; formerly known as Universiti Pertanian 
Malaysia or College of Agriculture Malaya or School of Agriculture) is recognised by the independent 
government assessments as one of Malaysia's leading research universities offering undergraduate and
 postgraduate courses with a focus on agricultural sciences and its related fields.Founded in 1931 
 as the School of Agriculture, UPM's main campus is in Serdang, Selangor. It was formerly known as 
 Universiti Pertanian Malaysia or the Agricultural University of Malaysia. Now, UPM offers a wide 
 range of undergraduate and postgraduate programmes in most fields such as science, engineering, 
 medicine, veterinary medicine, business and social science.It was ranked as the 132nd best university 
 in the world in 2021 by Quacquarelli Symonds and it was ranked 28th among asian universities and the 
 2nd best university in Malaysia. In the Integrated Rating of Malaysian Institutions of Higher
  Education (SETARA), UPM maintain its six stars rating, which is 'Highly Competitive'.The university 
  since its inception as Universiti Pertanian Malaysia, has had two branch campuses apart from the main 
  campus at Serdang, Selangor. The UPM branch campuses were in Bintulu, Sarawak and Mengabang Telipot, 
  Terengganu.The campus in Terengganu has been upgraded to the University College of Science and 
  Technology Malaysia (KUSTEM), with its own management and administration. KUSTEM officially broke 
  away from UPM on 1 July 2001.The Medicine and Health Sciences faculty maintains a campus complex
   adjacent to a local hospital in Serdang.</p></div></div>


<div class="card2">
  <img src="upm.png" alt="Avatar" style="width:130%;">

</div>
<iframe width="340" height="250" src="https://www.youtube.com/embed/w5QZuPkobeo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
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