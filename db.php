<?php
$host = "localhost";      // XAMPP me default host
$user = "root";           // Default MySQL username
$pass = "";               // Default MySQL password (agar tumne set nahi kiya)
$dbname = "ecommerce";    // Tumhara database ka naam (jo tumne banaya tha)

// Connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if(!$conn){
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
