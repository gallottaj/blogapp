<?php

//Joey Gallotta
//CST-126 Blog App
//Milestone 1
//6/25/20


$firstName = $_GET['firstNameInput'];
$lastName = $_GET['lastNameInput'];
$emailAddress = $_GET['emailAddressInput'];


$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "blogapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$sql_statement = "INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email_address`)
VALUES (NULL, '$firstName' , '$lastName', '$emailAddress')";

if (mysqli_query($conn, $sql_statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>