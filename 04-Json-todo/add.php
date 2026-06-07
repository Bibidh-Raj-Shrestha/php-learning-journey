<?php
    $json = file_get_contents("tasks.json");
    $tasks = json_decode($json,true);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $task = $_POST["task"];
        $tasks[] = $task;
        file_put_contents("tasks.json",json_encode($tasks));
    }

    header("location: index.php");
    exit();
?>