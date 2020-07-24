<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "activity1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

function dbConnect() {
    global $host, $user, $password, $db;
    // Open MySQL connection
    $conn = new mysqli($host, $user, $password, $db);
    
    if($conn->connect_error) {
        echo $conn->connect_error;
    }
    return $conn;
}

// Func starts a PHP session with the user's id
function saveUserId($id) {
    session_start();
    $_SESSION['USER_ID'] = $id;
}

// Func returns ID from PHP session
function getUserId() {
    session_start();
    return $_SESSION['USER_ID'];
}

?>