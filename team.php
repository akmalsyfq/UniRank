<?php
//include auth.php file on all secure pages
require("websiteDB.php");
?>
<html>
    <head>
        <meta charset="utf-8">
      <title>Team</title>
      <link rel="stylesheet" href="style5a.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
h2{
  color:#ffff;
  font-size:100%;
}

.logo{
  width:60px;
  padding-right:20px;
}
     </style>
      <body>
        <div class="container">
            <div class="navbar">
            <img src="logo.png" class="logo"></p>
<h2>E-UNIVERSITY RANKING SYSTEM</h2>
            <nav>
                <ul>
                <li><a href="dashboard.php">DASHBOARD</a></li>
                    <li><a href="homepage.php">HOME</a></li>
                    <li><a href="homepage.php#about">ABOUT</a></li>
                    <li><a href="team.php">CONTACT US</a></li>      
            </ul>
            </nav>
            <div class="dropdown">
                <button class="dropbtn" style="width: 50%; height: 50%;">
                    <img src="menu.png" style="width: 20px; height: 20px;" ></button>
                  
            
                <div class="dropdown-content">
                  <h5><a href="profile.php">ADMIN PROFILE</a>
                  <a href="profile.php">CHANGE PASSWORD</a>
                  <a href="logout.php">LOG OUT</a></h5>
                </div>
              </div>
              </div>
                
        <section class="team-section">
            <div class="container2">
                <div class="row">
                    <div class="section-title">
                        <h1>DEVELOPER TEAM</h1>
                        <p>This website was created for project purposes only.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="team-items">
                         <div class="item">
                             <img src="male1.png" alt="team" />
                             <div class="inner">
                                 <div class="info">
                                      <h5>BRANDON</h5>
                                      <p>Manager</p>
                                     
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <img src="male2.png" alt="team" />
                             <div class="inner">
                                 <div class="info">
                                      <h5>AKMAL SYAFIQ</h5>
                                      <p>Asst.Manager</p>
                                    
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <img src="female3.png" alt="team" />
                             <div class="inner">
                                 <div class="info">
                                      <h5>SERLENA</h5>
                                      <p>Asst. Manager</p>
                                      
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                             <img src="female2.png" alt="team" />
                             <div class="inner">
                                 <div class="info">
                                      <h5>JADE</h5>
                                      <p>Web Designer</p>
                                    
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                            <img src="female1.png" alt="team" />
                            <div class="inner">
                                <div class="info">
                                     <h5>ASVINITHA</h5>
                                     <p>Web Designer</p>
                                     
                    </div>
                </div>
            </div>
                    </div>
                    </div>
                    </div>
                </div>
                    
         </section>
         <footer class="footer">
            <div class="container3">
          
                <div class="row"> 
                     <div class="footer-col">
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
         </head>
         </html>