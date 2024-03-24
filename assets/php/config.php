<?php

$severname = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'rhl_database';

$connect = mysqli_connect($severname, $username, $pass, $dbname);

if(!$connect)
{

die("connection Error".myql_error());

}
?>