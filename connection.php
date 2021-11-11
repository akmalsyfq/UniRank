<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'yellow');
// variable declaration
$email = "";
$password   = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['submit'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $firstname,$lastname, $email, $password;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$firstname     =  e($_POST['firstname']);
	$lastname      =  e($_POST['lastname']);
	$email         =  e($_POST['email']);
	$password      =  e($_POST['password']);
    // form validation: ensure that the form is correctly filled
	if (empty($firstname)) { 
		array_push($errors, "Firstname is required"); 
	}
	if (empty($lastname)) { 
		array_push($errors, "Lastname is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password)) { 
		array_push($errors, "Password is required"); 
	}
    if (isset($_POST['type'])) {
        $user_type = e($_POST['type']);
        $query = "INSERT INTO users (firstname, lastname, email, type, password) 
                  VALUES('$firstname','$lastname', '$email', '$type', '$password')";
        mysqli_query($db, $query);
        $_SESSION['success']  = "New user successfully created!!";
        header('location: homepage.php');
    }else{
        $query = "INSERT INTO users (firstname, lastname, email, type, password) 
                  VALUES('$firstname','$lastname', '$email', 'user', '$password')";
        mysqli_query($db, $query);

        // get id of the created user
        $logged_in_user_id = mysqli_insert_id($db);

        $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
        $_SESSION['success']  = "You are now logged in";
        header('location: user_homepage.php');				
    }
}
// return user array from their id
function getUserById($user_id){
	global $db;
	$query = "SELECT * FROM users WHERE user_id=" . $user_id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}
// LOGIN USER
function login(){
	global $db, $email, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}


		$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/homepage.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: user_homepage.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}

// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
?>