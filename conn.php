<?php

//$q = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
$q = mysql_connect("localhost","root","root");
if(!$q)

{

die('Could not connect: ' . mysql_error());

}

mysql_query("set names utf8"); //以utf8读取数据

//mysql_select_db(SAE_MYSQL_DB,$q); //数据库
mysql_select_db("xsky_new",$q); //数据库
?>