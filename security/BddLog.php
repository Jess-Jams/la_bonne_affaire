<?php
define("USER", "root");
define("PASSWORD", "");
define("DSN", "mysql:host=localhost;dbname=labonneaffaire");

try {
    $pdo = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $e) {
    die("Error ! : " . $e -> getMessage());
}
