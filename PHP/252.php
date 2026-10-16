<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>252 PHP</title>
</head>
<body>
    <form action="" method="POST">
        Attendees: <input type="text" name="input1"><br><br>
        Seat Capacity: <input type="text" name="input2"><br><br>
        Ticket Price: <input type="text" name="input3"><br><br>

        <button name="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $atendees = (int)$_POST['input1'];
            $seatCapacity = (int)$_POST['input2'];
            $price = (int)$_POST['input3'];

            $totalScreen = ceil($atendees / $seatCapacity);
            $emptyScreen = $totalScreen*$seatCapacity - $atendees;
            $wasteMoney = $emptyScreen * $price;

            echo "<h4>Total Screen: $totalScreen</h4>";
            echo "<h4>Empty Seats: $emptyScreen</h4>";
            echo "<h4>Wasted Money: $wasteMoney</h4>";
        }

    ?>
</body>
</html>