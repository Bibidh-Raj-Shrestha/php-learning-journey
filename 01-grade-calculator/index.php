<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade calculator</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="english">English:</label>
        <input type="number" name="english" id="english" min=0 max=100>
        <br>

        <label for="nepali">Nepali:</label>
        <input type="number" name="nepali" id="nepali" min=0 max=100>
        <br>

        <label for="computer">Computer:</label>
        <input type="number" name="computer" id="computer" min=0 max=100>
        <br>

        <label for="math">Math:</label>
        <input type="number" name="math" id="math" min=0 max=100>
        <br>
        
        <label for="social">Social:</label>
        <input type="number" name="social" id="social" min=0 max=100>
        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $eng = $_POST["english"];
        $nep = $_POST["nepali"];
        $com = $_POST["computer"];
        $math = $_POST["math"];
        $social = $_POST["social"];

        if ($_POST["english"] === "" || $_POST["nepali"] === "" || $_POST["computer"] === "" || $_POST["math"] === "" || $_POST["social"] === ""){
                echo"Input fields cannot be empty";
        }
        else{
            $sum = $eng + $nep + $com + $math + $social;
            $percentage = ($sum/500) * 100;

            echo"Total Marks: {$sum}/500<br>";
            echo"Percentage:" . round($percentage,2) . "<br>";
            if ($eng < 0 || $eng > 100 || $nep < 0 || $nep > 100 || $com < 0 || $com > 100 || $math < 0 || $math > 100 || $social < 0 || $social > 100){
                echo "Marks must be between 0 and 100";
            }
            if ($percentage >= 90) {
                echo "Grade : A+";
            }
            elseif ($percentage >= 80) {
                echo "Grade : A";
            }
            elseif ($percentage >= 70) {
                echo "Grade : B";
            }
            elseif ($percentage >= 60) {
                echo "Grade : C";
            }
            elseif ($percentage >= 50) {
                echo "Grade : D";
            }
            else {
                echo "Grade : F";
            }
        }
    }
?>