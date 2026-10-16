<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fall 25 MySql</title>
</head>
<body>
    
</body>
</html>


<?php
    $conn = new mysqli("127.0.0.1", "root", "", "campus_library");


    echo "<h2>Query 1</h2>";
    $query = "SELECT Status, COUNT(BookTitle) as Total_book
        FROM book_loans
        GROUP BY Status
        HAVING Total_book > 1";

    $store = $conn->query($query); 
    while($show = $store->fetch_assoc()) 
        echo $show["Status"]. " ----- ". $show["Total_book"]. "<br>";


    echo "<h2>Query 2</h2>";
    // $query = "UPDATE book_loans
    //     SET Status = 'Grace Period', PenaltyFee = 0
    //     WHERE Status = 'Overdue' AND DaysOverdue < 7";

    $store = $conn->query($query);
    $query = "SELECT * FROM book_loans"; 
    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) 
        echo $show["LoanID"]. " ----- ". $show["StudentName"]. " ----- ". $show["BookTitle"]. " ----- ". $show["DaysOverdue"]. " ----- ". $show["PenaltyFee"]. " ----- ". $show["Status"].  "<br>";
    
    
    echo "<h2>Query 3</h2>";
    // $query = "UPDATE book_loans
    //     SET PenaltyFee = PenaltyFee * 1.1
    //     WHERE PenaltyFee > 20 AND PenaltyFee*1.1 < 50";

    $store = $conn->query($query); 
    $query = "SELECT * FROM book_loans"; 
    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) 
        echo $show["LoanID"]. " ----- ". $show["StudentName"]. " ----- ". $show["BookTitle"]. " ----- ". $show["DaysOverdue"]. " ----- ". $show["PenaltyFee"]. " ----- ". $show["Status"].  "<br>";


    echo "<h2>Query 4</h2>";
    $query = "SELECT BookTitle, SUM(PenaltyFee) as Total_penalty
        FROM book_loans
        GROUP BY BookTitle
        ORDER BY Total_penalty DESC;";

    $store = $conn->query($query); 
    while($show = $store->fetch_assoc()) 
        echo $show["BookTitle"]. " ----- ". $show["Total_penalty"]. "<br>";

?>