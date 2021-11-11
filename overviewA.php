<?php
include 'dbcode.php';
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
height: 130vh;
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
    height: 13%;
    display: flex;
    align-items: center;
}
.search-box { 
    margin-top:-3%;
    margin-left:70%;
}
.moving {
    margin-top:-5%;
    margin-left:84%;
}
button{ 
    margin-top:5%;
    
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
    <button class="dropbtn" style="width: 50%; height:38%;">
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
                <a href="overview.php"><button class="btn btn-dafault">University Ranking</button></a>
                <a href="overviewA.php"><button class="btn btn-primary" >University Indicators</button></a>
                <a href="overview2.php"><button class="btn btn-default"  >Search by University</button></a>

	 <form method="POST" name="search" action="overviewA.php">
        <div id="demo-grid">
            <div class="search-box">
                 <select id="year" name="year[]">
            
                <option  enable selection>-- Select Year --</option>
                        <?php
                        if (! empty($yearResult)) {
                            foreach ($yearResult as $key => $value) {
                                echo '<option value="' . $yearResult[$key]['year'] . '">' . $yearResult[$key]['year'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br></div>
                <div class="moving"><button id="Filter">SEARCH </button></div>
            </div>
            
                <?php
                if (! empty($_POST['year'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1" >

                <thead>
                    <tr>
                    <th><strong>Year</strong></th>
                        <th><strong>University Name</strong></th>
                        <th><strong>University Location</strong></th>
                        <th><strong>University Score</strong></th>
                        <th><strong>University Rank</strong></th>
                        <th><strong>Student Ratio</strong></th>
                        <th><strong>International Students</strong></th>
                        <th><strong>Academic Reputation</strong></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from uniinfo";
                    $i = 0;
                    $selectedOptionCount = count($_POST['year']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['year'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE year in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr><td><div class="col" id="user_data_7"><?php echo $result[$key]['year']; ?> </div></td>
                        <td style="text-align:left;"><div class="col" id="user_data_1"><?php echo $result[$key]['name']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['address']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['score']; ?> </div></td>
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['rank']; ?> </div></td>
                        <td><div class="col" id="user_data_5"><?php echo $result[$key]['ratio']; ?> </div></td>
                        <td><div class="col" id="user_data_6"><?php echo $result[$key]['interstu']; ?> </div></td>
                        <td><div class="col" id="user_data_7"><?php echo $result[$key]['acadrep']; ?> </div></td>
                        
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>
