<?php  
require_once('connexion/connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        // SQL statement to delete from reservation_vols table
        $sql = "DELETE FROM reservation_vols WHERE id = :id"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) { 
            header("Location: oasis.php"); // Redirect after successful deletion
            exit(); 
        } else { 
            echo "Erreur lors de la suppression de la réservation."; 
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }
} else { 
    echo "L'identifiant de la réservation n'est pas spécifié.";
}
?>
