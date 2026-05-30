<?php

$host = "sql310.infinityfree.com";
$dbname = 'if0_42056372_u315291019_rayhana_db';
$username = 'admin';
$password = '123admin';
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    die("Erreur connexion : " . $e->getMessage());
}

?>