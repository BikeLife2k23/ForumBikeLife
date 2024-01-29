<?php 
    session_start(); 
    require('actions/users/showOneUsersProfileAction.php');   
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="user-info-container">
    <?php 
        if(isset($errorMsg)){ 
            echo '<p class="error-message">' . $errorMsg . '</p>'; 
        }

        if(isset($getHisQuestions)){
            ?>
            <div class="user-info-card">
                <div class="user-info-body">
                    <h4 class="user-info-username">@<?= $user_pseudo; ?></h4>
                    <hr>
                    <p class="user-info-fullname"><?= $user_lastname . ' ' . $user_firstname; ?></p>
                </div>
            </div>
            <br>
            <?php
            while($question = $getHisQuestions->fetch()){ 
                ?>
                <div class="question-card">
                    <div class="question-header">
                        <?= $question['titre']; ?>
                    </div>
                    <div class="question-body">
                        <?= $question['description']; ?>
                    </div>
                    <div class="question-footer">
                        Par <?= $question['pseudo_auteur']; ?> le <?= $question['date_publication'];  ?>
                    </div>
                </div>
                <br>
                <?php
            }
        }
    ?>  
    </div>

<?php require('includes/footer.php');?>
</body>
</html>