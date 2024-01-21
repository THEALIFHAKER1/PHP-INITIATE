<?php

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
    ]);
} catch (PDOException $e) {
    echo '<h1 class="z-50 relative text-3xl font-bold underline text-red-500">' . $e->getMessage() . '</h1>';
    exit;
}

$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>