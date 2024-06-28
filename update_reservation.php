<?php
require_once('connexion/connexion.php');

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si toutes les données nécessaires sont présentes
    if (isset($_POST['id']) && isset($_POST['flying_from']) && isset($_POST['flying_to']) && isset($_POST['departure_date']) && isset($_POST['return_date']) && isset($_POST['first_class_ticket_number']) && isset($_POST['economy_class_ticket_number'])) {
        // Récupère les données du formulaire
        $id = $_POST['id'];
        $flying_from = $_POST['flying_from'];
        $flying_to = $_POST['flying_to'];
        $departure_date = $_POST['departure_date'];
        $return_date = $_POST['return_date'];
        $first_class_ticket_number = $_POST['first_class_ticket_number'];
        $economy_class_ticket_number = $_POST['economy_class_ticket_number'];

        // Prépare la requête SQL de mise à jour
        $sql = "UPDATE reservation_vols SET flying_from = :flying_from, flying_to = :flying_to, departure_date = :departure_date, return_date = :return_date, first_class_ticket_number = :first_class_ticket_number, economy_class_ticket_number = :economy_class_ticket_number WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':flying_from', $flying_from);
        $stmt->bindParam(':flying_to', $flying_to);
        $stmt->bindParam(':departure_date', $departure_date);
        $stmt->bindParam(':return_date', $return_date);
        $stmt->bindParam(':first_class_ticket_number', $first_class_ticket_number);
        $stmt->bindParam(':economy_class_ticket_number', $economy_class_ticket_number);
        $stmt->bindParam(':id', $id);

        // Exécute la requête
        if ($stmt->execute()) {
            // Redirige vers une page de succès
            header("Location:Administrateur.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour de la réservation de vol.";
        }
    } else {
        echo "Toutes les données nécessaires n'ont pas été fournies.";
    }
} else {
    echo "Accès invalide à cette page.";
}
?>
