<?php

mysqli_connect("br-cdbr-azure-south-b.cloudapp.net", "bbddb2a7a63365", "fe318376","Soundbeats");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

