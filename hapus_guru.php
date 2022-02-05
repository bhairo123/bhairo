<?php

include 'conection.php';

$id=$_GET["id"];


$query = "DELETE FROM guru WHERE id = '$id'";
mysqli_query($conn, $query);
 echo "<meta http-equiv='refresh' content='1; url=guru.php'>";
 ?>