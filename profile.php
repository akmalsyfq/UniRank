<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>UPDATE PROFILE</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="style7.css">
  </head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include 'websiteDB.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM users where user_id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  <style>
  	* { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background: #F8F8FF;
}
.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #e64d00;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 40%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #e64d00;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	float: left;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
img{
      width: 80px;
      margin-top:2%;
   }
   h3 {

	font-size: 20px;
    color: #ffff;
    text-transform: capitalize;
    font-weight: 100;
    position: relative;
    text-align: center;
    margin-top:20px;
   }
     .cancel { 
       padding-top: 8%;
      text-align: center;
  }

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
      </div>
           <div class="container">
                <div class="navbar">
                <img src="logo.png" class="logo"></p>
<h2>E-RANKING MANAGEMENT SYSTEM</h2>
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
                      <h5><a href="#update">ADMIN PROFILE</a>
                      <a href="#update">CHANGE PASSWORD</a>
                      <a href="logout.php">LOG OUT</a></h5>
                    </div>
                  </div>
                  </div>
                  <div class="header">
	<h2>Update Profile</h2>
</div>
<form method="post" action="#">


<div class="input-group">
		<label>Firstname</label>
		<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required>
	</div>
	<div class="input-group">
		<label>Lastname</label>
		<input type="text" name="lastname" required value="<?php echo $row['lastname']; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $row['email']; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" value="<?php echo $row['password']; ?>">
	</div>
	

	<div class="input-group">
		<button type="submit" class="btn" name="submit">Update</button>
	</div>
	 
               </body>
      </html>
	  <?php
      if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
      $query = "UPDATE users SET firstname = '$firstname',
                      lastname = '$lastname', email = '$email', password = '$password'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "profile.php";
        </script>
        <?php
             }               
?>  