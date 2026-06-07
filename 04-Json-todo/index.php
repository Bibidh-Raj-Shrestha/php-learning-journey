<?php
    $json = file_get_contents("tasks.json");
    $tasks = json_decode($json,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="task">Task:</label>
        <input type="text" name="task" id="task">
        <input type="submit" value="Submit">
    </form>
    <p>Task:</p>
    <?php 
        foreach($tasks as $key => $task){
            echo $task . " ";
            echo "<a href='delete.php?id=$key'>delete</a> <br>";
        }
    ?>
</body>
</html>
