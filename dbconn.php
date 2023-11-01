<?php
$mysqli = new mysqli('localhost', 'root', '', 'feedback');
// $connetion = mysqli->connect_error;
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Your database connection is now established.
?>