<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glitcholotl</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        .header {
            background: #26a69a;
            padding: 0.5em;
            padding-left: 2em;
            color: white;
        }

        .content {
            margin: 2em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Glitcholotl</h1>
    </div>
    <div class="content">
        <p>Welcome to the new era of social media. This is the social medium of the future. This is Glitcholotl. We currently have
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
        echo $count . " user" . ($count > 1 ? "s" : "");

        $conn->close();

        ?>.</p>
    </div>
</body>
</html>