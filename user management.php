<?php  include "usered.php"; ?>



<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>University Management</title>
    <link rel="stylesheet" href="style8.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700">
  
    <style>
	#rcorners 
	{border: 2px solid white;
	 padding:10px 70px 15px;
	 border-radius: 0px 100px;
	 background: rgba(255, 255, 255, 0.5);
	}

        table 
	{margin: 0 auto;
	 font-size: small;
	 border: 1px solid black;
	 border-collapse: collapse;
	 width: 50%;
	 counter-reset: row-num -1;
	}
  
	h1 
	{text-align: auto;
	 color: white;
	 font-size: 20px;
	 font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
        }
		h2{
  color:#ffff;
  font-size:100%;
}

.logo{
  width:40px;
  padding-right:20px;
}
  
        th 
	{font-weight: bold;
	 color: white;
	 border: 1px solid black;
	 padding: 10px;
	 text-align: center;
	 background: #a64dff;
	}
  
        td 
	{background-color: #d9b3ff;
	 border: 1px solid black;
	 font-weight: lighter;
	 padding:0 50px;
	 text-align: center;
	}

        tr
	{background-color: #d9b3ff;
	 border: 1px solid black;
	 font-weight: lighter;
	 height: 28px;
	 padding:0 50px;
	 text-align: center;
	 counter-increment: row-num;
	}

	table tr td:first-child::before 
	{content: counter(row-num);
	}

	.input-group 
	{margin: 10px 0px 10px 0px;
	}

	tr:hover 
	{background: #F5F5F5;
	}

	.input-group label 
	{display: block;
	 text-align: left;
	 margin: 3px;
	}

	.input-group input 
	{height: 20px;
	 width: 40%;
	 padding: 5px 10px;
	 font-size: 16px;
	 border-radius: 5px;
	 border: 1px solid gray;
	 margin: auto;
	}

	.btn 
	{padding: 10px;
	 font-size: 15px;
	 color: white;
	 background: #a64dff;
	 border: none;
	 border-radius: 5px;
	}

	.edit_btn 
	{text-decoration: none;
	 padding: 2px 5px;
	 background: #2E8B57;
	 color: white;
	 border-radius: 3px;
	}

	.del_btn 
	{text-decoration: none;
	 padding: 2px 5px;
	 color: white;
	 border-radius: 3px;
	 background: #800000;
	}

	.msg 
	{margin: 30px auto; 
	 padding: 10px; 
	 border-radius: 5px; 
	 color: #3c763d; 
	 background: #dff0d8; 
	 border: 1px solid #3c763d;
	 width: 50%;
	 text-align: center;
	}

    </style>
</head> 

<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container">
    <div class="navbar">
    <img src="logo.png" class="logo"></p>
<h2>E-RANKING MANAGEMENT SYSTEM</h2>
    <nav>
        <ul>
		<li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="homepage.php">HOME</a></li>
            <li><a href="homepage.php#about">ABOUT</a></li>
            <li><a href="team.php">CONTACT US</a></li>      
    </ul>
    </nav>
    <div class="dropdown">
        <button class="dropbtn" style="width: 50%; height: 80%;">
        <img src="menu.png" style="width: 20px; height: 20px;" ></button>
  
        <div class="dropdown-content">
            <h5><a href="profile.php">ADMIN PROFILE</a>
            <a href="profile.php">CHANGE PASSWORD</a>
            <a href="logout.php">LOG OUT</a></h5>
        </div>
    </div>
    </div>

	<h1>USER MANAGEMENT</h1>
	<!-- TABLE CONSTRUCTION-->
	<div id="rcorners">

	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
		echo $_SESSION['message']; 
		unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>

	<?php 	$results = mysqli_query($db,"SELECT * FROM users WHERE type = 'user' ");
	?>

        <table>
	<thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th colspan="2">Action</th>
            </tr>
	</thead>

        <?php
        while($row = mysqli_fetch_array($results))
        {
	?>

            <tr>
                <td> </td>
                <td>  <?php echo $row['email']; ?></td>
                <td>  <?php echo $row['firstname']; ?></td>
                <td>  <?php echo $row['lastname']; ?></td>
		<td>  <a href="user management.php?edit=<?php echo $row['user_id']; ?>" class="edit_btn">Edit</a></td>
		<td>  <a href="usered.php?delete=<?php echo $row['user_id']; ?>" class="del_btn">Delete</a></td>
            </tr>

        <?php
        } ?>
	</table>
</body>

</html>
<?php 
if (isset($_GET['edit']))
	{$user_id = $_GET['edit'];
	 $update = true;
	 $record = mysqli_query($db, "SELECT * FROM users WHERE user_id='$user_id'");
	 while ($n = mysqli_fetch_array($record)) {
		//$n = mysqli_fetch_array($record);
		if (count($n)) {
	 $firstname = $n['firstname'];
	 $lastname = $n['lastname'];
	 $email = $n['email'];
	}
}?>
	<form method="post" action="usered.php" >
	    
	<div class="input-group">
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		<label>First Name</label>
	<input type="text" name="firstname" value="<?php echo $firstname; ?>">
	</div>

	<div class="input-group">
		<label>Last Name</label>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>">
	</div>

	<div class="input-group">
		<label>Email</label>
	<input type="text" name="email" value="<?php echo $email; ?>">
	</div>

	<div class="input-group">
		<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >UPDATE</button>
		<?php endif ?>
	</div>

	</div> 
    </div>
	<?php
}
?>