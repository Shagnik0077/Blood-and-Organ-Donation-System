<?php
try {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'blood_organ_database';

    // Create connection using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT Bank_Name FROM t_bloodbank_details_table");
    $bloodBanks = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo json_encode($bloodBanks);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
