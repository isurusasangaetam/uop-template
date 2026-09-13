<?php
// includes/db_connect.php

// Ensure config is loaded
require_once __DIR__ . '/config.php';
/** @var array $site_config */

$host = $site_config['db']['host'];
$db   = $site_config['db']['dbname'];
$user = $site_config['db']['username'];
$pass = $site_config['db']['password'];
$charset = $site_config['db']['charset'];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch associative arrays by default
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use real prepared statements for security
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Log the error securely and show a generic message to the user
    error_log("Database connection failed: " . $e->getMessage());
    die("A database connection error occurred. Please try again later.");
}
?>