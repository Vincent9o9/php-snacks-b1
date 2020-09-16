<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        'squadra1' => 'varese basket',
        'squadra2' => 'milano basket',
        'punteggio1' => '85',
        'punteggio2' => '101'
    ],
    [
        'squadra1' => 'firenze basket',
        'squadra2' => 'siena basket',
        'punteggio1' => '70',
        'punteggio2' => '45'
    ],
    [
        'squadra1' => 'roma basket',
        'squadra2' => 'asti basket',
        'punteggio1' => '95',
        'punteggio2' => '103'
    ],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>basket</title>
    </head>
    <body>
        <ul>
            <?php for($i = 0; $i < count($partite); $i++){ ?>
            <li>
                <h1>
                    <?php echo $partite[$i] ['squadra1'];?> - <?php echo $partite[$i] ['squadra2'];?>
                    | <?php echo $partite[$i] ['punteggio1'];?> - <?php echo $partite[$i] ['punteggio2'];?>
                </h1>
            </li>
        <?php } ?>
        </ul>
    </body>
</html>
