<link rel="stylesheet" href="assets/index.css">
<header>
    <a href='index.php'><img src="img/bikelife.png" alt="Logo BikeLife" id="logo" /></a>
    <nav>
        <ul>
            <a href='forum.php'><li>Les questions</li></a>
            <a href='publish-question.php'><li>Publier une question</li></a>
            <?php
            if(isset($_SESSION['auth'])){
            ?>
            <a href='my-questions.php'><li>Mes questions</li></a>
            <a href='profile.php?id=<?= $_SESSION['id']; ?>'><li class="co">Mon profil</li></a>
            <a href='actions/users/logoutAction.php'><li class="co">Déconnexion</li></a>
            <?php
          }
        ?>
        </ul>
    </nav>
</header>

