<?php
session_start();
if(!isset($_SESSION["tasks"])){
    header("Location: index.php");
    exit();
}
if(!isset($_GET["id"])){
    header("Location: index.php");
    exit();
}

$id = $_GET["id"];
if(!isset($_SESSION["tasks"][$id])){
    header("location: index.php");
    exit();
}

unset($_SESSION["tasks"][$id]);
$_SESSION["tasks"] = array_values($_SESSION["tasks"]);
header("location: index.php");
exit();
?>