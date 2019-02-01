<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder();

$id = $_GET['id'];
//$task = $db->getTask($id);
$task = $db->getOne("tasks", $id);

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?= $task['title'];?></h1>
            <p>
                <?= $task['content'];?>
            </p>
            <a href="index.php">Go Back</a>
        </div>
    </div>
</div>
</body>
</html>