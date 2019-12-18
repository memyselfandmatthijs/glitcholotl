<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Glitcholotl</title>
  <link rel="stylesheet" href="../style.css" />
</head>
<body>
<?php
require("header.php");
?>
    <div class="content">
    <?php
    $conn = new mysqli("remotemysql.com", "zwTzrl4wRV", "0t3d9R5kuh", "zwTzrl4wRV");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user = array_pop(explode("/", $_SERVER['REQUEST_URI']));

    $result = $conn->query("select firstname, lastname from Users where Username='" . $user . "'");

    if ($result->num_rows > 0) {
        echo "<h1>" . $user . "</h1>";
        $row = $result->fetch_assoc();
        echo $row["firstname"] . " " . $row["lastname"];
    } else {
        echo "No user found with name " . $user;
    }

    $result = $conn->query("select userid from Users where Username='" . $user . "'");

    $id = 0;

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row["userid"];
    } else {
        die ("No UserID found for name " . $user);
    }

    $result = $conn->query("select contents from Glitches where UserID='" . $id . "'");

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["contents"] . "</li>";
        }
        echo "</ul>";
    } else {
        die ("No UserID found for name " . $user);
    }
    ?>
    </div>
</body>
</html>