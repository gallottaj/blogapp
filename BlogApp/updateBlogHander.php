<?php

//Joey Gallotta
//CST-126 Blog App

$blogID = $_POST['id'];
$blogTitle = $_POST['newTitleInput'];
$blogAuthor = $_POST['newAuthorInput'];
$blogText = $_POST['newTextInput'];

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


$sql_statement = "UPDATE `blog_post` SET `id`=[$blogID],`blog_author`=[$blogAuthor],`blog_title`=[$blogTitle],`blog_text`=[$blogText]";

if (mysqli_query($conn, $sql_statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>