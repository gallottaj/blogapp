<?php

//Joey Gallotta
//CST-126 Blog App

$blogID = $_GET['id'];
$blogTitle = $_GET['blogTitle'];
$blogAuthor = $_GET['blogAuthor'];
$blogText = $_GET['blogText'];

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


$sql_statement = "SELECT (`id`, `blog_author`, `blog_title`, `blog_text`) FROM `blog_post` WHERE id = $blogID";

if (mysqli_query($conn, $sql_statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>