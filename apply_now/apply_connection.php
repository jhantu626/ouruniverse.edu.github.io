<?php
$con=mysql_connect("localhost","root","");

if(!$con){
    die("Database Could Not Connect".mysql_error());
}
else{
    mysql_select_db("ouruniverse",$con);
}
?>