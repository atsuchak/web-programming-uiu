<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $conn = new mysqli("127.0.0.1", "root", "", "tourism", 3306);


    echo "<h3>Query 1</h3>";
    $query = "SELECT SpotName, Region, Rating
        FROM tourist_spot
        WHERE Rating > 4.5 OR SpotName LIKE '%Beach%'
        ORDER BY Rating DESC;";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["SpotName"]. " ----- ". $show["Region"]. " ----- ". $show["Rating"]. "<br>";
    }


    echo "<h3>Query 2</h3>";
    // $query = "UPDATE tourist_spot
    //     SET Rating = Rating + 0.2, EntryFee = EntryFee * 1.1
    //     WHERE Rating BETWEEN 4.0 AND 4.5 AND EntryFee > 0;";

    $store = $conn->query($query);
    $query = "SELECT * FROM tourist_spot;";
    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["SpotID"]. " ----- ". $show["SpotName"]. " ----- ". $show["Region"]. " ----- ". $show["Category"]. " ----- ". $show["Rating"]. " ----- ". $show["EntryFee"]. " ----- ". $show["VisitorsPerYear"]. "<br>";
    }


    echo "<h3>Query 3</h3>";
    $query = "SELECT Category, COUNT(SpotID) as Total_Spot, AVG(Rating) as Avg_rating, SUM(VisitorsPerYear) as Total_vis
        FROM tourist_spot
        GROUP BY Category
        HAVING Avg_Rating > 4.4
        ORDER BY Avg_rating DESC;";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["Category"]. " ----- ". $show["Total_Spot"]. " ----- ". $show["Avg_rating"]. " ----- ". $show["Total_vis"]. "<br>";
    }


    echo "<h3>Query 4</h3>";
    $query = "SELECT Region, SUM(EntryFee * VisitorsPerYear) as Yearly_rev
        FROM tourist_spot
        GROUP BY Region
        HAVING Yearly_rev > 1000000
        ORDER BY Yearly_rev DESC;";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["Region"]. " ----- ". $show["Yearly_rev"]. "<br>";
    }

?>