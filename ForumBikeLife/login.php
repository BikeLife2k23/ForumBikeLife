<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Inscription</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="assets/login.css">
            <link rel="icon" type="image/x-icon" href="bikelife.png">
        </head>

        <body>
            <main class="conteneur">
                

                <article class="droite">
                    <h1 class="titred">Se connecter</h1>
                    <p class="txtd">devient membre et rejoins-nous</p>
                    
                    <!-- Formulaire d'inscription -->
                    <form  method="POST">
                        <?php 
                        if(isset($errorMsg)){echo '<p>'. $errorMsg . '</p>';} ?>
                        <!-- Champs pour les détails de l'utilisateur -->
                        <input type="text" name="pseudo" placeholder="Pseudo" ></br>
                        <input type="password" name="password" placeholder="Mot de passe" ></br>
                        <input type="submit" name="validate" value="Se connecter">
                    </form>
                </article>
                <section class="gauche">
                    <h1 class="titreg">Rebienvenue, Camarade ! </h1>
                    <p class="txtg">Si vous avez déjà un compte,</br> vous pouvez vous connecter</br> directement avec vos identifiants.</p>
                    <input type="submit" name="valider" placeholder="VALIDER" onclick="redirigerVersSignup()"></br>
                </section>
                
        </main>
        
        <script>
            function redirigerVersSignup() {
                // Rediriger vers la page de conexion
                window.location.href = "signup.php";
            }
        </script>

        </body>
    </html>