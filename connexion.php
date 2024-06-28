<?php
require_once('config.php');
try {
    $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    // echo "Connexion réussie à la base de données " . DB_NAME . ".";
} catch(PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}
?>

