<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" c ontent="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>