<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE dosen(
NIDN INT(11) PRIMARY KEY,
NAMA VARCHAR(30) NOT NULL,
MK VARCHAR(30) NOT NULL,
JK VARCHAR(50) NOT NULL,
)";
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>