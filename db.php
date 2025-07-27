<?php
$servername = "db4free.net"
$username = "godfather_777"
$password = "a-R6RiQYZkniF3h"
$dbname = "godfather_demo"

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
