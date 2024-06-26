<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-6</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section class="gray">
        <h2>Insegnanti</h2>
        <?php foreach ($db['teachers'] as $key => $teacher) {
            echo '<p>' . $teacher['name'] .' '. $teacher['lastname'] . '</p>';
        }
        ?>
    </section>
    <section class="green">
        <h2>PM</h2>
        <?php foreach ($db['pm'] as $key => $pm) {
            echo '<p>' . $pm['name'] .' '. $pm['lastname'] . '</p>';
        }
        ?>
    </section>
</body>

</html>