<?php //create database connection
$connect=mysql_connect("localhost","root","");
if(!$connect){
die("Database connection failed:".mysql_error());
}
$db_select=mysql_select_db("master_chef",$connect);
if(!$db_select){
die("Database selection failed:".mysql_error());
}
?>