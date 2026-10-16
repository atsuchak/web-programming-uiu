<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>253 Mysql</title>
</head>
<body>
    
</body>
</html>

<?php
    $conn = new mysqli("127.0.0.1", "root", "", "campus_library", 3306);

    echo "<h3>Query 1</h3>";
    $query = "SELECT Status, COUNT(BookTitle) as Total_book
        FROM book_loans
        GROUP BY Status
        HAVING Total_book > 1;";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["Status"]." ----- ".$show["Total_book"]."<br>";
    }


    echo "<h3>Query 2</h3>";
    $query = "UPDATE book_loans
        SET Status = 'Grace Period', PenaltyFee = 0
        WHERE Status = 'Overdue' AND DaysOverdue < 7;";

    $store = $conn->query($query);
    $query = "SELECT * FROM book_loans;";
    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["LoanID"]." ----- ".$show["StudentName"]. " ----- ". $show["BookTitle"]." ----- ".$show["DaysOverdue"]. " ----- ". $show["PenaltyFee"]." ----- ".$show["Status"]."<br>";
    }


    echo "<h3>Query 3</h3>";
    $query = "UPDATE book_loans
        SET PenaltyFee = PenaltyFee*1.1
        WHERE PenaltyFee > 20 AND PenaltyFee*1.1 <= 50;";

    $store = $conn->query($query);
    $query = "SELECT * FROM book_loans;";
    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["LoanID"]." ----- ".$show["StudentName"]. " ----- ". $show["BookTitle"]." ----- ".$show["DaysOverdue"]. " ----- ". $show["PenaltyFee"]." ----- ".$show["Status"]."<br>";
    }


    echo "<h3>Query 4</h3>";
    $query = "SELECT BookTitle, SUM(PenaltyFee) as Fee_collected
        FROM book_loans
        GROUP BY BookTitle
        ORDER BY Fee_collected DESC;";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["BookTitle"]." ----- ".$show["Fee_collected"]. "<br>";
    }
?>