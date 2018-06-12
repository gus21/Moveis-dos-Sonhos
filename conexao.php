<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'id5161226_moveis_dos_sonhos';

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
//$pdo = new PDO($dsn, $user, $password);

try {
    $pdo;
}
catch ( PDOException $e ) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
?>