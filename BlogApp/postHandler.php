<?php

//Joey Gallotta
//CST-126 Blog App
//Milestone 1
//6/25/20


$blog_title = $_GET['titleInput'];
$blog_text = $_GET['textInput'];
$blog_author = $_GET['authorInput'];



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


$sql_statement = "INSERT INTO `blog_post` (`id`, `blog_author`, `blog_title`, `blog_text`)
VALUES (NULL, '$blog_author' , '$blog_title', '$blog_text')";

if (mysqli_query($conn, $sql_statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);

?> q