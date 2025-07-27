<?php
$servername = "sql12.freesqldatabase.com"
$username = "sql12792201"
$password = "KRl28aDYUU"
$dbname = "sql12792201"

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
