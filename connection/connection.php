<?php
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with appropriate values
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'phr_infosys';

// Create a connection to the MySQL server
$connect = new mysqli($host, $username, $password);

// Check if the connection was successful
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}