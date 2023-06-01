<?php
$userId =intval($_GET['user_id']);
setcookie('login', $userId);

if(!isset($_COOKIE['login'])){
    echo "Utilisateur non identifié"
}else { ?>
    <header>
    <a href='admin.php'><img src="resoc.jpg" alt="Logo de notre réseau social"/></a>
    <nav id="menu">
        <a href="news.php">Actualités</a>
        <a href="wall.php?user_id=<?php echo $_COOKIE['login'] ?>">Mur</a>
        <a href="feed.php?user_id=<?php echo $_COOKIE['login'] ?>">Flux</a>
        <a href="tags.php?tag_id=1">Mots-clés</a>
    </nav>
    <nav id="user">
        <a href="#">▾ Profil</a>
        <ul>
            <li><a href="settings.php?user_id=<?php echo $_COOKIE['login'] ?>">Paramètres</a></li>
            <li><a href="followers.php?user_id=<?php echo $_COOKIE['login'] ?>">Mes suiveurs</a></li>
            <li><a href="subscriptions.php?user_id=<?php echo $_COOKIE['login'] ?>">Mes abonnements</a></li>
        </ul>
    </nav>
</header>
}
