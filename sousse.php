<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NavetteTunisie</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="location.css">
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

<div class="container mt-5">
<h1 class="section-title text-center mb-4">Sousse : 49 hôtels et autres hébergements
</h1>
  <div class="row">
    <div class="col-md-4">
  <h4>Étoiles</h4>
  <div class="form-group">
  <input type="checkbox" id="etoiles-5">
  <label for="etoiles-5">
     5 étoiles <i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i>
  </label><br>
  <input type="checkbox" id="etoiles-4">
  <label for="etoiles-4">
     4 étoiles <i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i>
  </label><br>
  <input type="checkbox" id="etoiles-3">
  <label for="etoiles-3">
    3 étoiles <i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i>
  </label><br>
  <input type="checkbox" id="etoiles-2">
  <label for="etoiles-2">
    2 étoiles <i class="fas fa-star yellow-star"></i><i class="fas fa-star yellow-star"></i>
  </label><br>
  <input type="checkbox" id="etoiles-1">
  <label for="etoiles-1">
    1 étoile <i class="fas fa-star yellow-star"></i>
  </label>
</div>
<h4>Note des commentaires</h4>
<div class="form-group">
  <input type="checkbox" id="note-fabuleux">
  <label for="note-fabuleux">Fabuleux : 9+</label><br>
  <input type="checkbox" id="note-tres-bien">
  <label for="note-tres-bien">Très bien : 8+</label><br>
  <input type="checkbox" id="note-bien">
  <label for="note-bien"> Bien : 7+</label><br>
  <input type="checkbox" id="note-agreable">
  <label for="note-agreable">Agréable : 6+</label>
</div>
</div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="images/img-9.png" class="img-fluid" alt="Image de l'hôtel">
            </div>
            <div class="col-md-8">
              <h2 class="text-primary">Jaz Tour Khalef</h2>
              <p><i class="fas fa-map-marker-alt"></i>Boulevard du 14 Janvier, 4051 Sousse</p>
              <p>Situé à proximité de Port El Kantaoui, cet hôtel se trouve à l'entrée de la ville de Sousse. Il est implanté dans un parc de 10 hectares et fait face à la mer.</p>
              <h5>Tarif dès</h5>
              <p class="text-success">TND 679,338 par nuit</p>
<a href="#" class="btn btn-primary">Vérifier la disponibilité</a>

            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="images/img-10.png" class="img-fluid" alt="Image de l'hôtel">
            </div>
            <div class="col-md-8">
              <h2 class="text-primary">Hotel Soussana
              </h2>
              <p><i class="fas fa-map-marker-alt"></i>Avenue Taieb Mhiri, 4001 Sousse</p>
              <p>Situé à Sousse, à 600 mètres de Bou Jaafar, l'Hotel Soussana propose un jardin, un parking privé gratuit, un salon commun et une terrasse.</p>
              <h5>Tarif dès</h5>
              <p class="text-success">TND 169,196 par nuit</p>
<a href="#" class="btn btn-primary">Vérifier la disponibilité</a>

            </div>
          </div>
        </div>
      </div>
      <div class="card mt-4">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="images/img-11.png" class="img-fluid" alt="Image de l'hôtel">
            </div>
            <div class="col-md-8">
              <h2 class="text-primary">Kanta Resort and Spa</h2>
              <p><i class="fas fa-map-marker-alt"></i> en face Marina EL Kantaoui PORT EL KANTAOUI, 4089 Sousse</p>
              <p>Situé à Sousse, le Kanta Resort and Spa possède une piscine extérieure, un jardin, une terrasse et un bar. Il possède un bureau d'excursions et un parc aquatique.</p>
              <h5>Tarif dès</h5>
              <p class="text-success">TND 185,091 par nuit</p>
<a href="#" class="btn btn-primary">Vérifier la disponibilité</a>

            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="images/img-12.png" class="img-fluid" alt="Image de l'hôtel">
            </div>
            <div class="col-md-8">
              <h2 class="text-primary">Mövenpick Resort & Marine Spa Sousse</h2>
              <p><i class="fas fa-map-marker-alt"></i>Boulevard Du 14 Janvier Bp 114, 4039 Sousse</p>
              <p>Le Mövenpick Resort & Marine Spa Sousse est un complexe situé dans le centre-ville de Sousse.</p>
              <h5>Tarif dès</h5>
              <p class="text-success">TND 607,056 par nuit</p>
             
<a href="#" class="btn btn-primary">Vérifier la disponibilité</a>

            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="#" class="btn btn-primary btn-lg btn-block">Voir les 36 hôtels à Sousse</a>
      </div>
    </div>
  </div>
</div>
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
