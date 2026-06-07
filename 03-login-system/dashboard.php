<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>DASHBOARD</h1>
    <?php
        echo "Welcome " . $_SESSION["user"];
    ?>
    <a href='logout.php'>logout</a>
</body>
</html>
