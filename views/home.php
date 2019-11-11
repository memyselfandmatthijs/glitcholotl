<style>
body{
    font-family:sans-serif;
    background:#white;
    }
div.titel{
    background-color:#26a69a;
}
h1{ color:white;
    margin-bottom:0px;
    padding-left:20px;
    padding-top:10px;

}
p{ color:white;
    margin-top:0px;
    padding-left:20px;
    padding-bottom:20px;

}

</style>

<div class="titel">
<h1>Glitcholotl </h1>
<p>The social medium for axolotls</p>
</div>
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
