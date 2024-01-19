<?php

require_once('utils/load_classes.php');

include('./partials/header.php');

if(!$_SESSION['is-answer-given'] && empty($_SESSION['id-answer-given'])){
?>
    <h3>Question <?php echo $_SESSION['actual-question-index'] + 1 ?>/<?php echo $_SESSION['total-number-question'] ?></h3>
    <h2><?php echo $_SESSION['quiz']->getQuestions()[$_SESSION['actual-question-index']]->getIntitulé() ?></h2>
    <form action="./process/verify-answer.php" method="post">
        <?php
        foreach($_SESSION['quiz']->getQuestions()[$_SESSION['actual-question-index']]->getAnswers() as $answer){
        ?>    
            <input type="submit" class="btn btn-secondary" value="<?php echo $answer->getIntitulé() ?>" name="<?php echo $answer->getId() ?>">
        <?php
        }
        ?>

    </form>

<?php
} else {
?>
    <h3>Question <?php echo $_SESSION['actual-question-index'] + 1 ?>/<?php echo $_SESSION['total-number-question'] ?></h3>
    <h2><?php echo $_SESSION['quiz']->getQuestions()[$_SESSION['actual-question-index']]->getIntitulé() ?></h2>
    <?php
    foreach($_SESSION['quiz']->getQuestions()[$_SESSION['actual-question-index']]->getAnswers() as $answer) {
    ?>
        <?php
        if($answer->getIsCorrect()){
        ?>
            <div class="btn btn-success"><?php echo $answer->getIntitulé() ?></div>
        <?php
        } else {
            if(!$answer->getIsCorrect() && $_SESSION['id-answer-given'] === $answer->getId()) {
            ?>
                <div class="btn btn-danger"><?php echo $answer->getIntitulé() ?></div>
            <?php
            } else {
            ?>
                <div class="btn btn-secondary"><?php echo $answer->getIntitulé() ?></div>
        <?php
            }    
        }
        ?>
    <?php
    }
    ?>
    <p><?php echo $_SESSION['quiz']->getQuestions()[$_SESSION['actual-question-index']]->getExplication() ?></p>
    <?php
    if($_SESSION['actual-question-index'] + 1 <= $_SESSION['total-number-question'] -1){
    ?>
        <a href="./the-quiz.php">Prochaine Question !</a>
    <?php
    } else {
    ?>
    <p>Fin du quiz !</p>
    <a href="./resultat-quiz.php">Cliquez ici pour voir le résultat !</a>
<?php
    }

    $_SESSION['actual-question-index'] += 1;
    $_SESSION['is-answer-given'] = false;
    $_SESSION['id-answer-given'] = '';

}

include('./partials/footer.php');

?>