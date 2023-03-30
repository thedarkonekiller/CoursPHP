<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include('./functions.php'); ?>

    <main>
        <div class="flex">
            <?php for ($i=0; $i < 11; $i++): ?>
            <ul>
                <?php multiTable($i); ?>
            </ul>
            <?php endfor; ?>
        </div>
        <p class="green"><?php hello('Yohann','MOY'); ?></p>
        <h1><?php convFahrenheit(20); ?></h1>

        <p>
            Yohann comporte <?= strlen('Yohann'); ?> <?= mb_strtoupper('Caractères'); ?>, Florian comporte <?= strlen('Florian'); ?> Caractères
        </p>

        <?php
        $string = "il fait beau aujourd'hui";
        if (str_contains($string, 'beau')){
            echo "Oui il fait beau";
        } else {
            echo "Non il fait pas beau";
        }
        ?>
        <p><?= nbTest(4); ?></p>
        <p><?= hellor('flo','char'); ?></p>
        <p><?= convFahrenheitr(20); ?></p>
        <p><?= checkPair(2); ?></p>
        <p><?= checkPair(3); ?></p>
        <p><?= checkAdmin('admin'); ?></p>
        <p><?= checkAdmin('adm'); ?></p>

    </main>
</body>

</html>