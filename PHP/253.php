<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>253 PHP</title>
</head>
<body>
    <form action="" method="POST">
        Items Sold: <input type="text" name="input1"><br><br>
        Number of Day: <input type="text" name="input2"><br><br>
        Target: <input type="text" name="input3"><br><br>

        <button name="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST["submit"])) {
            $itemsSold = (int)$_POST["input1"];
            $numberOf = (int)$_POST["input2"];
            $target = (int)$_POST["input3"];

            $totalItemSold = $itemsSold * $numberOf;

            $performance = "";
            if($totalItemSold >= 500) $performance = "Excellent";
            else if($totalItemSold >= 300) $performance = "Good";
            else if($totalItemSold >= 150) $performance = "Average";
            else $performance = "Poor";

            $targetRes = "";

            if($totalItemSold > $target) {
                $res = $totalItemSold - $target; 
                $targetRes = "Above target by $res";
            }else if($totalItemSold < $target) {
                $res = $target - $totalItemSold;
                $targetRes = "Below target by $res";
            }else $targetRes = "Target met exactly 0";

            echo "<h3>Total Items: $totalItemSold</h3>";
            echo "<h3>Performance: $performance</h3>";
            echo "<h3>Result: $targetRes</h3>";
        }

    ?>
</body>
</html>