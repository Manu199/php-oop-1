<?php 
require_once __DIR__ . '/classMovie.php';
require_once  __DIR__ . '/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <!-- link BOOOTSRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- link CSS -->
    <link rel="stylesheet" href="style.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OOP</title>

</head>
<body>

    <main>

        <div class="container text-black">

            <div class="row mt-5">

                <?php foreach ($movies as $movie): ?>

                    <div class="col-4 mt-4">

                        <div class="card p-3">
    
                            <h1 class="text-center text-danger"><?= $movie->getTitle()?></h1>
                            <small class="fw-bold fs-5">Descrizione:</small>
                            <p><?= $movie->getDescription() ?></p>
                            <img src="<?= $movie->getImg_url() ?>" alt="immagine" class="img-fluid">
                            <span class="fw-bold fs-5">Cast: </span>
                            <ul class="list-unstyled">
                                <?php foreach ($movie->getCast() as $actor) :?>
                                    <li><?= $actor; ?></li>
                                <?php endforeach;?>
                            </ul>
                            <small class="fw-bold fs-5">Genere: </small>
                            <?php foreach ($movie->getGenre() as $genre) :?>
                                <span><?= $genre;?></span>
                            <?php endforeach;?>
    
                        </div>

                    </div>
                
                <?php endforeach;?>
            </div>
        </div>
    </main>

</body>
</html>