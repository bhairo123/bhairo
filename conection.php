
<?php

$server ="localhost";
$username ="root";
$password ="";
$database ="smkn9";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>