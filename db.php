<?php
$host = "localhost";
$user = "it58160168";
$password = "it58160168";
$dbname = "it58160168";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>