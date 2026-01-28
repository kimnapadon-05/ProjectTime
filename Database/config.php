<?php
$host = 'localhost';
$db_name = 'residential';
$username = 'klaoyai_residential';
$password = 'klaoyai_residential';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db_name;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    error_log("DB Connection failed: " . $e->getMessage());
    die(json_encode([
        "status" => "error",
        "message" => "Database connection failed"
    ]));
}
