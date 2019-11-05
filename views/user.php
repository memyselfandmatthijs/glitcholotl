<?php

$conn = new mysqli("localhost", "gllms", "ramesesII", "glitcholotl");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = array_pop(explode("/", $_SERVER['REQUEST_URI']));

$sql = "select firstname, lastname from Users where Username='" . $user . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>" . $user . "</h1>";
    $row = $result->fetch_assoc();
    echo $row["firstname"] . " " . $row["lastname"];
} else {
    echo "No user found with name " . $user;
}