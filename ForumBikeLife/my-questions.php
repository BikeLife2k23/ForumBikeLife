<?php 
    require('actions/users/securityAction.php');
    require('actions/questions/myQuestionsAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <div class="question-container">

<?php 
    while($question = $getAllMyQuestions->fetch()){
        ?>
        <div class="question-item">
            <h5 class="question-title">
                <a href="article.php?id=<?= $question['id']; ?>">
                    <?= $question['titre']; ?>
                </a>
            </h5>
            <div class="question-content">
                <p class="question-description">
                    <?= $question['description']; ?>
                </p>
                <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-access"> &#x25B6; Accéder à la question</a>
                <a href="edit-question.php?id=<?= $question['id']; ?>" class="btn btn-edit"> &#x1F4DD; Modifier la question</a>
                <a href="actions/questions/deleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-delete"> &#x1F5D1; Supprimer la question</a>
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