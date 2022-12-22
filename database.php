<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "customer_data";
$table  = "customer_datas";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}