<?Php

$id=$_GET['value'];
// Checking data it is a number or not
if(!is_numeric($id)){
echo "Data Error";
exit;
}
require 'config.php';

$count="SELECT *  FROM uniinfo where id=?";

if($stmt = $connection->prepare($count)){
  $stmt->bind_param('i',$id);
  $stmt->execute();

 $result = $stmt->get_result();
 $row=$result->fetch_object();
echo "<tr ><td><b>University information</b></td><div>$row->info</div></tr>";
}else{
echo $connection->error;
}
?>
