<?php
    if (!file_exists("tasks.json")) {
        file_put_contents("tasks.json", "[]");
    }

    $json = file_get_contents("tasks.json");
    $tasks = json_decode($json,true);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $task = trim($_POST["task"]);
        if($task != ""){
            $tasks[] = $task;
            file_put_contents("tasks.json",json_encode($tasks));
        }
        
    }

    header("location: index.php");
    exit();
?>