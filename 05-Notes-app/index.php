<?php
    if (!file_exists("notes.json")) {
        file_put_contents("notes.json", "[]");
    }
    $json = file_get_contents("notes.json");
    $notes = json_decode($json,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>
    <form action="add.php" method="POST">
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">Content: </label>
        <input type="text" name="content" id="content">
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
            foreach($notes as $id => $note){
                echo date("F j, Y, g:i A") . "<br>";
                echo $note["title"] . "<br>";
                echo $note["content"] . "<br>";
                echo "<a href='delete.php?id=$id'>Delete</a>" . "<br><br>";
            }
        ?>
</body>
</html>