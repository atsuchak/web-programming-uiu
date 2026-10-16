<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fall 25 PHP-1</title>
</head>
<body>
    <form method="POST">
        <label for="">CT 1: </label>
        <input type="text" name="input1"><br><br>
        <label for="">CT 2: </label>
        <input type="text" name="input2"><br><br>
        <label for="">CT 3: </label>
        <input type="text" name="input3"><br><br><br>

        <label for="">Midterm Marks: </label>
        <input type="text" name="input4"><br><br>
        <label for="">Final Marks: </label>
        <input type="text" name="input5"><br><br>

        <button name="submit">Calculate Total</button>
    </form>
</body>
</html>


<?php
    if(isset($_POST["submit"])) {
        $ct1 = (int)$_POST["input1"];
        $ct2 = (int)$_POST["input2"];
        $ct3 = (int)$_POST["input3"];
        $mid = (int)$_POST["input4"];
        $final = (int)$_POST["input5"];

        $bestTwo = ($ct1+$ct2+$ct3) - min($ct1, $ct2, $ct3);
        $total = $bestTwo + $mid + $final;

        $status = "";
        $total > 54? $status = "Passed": $status = "Failed";

        echo "<h3>Best two CT's total: $bestTwo</h3>";
        echo "<h3>Midterm marks: $mid</h3>";
        echo "<h3>Final marks: $final</h3>";
        echo "<h3>Total Marks: $total</h3>";
        echo "<h3>Status: $status</h3>";
    }

?>