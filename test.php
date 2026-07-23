<?php
$conn = mysqli_connect("localhost", "root", "", "database_db", 3308);

if (!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Connected Successfully";
?>