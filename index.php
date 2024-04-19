<?php

require_once __DIR__  . '/models/Production.php';

$productions = [
    new Production('Avangers', 'en', '7'),
    new Production('Star Wars', 'en', '8')
];

//var_dump($productions);

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

            </div>

            <br>

            <?php endforeach ?>

        </div>
    </div>
</body>

</html>