<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>Task for the Day</h1>

    <ul>

        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>


        <li>
            <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>


        <li>
            <strong>Responsible: </strong> <?= $task['assigned_to']; ?>
        </li>

        <li>
            <strong>Assigned: </strong>

            <?php if ($task['assigned']) : ?>

                <span class="icon">&#9989</span>

            <?php else : ?>

                <span class="icon">Unassigned</span>

            <?php endif; ?>
        </li>

        <li>
            <strong>Completed: </strong>

            <?php if ($task['completed']) : ?>

                <span class="icon">&#9989</span>

            <?php else : ?>

                <span class="icon">Incomplete</span>

            <?php endif; ?>
        </li>

    </ul>

</body>

</html>