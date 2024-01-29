<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
?>
 
<!DOCTYPE html>
<html lang="fr">

<?php require('includes/headAll.php'); ?>
 

<body>
   
    <?php require('includes/navbarAll.php'); ?>
    
        <h1>Bienvenue</h1>
        <div class="container">
        <p>PLONGEZ dans le monde <b>vibrant</b> de la passion de moto, où les</br> discussions <b>enflammées</b> prennent vie et où chaque virage vous</br>mène à une <b>expérience</b> virtuelle <b>unique</b>.</br></br>
        BIENVENUE sur notre <b>route commune</b>, où la <b>passion</b> pour les <b>deux roues</b> se rencontrent et s'expriment</p>
        </div>

    <div class="Forum">
        <img src="img/BikeClub.jpg" />
    </div>
    <section id="blocForum">
    <div id="titleForum"> <h1>Le FORUM</h1></div>
    <div id="presForum">
        
        <p>Au cœur de notre plateforme, découvrez notre espace forum vibrant et interactif.</br></br> Notre forum est l'endroit idéal pour :</br></br>
        <b>1. Partager vos expériences</br></br>2. Poser des questions et obtenir des réponses</br></br>3. Rencontrer d'autres passionnés</b></p>
    </div>
    </section>
    <div id="participation">
        <p><b>Comment participer</b> :</br></br> Rejoindre notre forum est simple : inscrivez-vous gratuitement, créez votre profil et plongez</br> dans les discussions ! N'hésitez pas à contribuer, poser des questions et partager votre</br> expertise pour enrichir notre communauté.</p>
    </div>
    <div id="blocCommunity">
        <a href="signup.php"><b>Rejoindre la communauté</b></a>
        
</div>
    
    <section id="blocBikeLife">
        <div id="gauche">
            <div id="titleBikeLife"><h1>BikeLifeCity</h1></div>
            <div id="presBikeLife">
            <p>Découvrez notre monde virtuel :</br></br> Imaginez-vous parcourant un territoire</br> spécialement créé pour les passionnés de moto,</br> où chaque coin a été pensé pour offrir une</br> immersion totale dans l'univers des deux-roues.</br>
                Notre monde virtuel vous propose :</br></br>
                <b>1. Exploration de lieux emblématiques</b> </br></br>
                <b>2. Interactions en temps réel</b></br></br>
                <b>3. Événements et rencontres</b></p>
            </div>
        </div>
        <article>
        <span><img src="img/BikeLifeCity.jpg" alt="BikeLifeCity" id="bikelifeImage" /></span>
    </article>

    </section>

    <div id="participation2">
        <p><b>Comment participer :</b></br></br>Rejoignez-nous dès aujourd'hui pour vivre une expérience inédite et rejoignez une</br> communauté unie dans un monde virtuel spécialement conçu pour les passionnés de moto !</p>
    </div>

    <?php require('includes/footer.php');?>
    
    

    
    

    
        

<script>
    $(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
        $('nav div').removeClass('visible-title');
    }
});
</script>


</body>

</html>

