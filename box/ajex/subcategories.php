<?php
// subcategories.php
$category_id = $_GET['category_id'];

$host = 'localhost';
$dbname = 'your_database';
$username = 'your_username';
$password = 'your_password';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM subcategories WHERE category_id = $category_id";
$result = $conn->query($sql);

$subcategories = [];
while ($row = $result->fetch_assoc()) {
    $subcategories[] = $row;
}

echo json_encode($subcategories);
$conn->close();
?>
