<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'masterlist';

// Create a new PDO object
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
