<?php
$selectedHospital = $_GET['hospital'];
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'blood_organ_database';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$stmt = $pdo->prepare("SELECT Address FROM t_hospital_blood_details_table WHERE Hospital_Name = :selectedHospital");
$stmt->bindParam(':selectedHospital', $selectedHospital);
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


