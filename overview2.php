<?php
include 'DBcode.php';
$db_handle = new DBController();
$yearResult = $db_handle->runQuery("SELECT DISTINCT year FROM uniinfo ORDER BY year ASC");
?>
<html>
    <head>
        <meta charset="utf-8">
      <title>Home page</title>
      <link rel="stylesheet" href="style3.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
     <style>
         .container {
width: 100%;
height: 260vh;
background: url('./kuning.jpg');
position:static;
background-position: center;
background-size:cover;
padding-left: 8%;
padding-right: 8%;
}
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
     margin-top:3%;
     padding-top:20px"
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
	 text-align: left;
	 background:#d96459;
	}
  
        td 
	{background-color:#fbefcc;
	 border: 0px solid black;
	 font-weight: lighter;
	 padding:10px;
     width: 50px;
     font-size: 12px;
	 text-align: left;
    
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
 
h2{
  color:#ffff;
  font-size:100%;
}

.logo{
  width:60px;
  padding-right:20px;
  }
  
  .uum{
        width: 200px;
        padding-right:20px;
     }
h4{ 
    text-align: center;
}
.navbar { 
    height: 6%;
    display: flex;
    align-items: center;
}
.input-group { 
    margin-top:-3%;
    margin-left:67%;
}
.moving {
    margin-top:-7%;
    margin-left:79%;
}
.dropdown {
      margin-top:-9px;
    position: relative;
    left: -20px;
    display: inline-block;
  }
	.dropbtn {
    margin-left: 50px;
    background-color: #fca400;
    color: white;
    padding: 6px;
    border: none;
  }
  h5{ 
    color:#fff;
    text-shadow: 0 0 5px #999;
    font-size: 10px;
}
.btn{ 
	margin-left:12px;
}
     </style>
    </head>
    <body>
        <div class="container">
<div class="navbar">
<img src="logo.png" class="logo">
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
      <h4><div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<small><?php echo $_SESSION['user']['email']; ?></small>
				<?php endif ?>
			</div></h4>
            
            <h5>  <a href="profile.php">ADMIN PROFILE</a>
      <a href="profile.php">CHANGE PASSWORD</a>
      <a href="logout.php">LOG OUT</a></h5>
    </div>
  </div>
                </div>
                <h1>UNIVERSITY OVERVIEW</h1>
                <a href="overview.php"><button class="btn" type="submit" name="search" >View By Year</button></a>
<?php  
    
	$db = mysqli_connect('localhost', 'root', '', 'yellow');
$name = "";
?>

<!DOCTYPE html>
<html>
<head>
<title>University </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>



<body>
    
<form>
		<div class ="input-group"><input type="text" name="name" value="<?php echo $name; ?>">
                        <button class="btn" type="submit" name="search" >SEARCH</button>
		</div>
</form>	

<?php 
$results = mysqli_query($db, "SELECT * FROM uniinfo");

if (isset($_GET['search'])) {
	$name = $_GET['name'];
	if (isset($name))
		{$results = mysqli_query($db, "SELECT * FROM uniinfo WHERE name LIKE '%$name%'");}
	else
		{$results = mysqli_query($db, "SELECT * FROM uniinfo");} 
}
?>

<table cellpadding="10" cellspacing="1">
	<thead>
		<tr>
			<th><strong>Year</strong></th>
			<th><strong>UniName</strong></th>
			<th><strong>UniLocation</strong></th>
			<th><strong>UniScore</strong></th>
			<th><strong>UniRank</strong></th>
			<th><strong>Student Ratio</strong></th>
			<th><strong>International Students</strong></th>
			<th><strong>Academic Reputation</strong></th>
			
		</tr>
	</thead>

        <?php while($row = mysqli_fetch_array($results)){?>
<tr>
			<td><div class="col"><?php echo $row['year']; ?></div></td>
			<td><div class="col"><a href="<?php echo $row['info'];?>?value=<?php echo $row['id']; ?>"</a><?php echo $row['name']; ?></div></td>
			<td><div class="col"><?php echo $row['address']; ?></div></td>
			<td><div class="col"><?php echo $row['score']; ?></div></td>
			<td><div class="col"><?php echo $row['rank']; ?></div></td>
			<td><div class="col"><?php echo $row['ratio']; ?></div></td>
			<td><div class="col"><?php echo $row['interstu']; ?></div></td>
			<td><div class="col"><?php echo $row['acadrep']; ?></div></td>
</tr>
<?php } ?>
</table>
</body>
</html>