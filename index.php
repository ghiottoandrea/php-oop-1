<?php

require_once __DIR__  . '/models/Production.php';
require_once __DIR__  . '/models/Movie.php';
require_once __DIR__  . '/models/TVSerie.php';


$productions = [
    new Production('One Piece Red', 'jp', '9'),
    new Production('Ready Player One', 'en', '10'),

    new Movie('Avengers', 'en', '7', '1.5 md', '1h 43m'),
    new Movie('Jumanji', 'en', '9', '962 ml', '1h 59m'),

    new TVSerie('How I Met Your Mother', 'en', '10', '9'),
    new TVSerie('Big Bang Theory', 'en', '10', '12')

];

var_dump($productions);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Film production</h1>
        <div class="row">

            <?php foreach ($productions as $product) : ?>

            <div class="col-6">
                <div>
                    <span>Titolo: </span>
                    <strong> <?php echo $product->title ?>  </strong>
                </div>

                <div>
                    <span>Lingua: </span>
                    <span> <?= $product->language ?> </span>
                </div>

                <div>
                    <span>Voto: </span>
                    <span> <?= $product->vote ?> su 10 </span>
                </div>

                <div>
                    <span>Profitti: </span>
                    <span> <?= $product->profits ?> </span>
                </div>
                <div>
                    <span>Durata: </span>
                    <span> <?= $product->duration ?> </span>
                </div>
                <div>
                    <span>Stagioni: </span>
                    <span> <?= $product->numbSeasons ?> </span>
                </div>

            </div>

            <br>

            <?php endforeach ?>

        </div>
    </div>
</body>

</html>