<?php 
require_once __DIR__ . '/classMovie.php';
require_once  __DIR__ . '/db.php';

// $Schindlers_List = new Movie(
//     "Schindler's List",
//         "In Nazi-occupied Poland during World War II, Oskar Schindler becomes a factory owner who saves the lives of over a thousand Polish-Jewish refugees.",
//         "https://m.media-amazon.com/images/I/817sLmprCSL._AC_UF1000,1000_QL80_.jpg",
//         ["Liam Neeson", "Ralph Fiennes"],
//         ["Drama", "History"]
// );

// $Schindlers_List->addActor("Liam Neeson");

// $Schindlers_List->addActor("Ralph Fiennes");

// $Schindlers_List->removeActor("Ralph Fiennes");

// var_dump($Schindlers_List);

// die;

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
                            <div class="img"><img src="<?= $movie->getImg_url() ?>" alt="immagine" class="img-fluid"></div>
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