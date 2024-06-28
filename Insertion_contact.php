<?php
require_once('connexion/connexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        try {
            $sql = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);
            $stmt->execute();

            header("Location: Success.php");
            exit;
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Erreur : Tous les champs sont requis.";
    }
}
?>
