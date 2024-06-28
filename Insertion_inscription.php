<?php
require_once('connexion/connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $ville = isset($_POST['ville']) ? $_POST['ville'] : '';
    $mode_payment = isset($_POST['mode_payment']) ? $_POST['mode_payment'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (empty($nom) || empty($prenom) || empty($tel) || empty($ville) || empty($mode_payment) || empty($password)) {
        die("Tous les champs du formulaire sont obligatoires.");
    }

    // Prepared statement
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO inscription (nom, prenom, tel, ville, mode_payment, password) 
            VALUES (:nom, :prenom, :tel, :ville, :mode_payment, :password)";

    $stmt = $pdo->prepare($sql);
    if ($stmt === false) {
        die('Erreur de préparation de la requête : ' . $pdo->errorInfo()[2]);
    }

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':mode_payment', $mode_payment);
    $stmt->bindParam(':password', $hashed_password);

    try {
        $stmt->execute();
        $stmt->closeCursor();
    } catch (PDOException $e) {
        die('Erreur d\'exécution de la requête : ' . $e->getMessage());
    }

    header("Location: Loading.php");
    exit;
} else {
    die("Une erreur s'est produite. Veuillez soumettre le formulaire correctement.");
}
?>
