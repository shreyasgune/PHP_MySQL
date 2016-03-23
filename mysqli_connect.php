<?php
$servername = "localhost";
$username = "<whatever>";
$password = "<whatever>";
$dbname = "<whatever>";

$dbc = @mysql_connect($servername,$username,$password,$dbname)
OR die('Could not connect to MySQL: ' .
mysql_connect_error());
?>
