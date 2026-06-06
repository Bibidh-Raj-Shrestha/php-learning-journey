<?php
    session_start();
    if(!isset($_SESSION["tasks"])){
        $_SESSION["tasks"] = [];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="task">Task: </label>
        <input type="text" name="task" id="task">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php 
    if(isset($_SESSION["error"])){
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
    }
    foreach($_SESSION["tasks"] as $t){
            echo $t . "<br>";
    }
?>