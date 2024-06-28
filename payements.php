<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payements</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="payements.css">
</head>
<body>
<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>p</p>
    </div>
    <h2>Payement TunisieNavette</h2>
    <div class="form">
      <div class="card space icon-relative">
        <label class="label">Card holder:</label>
        <input type="text" class="input" placeholder="Coding Market" id="card-holder">
        <i class="fas fa-user"></i>
      </div>
      <div class="card space icon-relative">
        <label class="label">Card number:</label>
        <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" id="card-number">
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label class="label">Expiry date:</label>
          <input type="text" name="expiry-data" class="input" placeholder="MM / YY" id="expiry-date">
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label class="label">CVC:</label>
          <input type="text" class="input" data-mask="000" placeholder="000" id="cvc">
          <i class="fas fa-lock"></i>
        </div>
      </div>
      <div class="btn" onclick="submitPayment()">Pay</div>
      <div id="payment-success" style="display:none;">
        <h3>Payment Successful!</h3>
        <p>Your payment has been processed successfully.</p>
        <div class="success-icon"><i class="fas fa-check-circle"></i></div>
      </div>
    </div>
  </div>
</div>

<script>
    function submitPayment() {
  // Récupérer les valeurs des champs
  const cardHolder = document.getElementById('card-holder').value;
  const cardNumber = document.getElementById('card-number').value;
  const expiryDate = document.getElementById('expiry-date').value;
  const cvc = document.getElementById('cvc').value;

  // Simple validation
  if (!cardHolder || !cardNumber || !expiryDate || !cvc) {
    alert('Please fill all fields.');
    return;
  }

  // Simuler le traitement du paiement
  setTimeout(() => {
    // Afficher le message de succès
    document.getElementById('payment-success').style.display = 'block';

    // Optionnel: ajouter une animation CSS pour le message de succès
    document.getElementById('payment-success').classList.add('fade-in');
  }, 2000); // Simuler un délai de 2 secondes pour le traitement
}

</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
