<?php  include('phpCode.php');?>
<html>
    <head>
        <meta charset="utf-8">
      <title>Home page</title>
      <link rel="stylesheet" href="style3.css">
      <link rel="stylesheet" type="text/css" href="style Ak.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  
     <style>
	 #rcorners 
	{border: 4px solid white;
	 padding:10px 70px 15px;
	 border-radius: 0px 100px;
	 background: rgba(255, 255, 255, 0.5);
	}

    table 
	{margin: 0 auto;
    padding-top:20%;
	 font-size: small;
	 border: 0px solid black;
	 border-collapse: collapse;
	 width: 100%;
     height: 10px;
	}
  
        h1 
	{text-align: auto;
	 color: white;
	 font-size: 20px;
	 font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        th 
	{font-weight: bold;
	 color: white;
	 border: 0px solid black;
	 padding: 10px;
	 text-align: center;
	 background:#d96459;
	}
  
        td 
	{background-color:#fbefcc;
	 border: 0px solid black;
	 font-weight: lighter;
	 padding:10px;
     width: 50px;
     font-size: 12px;
	 text-align: center;
    
	}

        tr
	{background-color: #d9b3ff;
	 border: 1px solid black;
	 font-weight: lighter;
	 height: 20px;
     width: 10px;
	 padding:0 20px;
	 text-align: left;

	}

	tr:hover 
	{background: #F5F5F5;
	}

	
    .Filter
	{padding:auto;
	 font-size: 15px;
	 color: black;
	 background:#FFF8DC;
	 border: none;
     margin-left:-60%;
     margin-top:-3%;
     padding-top:12%;
     margin-bottom: 10%;
	 border-radius: 5px;
	}

    .search-box {
    padding-left: 90%;
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
.search 

{margin-left:80%;
	margin-top:-13%;

}
.button 
{margin-left:-70%;
	margin-top:-70%;
	
}
.input-group{ 
	margin-left:20;
	background: #ff9999;
	margin-top:-1%;
	padding:-12%;
}


	 </style>

    </head>
    <body>
        <div class="container" style="width: 100%; height: 124%;">
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
    <button class="dropbtn" style="width: 50%; height: 40%;">
        <img src="menu.png" style="width: 20px; height: 20px;" ></button>
      

    <div class="dropdown-content">
      <h5><a href="profile.php">ADMIN PROFILE</a>
      <a href="profile.php">CHANGE PASSWORD</a>
      <a href="logout.php">LOG OUT</a></h5>
    </div>
</div>
  </div>
 

  <h1>RANKING MANAGEMENT</h1>
  <button style="margin-right:20%; margin-top:4%" ><a href="ranking management2.php" class="button2" >Add Uni</a></button>
  <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php 
 ?>
<div class="search">
<form method="GET" name="search" action="">
     
                <select id="year" name="year"> </div>
<option disabled selected>-- Select Year --</option>
    <?php
       
        $r = mysqli_query($db, "SELECT DISTINCT year From uniinfo");  // Use select query here 

        while($data = mysqli_fetch_array($r))
        {
            echo "<option value='". $data['year'] ."'>" .$data['year'] ."</option>";  // displaying data in option menu
        }
		
		
    ?>           </select><br> <br>
	<div class="button">
	  <button id="Filter" name="cari">Search</button></div></table>
	 
</table> 

</div>

<?php
if (isset($_GET['year'])) { 
	$YearVal = $_GET['year'];
	
$results = mysqli_query($db, "SELECT * FROM uniinfo where year=$YearVal;");
	
	?>
 <table cellpadding="30" cellspacing="1" style="margin-top:-5%;padding-top:20px">
	<thead>
		<tr>
	     	<th>Year</th>
			<th>UniName</th>
			<th>UniLocation</th>
			<th>UniScore</th>
			<th>UniRank</th>
			<th>StudentRatio</th>
			<th>InternationalStudent</th>
			<th>AcademicReputation</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>	
			<td><?php echo $row['year']; ?></td>
			<td style="text-align:left;width:220px"><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['score']; ?></td>
			<td><?php echo $row['rank']; ?></td>
			<td><?php echo $row['ratio']; ?></td>
			<td><?php echo $row['interstu']; ?></td>
			<td><?php echo $row['acadrep']; ?></td>
			<td>
				<a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="phpCode.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
		
	<?php } }?>

	</body>
</html>

<?php 
 /*}
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
		$inter = $n['inter'];
		$repu = $n['repu'];
		$year = $n['year'];
	
	}

	}
 ?>
<form method="post" action="phpCode.php" >
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
		<input type="text" name="inter" value="<?php echo $inter; ?>">
	</div>
	<div class="input-group">
		<label>Academic Reputation</label>
		<input type="text" name="repu" value="<?php echo $repu; ?>">
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

<?php }*/
?>