<?php
session_start();
// DATABASE SETTINGS
$d_username=""; //database username
$d_password=""; //database password
$d_host="localhost";     //database host name
$d_database="Secret_diary";
$con = new mysqli($d_host,$d_username,$d_password,$d_database);
?>
