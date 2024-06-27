<?php require __DIR__ . '/animals.php';
$rettili = [];
$mammiferi = [];
$uccelli = [];
$pesci = [];

foreach ($animali as $key => $animale) {
   if ($animale['classe'] == 'Mammifero') {
    $mammiferi [] = $animale;
   }

   else if ($animale['classe'] == 'Rettile') {
    $rettili [] = $animale;
   }

   else if ($animale['classe'] == 'Uccello') {
    $uccelli [] = $animale;
   }

   else if ($animale['classe'] == 'Pesce') {
    $pesci [] = $animale;
   }
}

var_dump($rettili);
var_dump($mammiferi);
var_dump($uccelli);
var_dump($pesci);
?>