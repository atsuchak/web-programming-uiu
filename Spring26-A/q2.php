<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring 26-A PHP</title>
</head>
<body>
    <form method="POST">
        <label for="">Credits/Course:</label>
        <input type="text" name="input1"><br><br>

        <label for="">Completed Course:</label>
        <input type="text" name="input2"><br><br>
        
        <label for="">Target:</label>
        <input type="text" name="input3"><br><br>

        <button name="submit">Submit</button>
    </form>
</body>
</html>


<?php
    if(isset($_POST["submit"])) {
        $credit = (int)$_POST["input1"];
        $course = (int)$_POST["input2"];
        $target = (int)$_POST["input3"];

        $totalCredit = $credit*$course;

        $progress = "";
        if($totalCredit >= 120) $progress = "Excellent"; 
        else if($totalCredit >= 90) $progress = "Good"; 
        else if($totalCredit >= 60) $progress = "Average"; 
        else $progress = "Poor"; 

        $result = "";
        if($totalCredit > $target) $result = "Above target by ". $totalCredit - $target;
        else if($totalCredit < $target) $result = "Below target by ". $target - $totalCredit;
        else $result = "Target met exactly (0 difference)";

        echo "<h3>Total Credits: $totalCredit</h3>";
        echo "<h3>Progress: $progress</h3>";
        echo "<h3>Result: $result</h3>";
    }
?>