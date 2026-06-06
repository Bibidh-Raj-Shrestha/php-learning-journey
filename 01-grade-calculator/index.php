<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade calculator</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
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

        if(empty($eng) || empty($nep) || empty($com) || empty($com) || empty($math) || empty($social)){
            echo"Input every field";
        }
        else{
            $sum = $eng + $nep + $com + $math + $social;
            $percentage = ($sum/500) * 100;

            echo"Total Marks: {$sum}/500<br>";
            echo"Percentage: {$percentage} <br>";
            switch($percentage){
                case $percentage>=90 && $percentage<=100:
                    echo"Grade: A+";
                    break;
                case $percentage>=80 && $percentage<=89:
                    echo"Grade: A";
                    break;
                case $percentage>=70 && $percentage<=79:
                    echo"Grade: B";
                    break;
                case $percentage>=60 && $percentage<=69:
                    echo"Grade: C";
                    break;
                case $percentage>=50 && $percentage<=59:
                    echo"Grade: D";
                    break;
                default:
                    echo"Grade : F";
            }
        }
    }
?>