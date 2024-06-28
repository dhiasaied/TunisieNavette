<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Navette Aéroport en Tunisie</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="style.css">
    <style>
    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #2d06c9;
        border-color: #28a745;
    }
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="images/logo.jpg" alt="Logo" height="40"> TunisieNavette
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About.php">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Login.php"><i class="fas fa-user"></i></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center">
            <div class="card-fluid">
                <div class="card-body">
                    <div class="custom-container bg-black text-white">
                    <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary" style="font-family: 'Courgette', cursive;">Liste des réservations de vols</h1>
                    <div data-aos="fade-up" data-aos-delay="600">
                            <?php
                            require_once('connexion/connexion.php');

                            // Vérifier si l'identifiant de la réservation est passé en paramètre GET
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];

                                // Préparez votre requête SQL pour récupérer les détails de la réservation
                                $sql = "SELECT * FROM reservation_vols WHERE id = :id";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindParam(':id', $id);
                                $stmt->execute();

                                // Vérifiez s'il y a un résultat
                                if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    // Affichez les détails de la réservation dans un formulaire pour l'édition
                                    ?>
                                    <form action="update_reservation.php" method="POST">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>De</th>
                                                    <th>À</th>
                                                    <th>Date de départ</th>
                                                    <th>Date de retour</th>
                                                    <th>Billets première classe</th>
                                                    <th>Billets classe économique</th>
                                                    <th>Sous-total</th>
                                                    <th>TVA (10%)</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" name="flying_from" value="<?php echo htmlspecialchars($row['flying_from']); ?>"></td>
                                                    <td><input type="text" name="flying_to" value="<?php echo htmlspecialchars($row['flying_to']); ?>"></td>
                                                    <td><input type="date" name="departure_date" value="<?php echo htmlspecialchars($row['departure_date']); ?>"></td>
                                                    <td><input type="date" name="return_date" value="<?php echo htmlspecialchars($row['return_date']); ?>"></td>
                                                    <td><input type="number" name="first_class_ticket_number" value="<?php echo htmlspecialchars($row['first_class_ticket_number']); ?>"></td>
                                                    <td><input type="number" name="economy_class_ticket_number" value="<?php echo htmlspecialchars($row['economy_class_ticket_number']); ?>"></td>
                                                    <td><?php echo number_format($row['subtotal'], 2); ?></td>
                                                    <td><?php echo number_format($row['vat'], 2); ?></td>
                                                    <td><?php echo number_format($row['total'], 2); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                <?php
                                } else {
                                    echo "Aucune réservation trouvée avec cet identifiant.";
                                }
                            } else {
                                echo "Identifiant de réservation non spécifié.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer style="margin-top:10%">
        <div class="footer-container">
            <div class="footer-column">
                <div class="footer-links">
                    <h3>Links</h3>
                    <a href="#">Conditions d'utilisation</a>
                    <a href="#">Politique de confidentialité</a>
                   <a href="#">Politique en matière de cookies</a>
                </div>
            </div>
            <div class="footer-column">
                <div class="contact-info">
                  <h3>Contactez-nous</h3>
                    <p><i class="fas fa-envelope"></i> dhiasaied733@gmail.com</p>
                    <p><i class="fas fa-phone"></i> (+216) 92021578</p>
                    <p><i class="fas fa-map-marker-alt"></i> Tunis, Nabeul, Plage Beni khiar
                    </p>
                </div>
            </div>
            <div class="footer-column">
                <div class="newsletter">
                  <h3>Abonnez-vous à notre newsletter</h3>
                        <form action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your email">
                        <button type="submit">S'abonner</button>
                  </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Réservation de Navette Aéroport En Tunisie. Tous droits réservés. Développé par dhiaeddinesaied</p>
            </div>
        </div>
    </footer>
      
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
