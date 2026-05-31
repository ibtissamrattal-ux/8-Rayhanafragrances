<?php
session_start();
require 'config.php';

/*
Si l'utilisateur est déjà connecté,
on l'envoie vers l'accueil.
*/
if(isset($_SESSION['user_id'])){
    header("Location: home.php");
    exit();
}
// Variable destinée à stocker les messages d'erreur
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare(
        "SELECT * FROM users WHERE email = ?"
    );

    $stmt->execute([$email]);

    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];

        header("Location: home.php");
        exit();

    } else {

        $error = "Email ou mot de passe incorrect";

    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">

    <div class="login-box">

        <h1 class="login-title">Connexion</h1>

        <?php if($error): ?>
            <p style="color:red; margin-bottom:15px;">
                <?= $error ?>
            </p>
        <?php endif; ?>

        <form class="login-form" method="POST">

            <input
            type="email"
            name="email"
            placeholder="Email"
            required>

            <input
            type="password"
            name="password"
            placeholder="Mot de passe"
            required>

            <button
            type="submit"
            class="login-btn">
                Se connecter
            </button>

        </form>

        <p class="register-link">
            Pas encore de compte ?
            <a href="register.php">
                Créer un compte
            </a>
        </p>

    </div>

</div>

</body>
</html>
