<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
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

    <section class="container-fluid mt-5 mb-4">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-title">Contactez-nous</h2>
                <form method="post" action="Insertion_contact.php">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Entrez votre nom" pattern="[A-Za-zÀ-ÿ\s]+" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre adresse email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Entrez votre message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-paper-plane"></i> Contactez-nous</button>
            </form>
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Notre Emplacement</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12771.151471176014!2d10.2175601!3d36.8475562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cad2e1d7f1bb%3A0x902488d100b5819b!2sA%C3%A9roport%20de%20Tunis-Carthage!5e0!3m2!1sfr!2stn!4v1718242931326!5m2!1sfr!2stn" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer>
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
