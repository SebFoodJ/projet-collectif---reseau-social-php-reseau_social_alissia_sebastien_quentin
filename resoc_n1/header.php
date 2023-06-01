<?php
session_start();
$userId =intval($_GET['user_id']);
$_SESSION["newsession"]= $userId;
echo 'Mon Id est'.$userId;
if(!isset($_SESSION["newsession"])){
    echo "Utilisateur non identifié";
}else { ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ReSoC - Flux</title>
    <meta name="author" content="Julien Falconnet">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<header>
    <a href='admin.php'><img src="resoc.jpg" alt="Logo de notre réseau social"/></a>
    <nav id="menu">
        <a href="news.php">Actualités</a>
        <a href="wall.php?user_id=<?php echo $_SESSION["newsession"] ?>">Mur</a>
        <a href="feed.php?user_id=<?php echo $_SESSION["newsession"] ?>">Flux</a>
        <a href="tags.php?tag_id=1">Mots-clés</a>
    </nav>
    <nav id="user">
        <a href="#">▾ Profil</a>
        <ul>
            <li><a href="settings.php?user_id=<?php echo $_SESSION["newsession"] ?>">Paramètres</a></li>
            <li><a href="followers.php?user_id=<?php echo $_SESSION["newsession"] ?>">Mes suiveurs</a></li>
            <li><a href="subscriptions.php?user_id=<?php echo $_SESSION["newsession"] ?>">Mes abonnements</a></li>
        </ul>
    </nav>
</header>
<?php } ?>
