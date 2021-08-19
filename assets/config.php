<?php
session_start();
// DATABASE SETTINGS
$d_username="root";
$d_password="password";
$d_host="localhost";
$d_database="Secret_diary";
$con = new mysqli($d_host,$d_username,$d_password,$d_database);
?>
