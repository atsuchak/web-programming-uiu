<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fall 25 PHP-2</title>
</head>
<body>
    <form method="POST">
        <label for="">Items Sold: </label>
        <input type="text" name="input1"><br><br>
        <label for="">Number of: </label>
        <input type="text" name="input2"><br><br>
        <label for="">Target: </label>
        <input type="text" name="input3"><br><br>

        <button name="submit">Submit</button>
    </form>
</body>
</html>


<?php
    if(isset($_POST["submit"])) {
        $item = (int)$_POST["input1"];
        $number = (int)$_POST["input2"];
        $target = (int)$_POST["input3"];

        $total = $item * $number;

        $performance = "";
        if($total >= 500) $performance = "Excellent";
        else if($total >= 300) $performance = "Good";
        else if($total >= 150) $performance = "Average";
        else $performance = "Poor";

        $result = "";
        if($total > $target) $result = "Above target by ". $total - $target;
        else if($total < $target) $result = "Below target by ". $target - $total;
        else $result = "Target met exactly (0 difference)";

        echo "<h3>Total Items: $total</h3>";
        echo "<h3>Performance: $performance</h3>";
        echo "<h3>Result: $result</h3>";
    }

?>