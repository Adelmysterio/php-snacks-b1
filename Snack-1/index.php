<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        'casa' => 'Olimpia Milano',
        'ospiti' => 'Cantù',
        'puntiCasa' => 55,
        'puntiOspiti' => 66

    ],
    [
        'casa' => 'Monopoli',
        'ospiti' => 'Brindisi',
        'puntiCasa' => 77,
        'puntiOspiti' => 44

    ]
];

foreach ($partite as $partita) {
    foreach ($partita as $key => $value) {
        echo $value;
    }
} ?>