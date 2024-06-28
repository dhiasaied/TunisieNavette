<?php
require_once('connexion/connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($email)) {
        die("Erreur : L'email ne peut pas être vide.");
    }
    
    if (empty($password)) {
        die("Erreur : Le mot de passe ne peut pas être vide.");
    }
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if ($email === 'dhiasaied733@gmail.com' && $password === '12345678') {

        header("Location: Administrateur.php");
        exit;
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        try {
            $stmt->execute();
            header("Location: Loading.php");
            exit;
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
} else {
    die("Erreur : Les champs requis ne sont pas présents.");
}
?>
