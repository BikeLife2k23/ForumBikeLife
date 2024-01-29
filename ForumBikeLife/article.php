<?php 
    session_start();
    require('actions/questions/showArticleContentAction.php'); 
    require('actions/questions/postAnswerAction.php');
    require('actions/questions/showAllAnswersOfQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="question-container">

    <?php 
        if(isset($errorMsg)){ echo $errorMsg; }


        if(isset($question_publication_date)){
            ?>
        <section class="question-details">
            <h3><?= $question_title; ?></h3>
            <hr>
            <p><?= $question_content; ?></p>
            <hr>
            <small><?= '<a href="profile.php?id='.$question_id_author.'">'.$question_pseudo_author . '</a> ' . $question_publication_date; ?></small>
        </section>
        <br>
        <section class="answer-section">

            <form class="answer-form" method="POST">
                <div class="form-group">
                    <label for="answer" class="answer-label">Réponse :</label>
                    <textarea name="answer" class="answer-field"></textarea>
                    <br>
                    <button class="submit-answer btn btn-primary" type="submit" name="validate">Répondre</button>
                </div>
            </form>

            <?php 
                while($answer = $getAllAnswersOfThisQuestion->fetch()){
                    ?>
                    <div class="answer-card card">
                        <div class="answer-card-header card-header">
                            <a href="profile.php?id=<?= $answer['id_auteur']; ?>">
                                <?= $answer['pseudo_auteur']; ?>
                            </a>
                        </div>
                        <div class="answer-card-body card-body">
                            <?= $answer['contenu']; ?>
                        </div>
                    </div>
                    <br>
                    <?php
                }
            ?>

        </section>

            
            <?php
        }
    ?>

</div>


</body>
</html>