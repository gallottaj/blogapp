<?php
$userName = $_POST['usernameInput'];
$passWord = $_POST['passwordInput'];

$link = mysqli_connect("localhost", "root", "root", "blogapp");
if (mysqli_connect_errno()) {
    die('Connection Error: (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} else {}

if ($userName == NULL) {
    echo nl2br("- Username cannot be left blank\n\n");
}
if ($passWord == NULL) {
    echo nl2br("- Password cannot be left blank\n\n");
}

$query = "SELECT `username`, `password` FROM registration WHERE username = '$userName' AND password = '$passWord'";
$captured = $link->query($query);
if ($captured->num_rows == 1) {
    echo "Login Successfull!";
} else if ($captured->num_rows == 0) {
    echo "Login Failed";
} else if ($captured->num_rows == 2) {
    echo "Error: username taken";
} else {
    echo $link->error;
}

mysqli_close($link);
?>
    
        