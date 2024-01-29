<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <h2>Le Forum</h2>

    <div class="question-container1">
    
    <form method="GET" class="search-form">

        <div class="search-input">
            <input type="search" name="search" class="search-field" placeholder="Effectuez votre recherche">
        </div>
        <div class="search-button">
            <button class="search-submit btn btn-success" type="submit">Rechercher</button>
        </div>

    </form>

    <br>

    <?php 
        while($question = $getAllQuestions->fetch()){
            ?>
            <div class="question-card1">
                <div class="question-header1">
                    <a href="article.php?id=<?= $question['id']; ?>">
                        <?= $question['titre']; ?>
                    </a>
                </div>
                <div class="question-body1">
                    <?= $question['description']; ?>
                </div>
                <div class="question-footer1">
                    Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                </div>
            </div>
            <br>
            <?php
        }
    ?>

</div>

<?php require('includes/footer.php');?>
</body>
</html>