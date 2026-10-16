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
    $conn = new mysqli("127.0.0.1", "root", "", "sundarban", 3306);

    echo "<h3>Query 1</h3>";
    $query = "SELECT CategoryID, SUM(Revenue) as Total_rev
        FROM sales_data
        GROUP BY CategoryID;";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["CategoryID"]. " ----- ". $show["Total_rev"]. "<br>";
    }
    

    echo "<h3>Query 2</h3>";
    $query = "UPDATE sales_data
        SET Revenue = Revenue + 5000
        WHERE Revenue < 40000 AND Revenue+5000 <= 30000;";

    $query = "UPDATE sales_data
        SET Category = 'Low Performing'
        WHERE Revenue < 40000";

    $query = "SELECT * FROM sales_data";
    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["SaleID"]. " ----- ". $show["ProductName"]. " ----- ". $show["CategoryID"]. " ----- ". $show["CategoryName"]. " ----- ". $show["Quantity"]. " ----- ". $show["Revenue"]. "<br>";
    }


    echo "<h3>Query 3</h3>";
    $query = "UPDATE sales_data
        SET Revenue = Revenue * 1.1
        WHERE Revenue > 70000;";

    $query = "SELECT * FROM sales_data";
    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["SaleID"]. " ----- ". $show["ProductName"]. " ----- ". $show["CategoryID"]. " ----- ". $show["CategoryName"]. " ----- ". $show["Quantity"]. " ----- ". $show["Revenue"]. "<br>";
        }
        

    echo "<h3>Query 4</h3>";
    $query = "SELECT CategoryName, SUM(Quantity) as Total_product
        FROM sales_data
        GROUP BY CategoryName;";

    $store = $conn->query($query);
    while($show = $store->fetch_assoc()) {
        echo $show["CategoryName"]. " ----- ". $show["Total_product"]. "<br>";
    }
?>