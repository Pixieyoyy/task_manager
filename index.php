<?php
$appName = "Task Manager";
$taskTitle = "Вивчити основи PHP";
$taskTimeEstimate = 3;
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName ?></title>
</head>
<body>
    <header>
        <h1><?= $appName ?></h1>
    </header>
    <main>
        <h2>Список завдань</h2>
        <ul>
            <li><?= $taskTitle ?> (орієнтовний час: <?= $taskTimeEstimate ?> год.)</li>
        </ul>
    </main>
</body>
</html>