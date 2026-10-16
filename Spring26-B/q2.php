<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring 26-B PHP</title>
</head>
<body>
    <form method="POST">
        <label for="">Mission Distance: </label>
        <input type="text" name="input1"><br><br>

        <label for="">Energy per Meter: </label>
        <input type="text" name="input2"><br><br>

        <label for="">Battery Capacity: </label>
        <input type="text" name="input3"><br><br>

        <button name="submit">Submit</button>
    </form>
</body>
</html>


<?php
    if(isset($_POST["submit"])) {
        $mission = (int)$_POST["input1"];
        $energyMeter = (int)$_POST["input2"];
        $batteryCapacity = (int)$_POST["input3"];

        $totalEnergy = $mission * $energyMeter;
        $batteryModules = ceil($totalEnergy/$batteryCapacity);
        $unusedEnergy = $batteryModules*$batteryCapacity - $totalEnergy;

        $status = "";
        if(($unusedEnergy/$totalEnergy)*100 <= 10) $status = "Efficient";
        else if(($unusedEnergy/$totalEnergy)*100 <= 25) $status = "Acceptable";
        else if(($unusedEnergy/$totalEnergy)*100 > 25) $status = "Wasteful";


        echo "<h2>Total Energy Required: $totalEnergy</h2>";
        echo "<h2>Battery Modules: $batteryModules</h2>";
        echo "<h2>Unused Energy: $unusedEnergy</h2>";
        echo "<h2>Status: $status</h2>";
    }

?>