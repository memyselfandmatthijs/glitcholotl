<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if (isset($username)) {

  $conn = new mysqli("remotemysql.com", "zwTzrl4wRV", "0t3d9R5kuh", "zwTzrl4wRV");

  $stmt = $conn->prepare("SELECT * FROM Users WHERE Username = ?");
  $stmt->bind_param('s', $username);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_object();
    
  // Verify user password and set $_SESSION
  if ($password == $user->Password) {
    $_SESSION['user_id'] = $user->UserID;
    $_SESSION['username'] = $username;
    echo "Jup";
    header("Location: /");
    die();
  } else {
    echo "Nope";
  }

  mysqli_stmt_close($stmt);
}
?>
