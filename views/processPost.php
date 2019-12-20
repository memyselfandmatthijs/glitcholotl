<?php
session_start();

if (isset( $_SESSION['user_id'])) {
  $contents = $_POST["contents"];

  if (isset($contents)) {

    $conn = new mysqli("remotemysql.com", "zwTzrl4wRV", "0t3d9R5kuh", "zwTzrl4wRV");

    $contents = mysqli_real_escape_string($conn, htmlspecialchars($contents));

    if ($conn->connect_error) {
      die("Nope: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO Glitches (UserID, GlitchType, Contents, Date, Location) VALUES (?, 0, ?, now(), 'self')");
    $stmt->bind_param("ss", $UserID, $contents);

    $UserID = $_SESSION['user_id'];
    $stmt->execute();

    echo "OK";

    $stmt->close();
    $conn->close();
  }
}