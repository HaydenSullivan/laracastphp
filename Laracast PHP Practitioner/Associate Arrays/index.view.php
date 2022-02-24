<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Testing</h1>

    <ul>

        <?php foreach ($person as $key => $val) : ?>
            <li><strong><?= $key ?> </strong><?= $val;  ?></li>
        <?php endforeach; ?>

    </ul>



    <ul>

        <?php foreach ($task as $key => $val) : ?>
            <li><strong><?= $key ?> - </strong><?= $val;  ?></li>
        <?php endforeach; ?>

    </ul>

</body>

</html>