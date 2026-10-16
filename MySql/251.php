<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>251 PHP</title>
    <style>
        body {
            padding: 20px 100px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    $conn = mysqli_connect("127.0.0.1", "root", "", "uiutech_final", 3306);
    
    $query1 = "SELECT PerformanceRating, COUNT(EmployeeID) as Total_employee
        FROM employee_final
        GROUP BY PerformanceRating;";

    $store = $conn->query($query1);
    echo "<h3>Query 1</h3>";
    while($show = $store->fetch_assoc()) {
        echo $show["PerformanceRating"]. " ----- ". $show["Total_employee"]. "<br>";
    }
    
    $query2 = "UPDATE employee_final
        SET PerformanceRating = 'C'
        WHERE Salary < 40000 AND PerformanceRating != 'D';";

$query = "SELECT * FROM employee_final;";
$store = $conn->query($query);
echo "<h3>Query 2</h3>";
    while($show = $store->fetch_assoc()) {
        echo $show["EmployeeID"]. " ----- ". $show["EmployeeName"]. $show["DepartmentID"]. " ----- ". $show["DepartmentName"]. " ----- ". $show["Salary"]. " ----- ". $show["PerformanceRating"]. "<br>";
    }
    
    $query3 = "UPDATE employee_final
        SET Salary = Salary+5000
        WHERE Salary > 50000 AND Salary+5000 <= 60000;";

$query = "SELECT * FROM employee_final;";
$store = $conn->query($query);
echo "<h3>Query 3</h3>";
while($show = $store->fetch_assoc()) {
    echo $show["EmployeeID"]. " ----- ". $show["EmployeeName"]. $show["DepartmentID"]. " ----- ". $show["DepartmentName"]. " ----- ". $show["Salary"]. " ----- ". $show["PerformanceRating"]. "<br>";
    }
    
    $query4 = "SELECT DepartmentName, COUNT(EmployeeID) as Total_Employee
        FROM employee_final
        GROUP BY DepartmentName
        ORDER BY Total_Employee DESC;";

    $store = $conn->query($query4);
    echo "<h3>Query 4</h3>";
    while($show = $store->fetch_assoc()) {
        echo $show["DepartmentName"]. " ----- ". $show["Total_Employee"]. "<br>";
    }
?>