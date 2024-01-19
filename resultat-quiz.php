<?php

require_once('utils/load_classes.php');

include('./partials/header.php');

?>
    <h3>Resultat :</h3>
    <p><?php echo $_SESSION['point'] ?> bonnes réponses sur <?php echo $_SESSION['total-number-question'] ?></p>
    <a href="./process/reset-quiz.php" class="btn btn-secondary">Nouveau Quiz !</a>


<?php

include('./partials/footer.php');

?>