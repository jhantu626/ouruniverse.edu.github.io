<?php
$con=mysql_connect("localhost","root","");

if(!$con){
    die("Could Not Connect With Database ".mysql_error());
}
else{
    mysql_select_db("ouruniverse",$con);
}
?>