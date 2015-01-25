<?php 
include_once("../conn.php"); 
$type1=$_POST['type1'];
$name=$_POST['name'];
$sql="INSERT INTO gather_type2 (type1,name) VALUES ('$type1','$name')";
$result = mysql_query($sql);
 ?>
