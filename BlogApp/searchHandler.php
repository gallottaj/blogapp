<?php

require_once('utility.php');

$searchPattern = $_POST['search'];

$users = getUsersByFirstName($searchPattern);

include '_displayUsers.php';
?>