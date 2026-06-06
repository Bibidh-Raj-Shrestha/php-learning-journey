<?php
session_start();

if(!isset($_SESSION["tasks"])){
        $_SESSION["tasks"] = [];
    }

if($_SERVER["REQUEST_METHOD"]=="POST"){
        $task = $_POST["task"] ?? "";
        if($task == ""){
            $_SESSION["error"] = "Please insert a task";
        }
        else{
            $_SESSION["tasks"][] = $task;
        }
        
    }
header("Location: index.php");
exit();
?>