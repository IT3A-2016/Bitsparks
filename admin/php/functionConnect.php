<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "faithscheduling";

$con = mysql_connect($host,$user,$password) or die ("Error selecting database");

$seldb = mysql_select_db($db) or die ("Error selecting Database");
?>
