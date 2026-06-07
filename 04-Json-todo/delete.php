<?php
    if(!isset($_GET["id"])){
        header("location: index.php");
        exit();
    }
    
    $id = $_GET["id"];

    $json = file_get_contents("tasks.json");
    $tasks = json_decode($json,true);

    if(isset($tasks[$id])){
        unset($tasks[$id]);
        $tasks = array_values($tasks);
        file_put_contents("tasks.json",json_encode($tasks));
    }
    

    header("location: index.php");
    exit();
?>