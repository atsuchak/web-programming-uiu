<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>251 PHP</title>
</head>
<body>
    <form action="" method="POST">
        Attendees: <input type="text" name="input1"><br><br>
        Cost per Person: <input type="text" name="input2"><br><br>
        Venue Capacity: <input type="text" name="input3"><br><br>

        <button name="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST["submit"])) {
            $attendees = (int)$_POST["input1"];
            $cost = (int)$_POST["input2"];
            $capacity = (int)$_POST["input3"];

            $totalVenue = ceil($attendees / $capacity);
            $emptySeats = $totalVenue*$capacity - $attendees;
            $wasteMoney = $emptySeats*$cost;

            echo "<h3>Total Venues: $totalVenue</h3>";
            echo "<h3>Empty Seats: $emptySeats</h3>";
            echo "<h3>Wasted Money(BDT): $wasteMoney</h3>";
        }
    ?>
</body>
</html>