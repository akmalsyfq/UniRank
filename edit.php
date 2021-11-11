<html>
    <head>
        <meta charset="utf-8">
      <title>Home page</title>
      <link rel="stylesheet" href="style5.css">
	  <link rel="stylesheet" type="text/css" href="style Ak.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>


	h1 
	{text-align: auto;
	 color: white;
	 font-size: 20px;
	 font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
 }
h2
{
  color:#ffff;
  font-size:90%;
}
.logo
{
  width:60px;
  padding-right:20px;
}
	 </style>
    </head>
    <body>
        <div class="container" style="width: 100%; height: 140%;" >
<div class="navbar">
<img src="logo.png" class="logo"></p>
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
    <button class="dropbtn" style="width: 50%; height: 35%;">
        <img src="menu.png" style="width: 20px; height: 20px;" ></button>
      

    <div class="dropdown-content">
      <h5><a href="profile.php">ADMIN PROFILE</a>
      <a href="profile.php">CHANGE PASSWORD</a>
      <a href="logout.php">LOG OUT</a></h5>
    </div>
  </div>
</div>
<h1>RANKING MANAGEMENT - UPDATE</h1>
<?php 
 include('phpCode.php');

 if  (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;
	$record = mysqli_query($db, "SELECT * FROM uniinfo WHERE id=$id");
	while ($n = mysqli_fetch_array($record)) {
	
		if (count($n)) {
		
		$name = $n['name'];
		$address = $n['address'];
		$score = $n['score'];
		$rank = $n['rank'];
		$ratio = $n['ratio'];
		$interstu= $n['interstu'];
		$acadrep = $n['acadrep'];
		$year = $n['year'];
	
	}

	}
 ?>
<form method="post" action="" >
<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="input-group">
		<label>University Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
	<div class="input-group">
		<label>University Location</label>
		<input type="text" name="address" value="<?php echo $address; ?>">
	</div>
	<div class="input-group">
		<label>University Score</label>
		<input type="text" name="score" value="<?php echo $score; ?>">
	</div>
	<div class="input-group">
		<label>University Ranking</label>
		<input type="text" name="rank" value="<?php echo $rank; ?>">
	</div>
	<div class="input-group">
		<label>Student Ratio</label>
		<input type="text" name="ratio" value="<?php echo $ratio; ?>">
	</div>
	<div class="input-group">
		<label>International Student</label>
		<input type="text" name="interstu" value="<?php echo $interstu; ?>">
	</div>
	<div class="input-group">
		<label>Academic Reputation</label>
		<input type="text" name="acadrep" value="<?php echo $acadrep; ?>">
	</div>
	<div class="input-group">
		<label>Year</label>
		<input type="text" name="year" value="<?php echo $year; ?>">
	</div>
	<div class="input-group">
	
	<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
<?php else: ?>
<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
	</div>
</form>

<?php }


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


?>