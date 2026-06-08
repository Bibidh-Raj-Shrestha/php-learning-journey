<?php

    if(!file_exists("notes.json")){
        file_put_contents("notes.json","[]");
    }
    $json = file_get_contents("notes.json");
    $notes = json_decode($json,true);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $task = trim($_POST["title"]);
        $content = trim($_POST["content"]);
        if($task != "" && $content != ""){
            $note = [
                "title" => $task,
                "content" => $content
            ];
            $notes[] = $note;
            file_put_contents("notes.json",json_encode($notes));
        }
    }

    header("location: index.php");
    exit();
?>