<?php
$link = mysqli_connect("br-cdbr-azure-south-b.cloudapp.net", "b812cd591460c2", "86dc0a6e", "soundbeats");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_close($link);
