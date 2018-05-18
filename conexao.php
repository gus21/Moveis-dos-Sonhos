<?php
$host = 'localhost';
$user = 'root';
$password = 'bufallo03';
$dbName = 'moveis_dos_sonhos';

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
$pdo = new PDO($dsn, $user, $password);

try {
    $pdo;
}
catch ( PDOException $e ) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
?>