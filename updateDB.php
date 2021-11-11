<?php 
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'yellow');

	// initialize variables
	$firstname = "";
	$lastname  = "";
    $email     = "";
    $password  = "";
	$user_id = 0;
	$update = false;


	if (isset($_POST['update'])) {
		$user_id = $_POST['user_id'];
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
	
		mysqli_query($db, "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', password = '$password', WHERE user_id=$user_id");
		$_SESSION['message'] = "Profile updated!"; 
		header('location: profile.php');
	}
	
?>