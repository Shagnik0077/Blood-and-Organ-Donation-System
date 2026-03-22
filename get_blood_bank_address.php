<?php
$bloodBank = $_GET['bloodBank'];
// Example using PDO
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'blood_organ_database';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$stmt = $pdo->prepare("SELECT Address FROM t_bloodbank_details_table WHERE Bank_Name = :bloodBank");
$stmt->bindParam(':bloodBank', $bloodBank);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $address = $row['Address'];
    echo $address;
} else {
    echo "Address not found";
}

$pdo = null;
?>
