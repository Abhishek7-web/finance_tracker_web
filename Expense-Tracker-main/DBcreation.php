<?php
$host = 'localhost';
$user = 'root';
$pass = '';

// Create connection
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error()); // Use mysqli_connect_error for connection errors
}

// SQL to create database
$sql = "CREATE DATABASE ExpTrackDB";
if (mysqli_query($conn, $sql)) {
    echo 'ExpTrackDB Database created successfully';
} else {
    echo "Error creating database: " . mysqli_error($conn); // Corrected to pass $conn as a parameter
}

// Close connection
mysqli_close($conn);
?>
