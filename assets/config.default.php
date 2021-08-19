<?php
session_start();
// DATABASE SETTINGS
$d_username=""; //database username
$d_password=""; //database password
$d_host="localhost";     //database host name
$d_database=""; //database name
$con = new mysqli($d_host,$d_username,$d_password,$d_database);
// ENV
$GLOBALS["ENV"] = "sandbox"; // "sandbox, production"
$GLOBALS["SecretKey"] = "cbc256";
$GLOBALS["SecretIV"] = "56sha";
// date
date_default_timezone_set("Asia/Kolkata");    //indian time zone
$time=date('H');
?>
