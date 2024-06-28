<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "web_portfolio";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect!");
}