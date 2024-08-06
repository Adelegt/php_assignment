<?php
$dbcon=mysqli_connect("localhost","root","","sdms");


if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}
?>