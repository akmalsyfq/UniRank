<?php 
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'yellow');

	// initialize variables
	$name = "";
	$address = "";
    $score="";
	$rank="";
	$ratio ="";
	$interstu = "";
	$acadrep = "";
	$year="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
        $score = $_POST['score'];
		$rank = $_POST['rank'];
		$ratio = $_POST['ratio'];
		$interstu = $_POST['interstu'];
		$acadrep = $_POST['acadrep'];
		$year = $_POST['year'];

		mysqli_query($db, "INSERT INTO uniinfo (name, address, score, rank, ratio, interstu, acadrep, year) VALUES ('$name','$address','$score','$rank','$ratio','$interstu','$acadrep','$year')"); 
		$_SESSION['message'] = "University saved"; 
		header('location: ranking management2.php');
	}
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$score = $_POST['score'];
		$rank = $_POST['rank'];
		$ratio = $_POST['ratio'];
		$interstu = $_POST['interstu'];
		$acadrep = $_POST['acadrep'];
		$year = $_POST['year'];
	
		mysqli_query($db, "UPDATE uniinfo SET name='$name', address='$address', score='$score', rank = '$rank',ratio='$ratio',interstu='$interstu',acadrep='$acadrep',year='$year' WHERE id=$id");
		$_SESSION['message'] = "University updated!"; 
		header('location: ranking management.php');
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM uniinfo WHERE id=$id");
		$_SESSION['message'] = "Univerisity deleted!"; 
		header('location: ranking management.php');
	}
?>