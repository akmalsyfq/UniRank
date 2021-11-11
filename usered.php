<?php 

session_start();
$db = mysqli_connect('localhost', 'root', '', 'yellow');

// initialize variables
$firstname = "";
$lastname = "";
$email = "";
$user_id = "";
$update = false;


if (isset($_POST['update'])) 
	{$firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
	 $user_id = $_POST['user_id'];

	 mysqli_query($db, "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email' WHERE user_id='$user_id'");
	 $_SESSION['message'] = "USER DETAILS UPDATED!"; 
	 header('location: user management.php');
	}

if (isset($_GET['delete'])) 
	{$user_id = $_GET['delete'];

	 mysqli_query($db, "DELETE FROM users WHERE user_id='$user_id'");
	 $_SESSION['message'] = "USER DETAILS!"; 
	 header('location: user management.php');
	}
?>