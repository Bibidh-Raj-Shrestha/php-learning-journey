<?php
    if(!isset($_GET["id"])){
        header("location: index.php");
        exit();
    }

    $json = file_get_contents("notes.json");
    $notes = json_decode($json,true);

    $id = $_GET["id"];

    unset($notes[$id]);
    $notes = array_values($notes);
    file_put_contents("notes.json",json_encode($notes));

    header("location: index.php");
    exit();

?>
