<?php
session_start();
session_destroy();

echo "Logged out succesfully. <a href='/'>Home</a>";
?>