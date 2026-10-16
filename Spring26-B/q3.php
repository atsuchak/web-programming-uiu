<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring 26-B MySql</title>
</head>
<body>
    
</body>
</html>


<?php
    $conn = new mysqli("127.0.0.1", "root", "", "uiu_bookshop");


    echo "<h2>Query 1</h2>";
    $query = "SELECT *
        FROM book_info
        WHERE Category = 'Programming'
        ORDER BY Price DESC";

    $store =  $conn->query($query);
    while($show = $store->fetch_assoc())
        echo $show["BookID"]. " ----- " .$show["BookTitle"]. " ----- ". $show["Author"]. " ----- " .$show["Category"]. " ----- ". $show["Price"]. " ----- " .$show["Stock"]. "<br>";


    echo "<h2>Query 2</h2>";
    $query = "SELECT BookTitle, Author, Price
        FROM book_info
        WHERE Price > 400 AND Category = 'Programming'";

    $store =  $conn->query($query);
    while($show = $store->fetch_assoc())
        echo $show["BookTitle"]. " ----- " .$show["Author"]. " ----- " .$show["Price"]. "<br>";


    echo "<h2>Query 3</h2>";
    $query = "SELECT Category, COUNT(BookID) as Total_book
        FROM book_info
        GROUP BY Category;";

    $store =  $conn->query($query);
    while($show = $store->fetch_assoc())
        echo $show["Category"]. " ----- " .$show["Total_book"]. "<br>";


    echo "<h2>Query 4</h2>";
    $query = "SELECT 'uiu_bookshop' as Shop_name, SUM(Price*Stock) as Total_net
        FROM book_info";

    $store =  $conn->query($query);
    while($show = $store->fetch_assoc())
        echo $show["Shop_name"]. " ----- " .$show["Total_net"]. "<br>";


    echo "<h2>Query 4</h2>";
    $query = "UPDATE book_info
        SET Price = Price*0.9
        WHERE Category = 'Language'";

    $store =  $conn->query($query);
    $query = "SELECT BookTitle, Price FROM book_info";
    $store =  $conn->query($query);
    while($show = $store->fetch_assoc())
        echo $show["BookTitle"]. " ----- " .$show["Price"]. "<br>";

?>