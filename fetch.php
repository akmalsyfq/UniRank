<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=yellow", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM uniinfo 
 WHERE name REGEXP '".$search."' 
 OR address REGEXP '".$search."'
 OR year REGEXP '".$search."'  
 OR score REGEXP '".$search."' 
 OR rank REGEXP '".$search."' 
 OR ratio REGEXP '".$search."'
 OR interstu REGEXP '".$search."'
 OR acadrep REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT * FROM uniinfo ORDER BY id
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>