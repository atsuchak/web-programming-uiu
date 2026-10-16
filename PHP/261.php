<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>261 PHP</title>
</head>
<body>
    <form action="" method="POST">
        Credits/Course: <input type="text" name="input1"><br><br>
        Courses Completed: <input type="text" name="input2"><br><br>
        Target: <input type="text" name="input3"><br><br>

        <button name="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST["submit"])) {
            $creditPerCourse = (int)$_POST["input1"];
            $courseComplete = (int)$_POST["input2"];
            $targetCredits = (int)$_POST["input3"];

            $totalCreadit = $creditPerCourse * $courseComplete;

            $progress = "";
            if($totalCreadit >= 120) $progress = "Excellent";
            else if($totalCreadit >= 90) $progress = "Good";
            else if($totalCreadit >= 60) $progress = "Average";
            else $progress = "Poor";

            $targetVal = "";
            if($totalCreadit > $targetCredits) $targetVal = "Above target by ". $totalCreadit - $targetCredits;
            else if($totalCreadit < $targetCredits) $targetVal = "Below target by ". $targetCredits - $totalCreadit;
            else $targetVal = "Target met exactly (0 difference)";

            echo "<h3>Total Credits: $totalCreadit</h3>";
            echo "<h3>Progress: $progress</h3>";
            echo "<h3>Result: $targetVal</h3>";
        }
    ?>
</body>
</html>