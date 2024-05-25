
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himatikdb";

session_start();
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$page=@$_GET['page'];
$proses=@$_GET['proses']; 