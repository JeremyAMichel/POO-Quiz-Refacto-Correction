<?php

require_once('utils/load_classes.php');
include('./partials/header.php');

?>

    <p>Le quiz comporte <?php echo count($_SESSION['quiz']->getQuestions()) ?> questions !</p>
    <a href="/process/start-quiz.php">Commencer le quiz !</a>

<?php

include('./partials/footer.php');

?>