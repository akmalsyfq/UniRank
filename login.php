<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style55.css">

	<style>
	* { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background: #F8F8FF;
	font-family: 'Poppins', sans-serif;
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
body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: url('./Dance To Forget.png') no-repeat;
  background-position: center;
background-size: cover;

}
.link{ 
	font-size:50%;
	text-align:right;
	margin-right:90%;
	padding-top:1%;
	color:#ffff;
}
	</style>
</head>
<body>
<a href="index.php" class="link">BACK</a>
<img src="logo.png">
<h3>E-RANKING MANAGEMENT SYSTEM</h3>

	<div class="header">
	<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

	<div class="radio-toolbar">
				 <input type="checkbox" id="radioApple" name="radioFruit" value="admin" checked>
				 <label for="radioApple">Admin</label>
        <div class="input-group">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="submit">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register_new.php">Sign up</a><br>
		</p>
	</form>

</body>	

</html>
<?php
      session_start();
      include 'websiteDB.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query=mysqli_query($db,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['user_id'];
if ($num_rows>0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='homepage.php'
    </script>
    <?php
}
}
      ?>
