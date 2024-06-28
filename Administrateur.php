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
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center">
            <div class="card-fluid">
                <div class="card-body">
                    <div class="custom-container bg-black text-white">
                        <h1 data-aos="fade-up" class="mb-4 display-4 fw-bold text-center text-primary" style="font-family: 'Courgette', cursive;">Liste des réservations de vols</h1>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <?php
                            require_once('connexion/connexion.php');
                            $limit = 2;
                            $search = "";
                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            if (isset($_GET['search']) && !empty($_GET['search'])) {
                                $search = htmlspecialchars($_GET['search']);
                            }

                            if (!empty($search)) {
                                $sql = "SELECT COUNT(*) AS total FROM reservation_vols WHERE 
                                        flying_from LIKE :search OR 
                                        flying_to LIKE :search";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
                                $stmt->execute();
                            } else {
                                $sql = "SELECT COUNT(*) AS total FROM reservation_vols";
                                $stmt = $pdo->query($sql);
                            }

                            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                            $total_pages = ceil($result['total'] / $limit);
                            $offset = ($page - 1) * $limit;

                            if (!empty($search)) {
                                $sql = "SELECT * FROM reservation_vols WHERE 
                                        flying_from LIKE :search OR 
                                        flying_to LIKE :search
                                        LIMIT :limit OFFSET :offset";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
                            } else {
                                $sql = "SELECT * FROM reservation_vols LIMIT :limit OFFSET :offset";
                                $stmt = $pdo->prepare($sql);
                            }

                            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
                            $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
                            $stmt->execute();
                            ?>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6 mb-2">
                                </div>
                                <div class="col-12 col-md-6">
                                    <form class="d-flex" action="" method="GET">
                                        <input class="form-control me-2" name="search" type="search" placeholder="Recherche..." aria-label="Search" value="<?php echo htmlentities($search); ?>">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>De</th>
                                        <th>À</th>
                                        <th>Date de départ</th>
                                        <th>Date de retour</th>
                                        <th>Nombre de billets en première classe</th>
                                        <th>Nombre de billets en classe économique</th>
                                        <th>Sous-total</th>
                                        <th>TVA</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<tr>";
                                        echo "<td>{$row['id']}</td>";
                                        echo "<td>{$row['flying_from']}</td>";
                                        echo "<td>{$row['flying_to']}</td>";
                                        echo "<td>{$row['departure_date']}</td>";
                                        echo "<td>{$row['return_date']}</td>";
                                        echo "<td>{$row['first_class_ticket_number']}</td>";
                                        echo "<td>{$row['economy_class_ticket_number']}</td>";
                                        echo "<td>{$row['subtotal']}</td>";
                                        echo "<td>{$row['vat']}</td>";
                                        echo "<td>{$row['total']}</td>";
                                        echo "<td>";
                                        echo "<a href='edit_reservation.php?id={$row['id']}' class='btn btn-outline-primary btn-sm me-1'><i class='bi bi-pencil'></i></a>";
                                        echo "<a href='delete_reservation.php?id={$row['id']}' class='btn btn-outline-danger btn-sm me-1'><i class='bi bi-trash'></i></a>";
                                        echo "<a href='view_reservation.php?id={$row['id']}' class='btn btn-outline-primary btn-sm me-1'><i class='bi bi-eye'></i></a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($page > 1): ?>
                <li class="page-item"><a class="page-link" href="?search=<?php echo htmlentities($search); ?>&page=<?php echo ($page - 1); ?>">&laquo; Précédent</a></li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?php if ($page == $i) echo 'active'; ?>"><a class="page-link" href="?search=<?php echo htmlentities($search); ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
            <?php if ($page < $total_pages): ?>
                <li class="page-item"><a class="page-link" href="?search=<?php echo htmlentities($search); ?>&page=<?php echo ($page + 1); ?>">Suivant &raquo;</a></li>
            <?php endif; ?>
        </ul>
    </nav>
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
