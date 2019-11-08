<?php

$conn = new mysqli("remotemysql.com", "zwTzrl4wRV", "0t3d9R5kuh", "zwTzrl4wRV");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select count(UserID) from Users";
$result = $conn->query($sql);
if (!$result) {
    die("counting of users failed");
}
$count = mysqli_fetch_row($result)[0];
echo $count . " users";

$conn->close();