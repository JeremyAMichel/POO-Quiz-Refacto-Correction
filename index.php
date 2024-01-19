<?php


require_once('utils/load_classes.php');
require_once('utils/database_connect.php');

$quizManager = new QuizManager($database);

$quizs = $quizManager->findAllQuiz();


include('./partials/header.php');

?>
    <h2>Chosissez le type de quiz auquel vous voulez répondre !</h2>

    <form action="./process/choice-quiz.php" method="post">
        <?php
        foreach($quizs as $quiz){
        ?>
            <input type="submit" class="btn btn-secondary" value="<?php echo $quiz->getTheme() ?>" name="<?php echo $quiz->getId() ?>">
        <?php
        }
        ?>

    </form>


<?php

include('./partials/footer.php');

?>