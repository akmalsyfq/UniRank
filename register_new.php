<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
    <link rel="stylesheet" href="style55.css">
</head>

<style>
	* { margin: 0px; padding: 0px; }
body {
	font-size: 110%;
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

</style>
<body>

<img src="logo.png">
<h3>E-RANKING MANAGEMENT SYSTEM</h3>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register_new.php">

<div class="form-inner">
            
			<form action="" class="signup" method="post">

			 <div class="radio-toolbar">
				 <input type="checkbox" id="radioApple" name="radioFruit" value="admin" checked>
				 <label for="radioApple">Admin</label>
			 
				 <div class="signup-link">
<div class="input-group">
		<label>Firstname</label>
		<input type="text" name="firstname" required>
	</div>
	<div class="input-group">
		<label>Lastname</label>
		<input type="text" name="lastname" required>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" required>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" required>
	</div>
	
	<div class="input-group">
		<button type="submit" class="btn" name="submit">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>
<?php
      include 'websiteDB.php';
if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['radioFruit'];



  $query = "INSERT INTO users
                (firstname, lastname, email, password, type)
                VALUES ('".$firstname."','".$lastname."','".$email."','".$password."','".$type."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
                <script type="text/javascript">
            alert("Successfully Added.");
            window.location = "login.php";
        </script>
                <?php
}
      ?>