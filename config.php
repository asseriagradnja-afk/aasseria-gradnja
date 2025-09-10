<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gradjevinska_firma";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Greška spajanja: " . $conn->connect_error);
}
?>