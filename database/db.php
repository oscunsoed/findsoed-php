<?php 

$servername ="";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=localhost;dbname=soed_n_seek", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "berhasil konek";
} catch (PDOException $e) {
  echo "Connection Failed: " . $e->getMessage();
}