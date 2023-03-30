<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php var_dump($_POST); ?>
    <pre>
<?php var_dump($_POST); ?>
</pre>
    <table>
        <tr>
            <?php foreach ($_POST as $name => $value) : ?>
                <td><?= $name; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($_POST as $name => $value) : ?>
                <td><?= $value ?></td>
            <?php endforeach; ?>
        </tr>
    </table>

    <table>
        <tr>
            <?php foreach ($_GET as $name => $value) : ?>
                <td><?= $name; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($_GET as $name => $value) : ?>
                <td><?= $value ?></td>
            <?php endforeach; ?>
        </tr>
    </table>

</body>

</html>