<?php


require 'database/QueryBuilder.php';

$db = new QueryBuilder();

//$tasks = $db->getAllTasks();

$tasks = $db->all("tasks");

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
            <h1>All task</h1>
            <a href="create.php" class="btn btn-success">Add task</a>
            <table class="table">
                <theard>
                    <tr>
                        <th>ID</th>
                        <th>Tittle</th>
                        <th>Action</th>
                    </tr>
                </theard>

                <tbody>
                <?php foreach ($tasks as $task):?>
                    <tr>
                        <td><?= $task['id'];?></td>
                        <td><?= $task['title'];?></td>
                        <td>
                            <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">Show</a>
                            <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('are you sure?')" href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>