<?php require('actions/users/signupAction.php'); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Inscription</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="assets/signup.css">
            <link rel="icon" type="image/x-icon" href="bikelife.png">
        </head>

        <body>
            <main class="conteneur">
                <section class="gauche">
                    <h1 class="titreg">Rebienvenue, Camarade ! </h1>
                    <p class="txtg">Si vous avez déjà un compte,</br> vous pouvez vous connecter</br> directement avec vos identifiants.</p>
                    <input type="submit" name="valider" value="Se connecter" onclick="redirigerVersLogin()" ></br>
                </section>

                <article class="droite">
                    <h1 class="titred">Créer un Compte</h1>
                    <p class="txtd">devient membre et rejoins-nous</p>
                    
                    <!-- Formulaire d'inscription -->
                    <form  method="POST">
                        <?php 
                        if(isset($errorMsg)){echo '<p>'. $errorMsg . '</p>';} ?>
                        <!-- Champs pour les détails de l'utilisateur -->
                        <input type="text" name="lastname" placeholder="Nom" ></br>
                        <input type="text" name="firstname" placeholder="Prénom" ></br>
                        <input type="text" name="pseudo" placeholder="Pseudo" ></br>
                        <input type="email" name="email" placeholder="Adresse email" ></br>
                        <input type="password" name="password" placeholder="Mot de passe" ></br>
                        <input type="submit" name="validate" value="S'inscrire">
                    </form>
                </article>
        </main>     
        
        <script>
            function redirigerVersLogin() {
                // Rediriger vers la page login.php
                window.location.href = "login.php";
            }
        </script>
    
        </body>
    </html>