<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <Title>PHP Assignment 2</Title>

</head>

<body>

<h1> Task List </h1>
    <ul>
        <?php foreach ($tasks as $task) : ?> 
            <?php foreach ($task as $key => $val) : ?>
            <ul><strong><?= ucwords($key); ?>: </strong> <?= $val; ?></ul>
            <?php endforeach?>
        <?php endforeach?>
    </ul>
    
</body>

</html>