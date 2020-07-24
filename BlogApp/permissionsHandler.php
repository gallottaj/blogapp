<?php

//Joey Gallotta
//CST-126 Blog App



$user_id = $_POST;
$edit = $_POST;
$read = $_POST;
$post = $_POST;
$delete = $_POST;




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


$sql_statement = "UPDATE `permissions` SET `user_id`=[NULL],`edit`=[1],`read`=[0],`post`=[0],`delete`=[0]";

if (mysqli_query($conn, $sql_statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>