<?php
session_start();

require 'config.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare(
"SELECT * FROM users WHERE id = ?"
);

$stmt->execute([$user_id]);

$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Profil</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="profile-container">

<h1>Mon Profil</h1>

<p>
Bienvenue
<strong>
<?= htmlspecialchars($user['full_name']) ?>
</strong>
</p>

<p>
Email :
<?= htmlspecialchars($user['email']) ?>
</p>

<br>

<a href="logout.php" class="login-btn">
Déconnexion
</a>

</div>

</body>
</html>