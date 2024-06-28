<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Réservation de Navette</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body id="particles-js">

<div class="animated bounceInDown">
    <div class="container">
        <span class="error animated tada" id="msg"></span>
        <form name="form1" class="box" method="post" action="Insertion_inscription.php"onclick="return checkStuff()">
            <h4>Inscription</h4>
            <h5>Créez votre compte.</h5>
            <input type="text" name="nom" placeholder="Nom" autocomplete="off">
            <input type="text" name="prenom" placeholder="Prénom" autocomplete="off">
            <input type="text" name="tel" placeholder="Téléphone" autocomplete="off">
            <input type="text" name="ville" placeholder="Ville" autocomplete="off">
            <select name="mode_payment">
                <option value="">Choisissez le mode de paiement</option>
                <option value="espese">Espèces</option>
                <option value="cheque">Chèque</option>
                <option value="card">Carte bancaire</option>
            </select>
            <input type="password" name="password" placeholder="Mot de passe" autocomplete="off">
            <input type="submit" value="S'inscrire" class="btn1">
        </form>
        <a href="Login.php" class="dnthave">Déjà un compte ? Connectez-vous</a>
    </div> 
</div>
<script>
    function checkStuff() {
        var nom = document.form1.nom;
        var prenom = document.form1.prenom;
        var tel = document.form1.tel;
        var ville = document.form1.ville;
        var mode_payment = document.form1.mode_payment;
        var password = document.form1.password;
        var msg = document.getElementById('msg');
        
        if (nom.value.trim() == "") {
            msg.style.display = 'block';
            msg.innerHTML = "Veuillez entrer votre nom";
            nom.focus();
            return false;
        } else {
            msg.innerHTML = "";
        }
        
        if (prenom.value.trim() == "") {
            msg.innerHTML = "Veuillez entrer votre prénom";
            prenom.focus();
            return false;
        } else {
            msg.innerHTML = "";
        }
        
        if (tel.value.trim() == "") {
            msg.innerHTML = "Veuillez entrer votre numéro de téléphone";
            tel.focus();
            return false;
        } else {
            msg.innerHTML = "";
        }
        
        if (ville.value.trim() == "") {
            msg.innerHTML = "Veuillez entrer votre ville";
            ville.focus();
            return false;
        } else {
            msg.innerHTML = "";
        }
        
        if (mode_payment.value == "") {
            msg.innerHTML = "Veuillez choisir votre mode de paiement";
            mode_payment.focus();
            return false;
        } else {
            msg.innerHTML = "";
        }
        
        if (password.value.trim() == "") {
            msg.innerHTML = "Veuillez entrer votre mot de passe";
            password.focus();
            return false;
        } else {
            msg.innerHTML = "";
        }
        return true; 
    }
</script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

</body>
</html>
