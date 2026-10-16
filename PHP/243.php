<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>243 PHP</title>
</head>
<body>
    <form action="" method="POST">
        Number of Student: <input type="text" name="input1"><br><br>
        Slices per Student: <input type="text" name="input2"><br><br>
        Slices per Pizza: <input type="text" name="input3"><br><br>

        <button name="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST["submit"])) {
            $studentNum = (int)$_POST["input1"];
            $slicePerStu = (int)$_POST["input2"];
            $pizzaSlice = (int)$_POST["input3"];

            $totalPizza = ceil(($studentNum * $slicePerStu)/$pizzaSlice);
            $sliceLeft = $totalPizza*$pizzaSlice - $studentNum*$slicePerStu;
            $wasteMoney = 1050/$pizzaSlice * $sliceLeft;

            echo "<h3>Total Pizzas: $totalPizza</h3>";
            echo "<h3>Leftover Slices: $sliceLeft</h3>";
            echo "<h3>Wasted Money(BDT): $wasteMoney</h3>";
        }
    ?>
</body>
</html>