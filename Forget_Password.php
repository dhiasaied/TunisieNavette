<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="Forget_Password.css">
</head>
<body id="particles-js">
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form name="form1" class="box">
      <h4>Forget Password</h4>
        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <input type="submit" value="Envoyer" class="btn1">
        <p class="paragraphe">Nous enverrons les instructions de réinitialisation du mot de passe à cet e-mail.</p>
      </form>
        <a href="inscription.php" class="dnthave">Vous n'avez pas de compte ?S'inscrire</a>
  </div> 
</div>
<script>
var pwd = document.getElementById('pwd');
var eye = document.getElementById('eye');
eye.addEventListener('click', togglePass);

function togglePass() {
   eye.classList.toggle('active');
   pwd.type = (pwd.type === 'password') ? 'text' : 'password';
}

function handleForgetPassword() {
  alert('Forget Password functionality should be implemented here.');
}
</script>
</body>
</html>
