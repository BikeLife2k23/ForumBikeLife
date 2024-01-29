<?php 
    require('actions/users/securityAction.php'); 
    require('actions/questions/publishQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <form class="question-form" method="POST">

<?php 
    if(isset($errorMsg)){ 
        echo '<p>'.$errorMsg.'</p>'; 
    } elseif(isset($successMsg)){ 
        echo '<p>'.$successMsg.'</p>'; 
    }
?>

        <div class="form-group">
            <label for="questionTitle" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" id="questionTitle" name="title">
        </div>
        <div class="form-group">
            <label for="questionDescription" class="form-label">Description de la question</label>
            <textarea class="form-control" id="questionDescription" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="questionContent" class="form-label">Contenu de la question</label>
            <textarea type="text" class="form-control" id="questionContent" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>
    </form>
    <?php require('includes/footer.php');?>
</body>
</html>