<?php

// User
$servername = "localhost";
$username = "root";
$password = "root";
$port = 8889;
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname,$port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Variables received from POST form
$name = $_POST["name"];
$email = $_POST["email"]; 
$temp = $_POST["temp"];

// Query to insert into myDB, table MyGuests
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$name', '$temp', '$email')";

// Confirm added to DB
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

 ?>