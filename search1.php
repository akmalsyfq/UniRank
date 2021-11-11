<?php  
    	session_start();
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
		<div class ="input-group">
			<input type="text" name="name" value="<?php echo $name; ?>">
                        <button class="btn" type="submit" name="search" >Search</button>
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