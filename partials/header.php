<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/process/reset-quiz.php">
                Quiz <?php 
                session_start();
                if(isset($_SESSION['quiz']) && !empty($_SESSION['quiz'])) {
                    echo $_SESSION['quiz']->getTheme();
                }
                ?>
            </a>
        </div>
    </nav>

    <div class="container mt-5">

        <main>