<?php 
include_once("../conn.php"); 
$type1=$_GET['type1'];
$sql="SELECT * FROM gather_type2 WHERE type1=".$type1;
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$data[] = array("id"=>$row['id'],"name"=>urlencode($row['name'])); 
}
echo  urldecode(json_encode($data)); 
 ?>
