<!-- Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


if (strlen($name) > 3 && strpos($email, '@')&& strpos($email, '.') && is_numeric($age)) {
   echo 'Accesso riuscito';
}
else {
    echo 'Accesso negato';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" method="get">
        <input type="text" name="name" id="name">
        <input type="email" name="email" id="email">
        <input type="text" name="age" id="age">
        <button type="submit">Invia</button>
    </form>
</body>

</html>