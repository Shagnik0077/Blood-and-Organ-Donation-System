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

    $stmt = $pdo->query("SELECT Hospital_Name FROM t_hospital_blood_details_table");
    $hospitals = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo json_encode($hospitals);
}    catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


