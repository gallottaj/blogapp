<?php

//Joey Gallotta
//CST-126 Blog App
//Milestone 1
//6/25/20


$firstName = $_GET['firstNameInput'];
$lastName = $_GET['lastNameInput'];
$emailAddress = $_GET['emailAddressInput'];
$userName = $_GET['usernameInput'];
$passWord = $_GET['passwordInput'];



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


$sql_statement = "INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email_address`, `username`, `password`)
VALUES (NULL, '$firstName' , '$lastName', '$emailAddress', '$userName', '$passWord')";

if (mysqli_query($conn, $sql_statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($conn);
}

if ($firstName == NULL) {
    echo nl2br("- First Name cannot be left blank\n\n");
}
if ($lastName == NULL) {
    echo nl2br("- Last Name cannot be left blank\n\n");
}
if ($emailAddress == NULL) {
    echo nl2br("- Email cannot be left blank\n\n");
}


mysqli_close($conn);

?>