<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'moveis_dos_sonhos';

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbName . ';port=13306';
$pdo = new PDO($dsn, $user, $password);

try {
    $pdo;
}
catch ( PDOException $e ) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
?>