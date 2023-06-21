<?php

require __DIR__ . './models/Movie.php';

$film = [

    new Movie(
        'Uncharted',
        'Nathan Drake e il suo compagno di avventure Sully si lanciano in una pericolosa ricerca per trovare il più grande tesoro perduto, mentre seguono anche gli indizi che potrebbero portare al fratello di Nathan, scomparso da tempo',
        'Action',
        '2022'
    ),
    new Movie(
        'Il cavaliere oscuro',
        'Batman e Jim Gordon si alleano con il nuovo procuratore di Gotham City, Harvey Dent, per combattere il crimine organizzato che dilaga in città e fermare un pericoloso rapinatore, il Joker, che ha gettato la città nell anarchia.',
        'Action',
        '2008'
    )
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Movie</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Lista di Film</h1>
            <div class="col-12">
                <div class="row justify-content-start align-items-center">
                    <?php foreach ($film as $movie) { ?>
                        <div class="card my-3 mx-3" style="width: 18rem;">
                            <div class="card-header">
                                <?php echo "Titolo: " . $movie->title ?>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo "Genere: " . $movie->genre ?></li>
                                <li class="list-group-item"><?php echo "Trama: " . $movie->plot ?></li>
                                <li class="list-group-item"><?php echo "Anno di uscita: " . $movie->release ?></li>
                                <li class="list-group-item"><?php echo "Il film è di " . $movie->calcolaEtaFilm() . " anno/i fa" ?></li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


\