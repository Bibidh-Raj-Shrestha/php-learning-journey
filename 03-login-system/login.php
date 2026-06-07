<?php
session_start();
$users = [
        "admin" => "1234",
        "user" => "1111"
    ];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $_username = $_POST["username"];
        $_password = $_POST["password"];

        if(isset($users[$_username]) && $users[$_username] == $_password){
            $_SESSION["user"] = $_username;
            header("location: dashboard.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    

?>