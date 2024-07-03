<!-- Creiamo due classi, una per rappresentare un Utente ed una per l'utente PremiumUser. Aggiungiamo una classe Membership da passare nel costruttore della sottoclasse PremiumUser.
Cerchiamo di usare il piu' possibile getter e setter per accedere e modificare i dati. -->

<?php 
require_once __DIR__ . '/Classes/User.php';
require_once __DIR__ . '/Classes/PremiumUser.php';
require_once __DIR__ . '/Classes/Membership.php';

$adelmo = new PremiumUser('email.email.com', 'password1234',new Membership('Premium'));

var_dump($adelmo)
?>