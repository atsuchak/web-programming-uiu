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
    $conn = new mysqli("127.0.0.1", "root", "", "uiuweb_final", 3306);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error); 
    else echo "<h2>Database connected</h2>";
    
    $query1 = "SELECT LetterGrade, COUNT(StudentID) as Total_Student
        FROM student_final
        GROUP BY LetterGrade;"; 

    $store = $conn->query($query1);
    echo "<h3>Query 1</h3>";
    while($show = $store->fetch_assoc()) {
        echo $show["LetterGrade"] ." ----- ". $show["Total_Student"] . "<br>";
    }

    $query2 = "UPDATE student_final
        SET LetterGrade = 'C'
        WHERE Grade < 75 AND LetterGrade != 'D';";

    $query = "SELECT * FROM student_final;";
    $store = $conn->query($query);
    echo "<h3>Query 2</h3>";
    while($show = $store->fetch_assoc()) {
        echo $show["StudentID"] ." ----- ". $show["StudentName"]. " ----- ". $show["CourseID"] ." ----- ". $show["CourseTitle"]. " ----- ". $show["Grade"] ." ----- ". $show["LetterGrade"]. "<br>";
    }

    $query3 = "UPDATE student_final
        SET Grade = Grade + 5
        WHERE Grade > 80 AND Grade+5 <= 90;";

    $query = "SELECT * FROM student_final;";
    $store = $conn->query($query);
    echo "<h3>Query 3</h3>";
    while($show = $store->fetch_assoc()) {
        echo $show["StudentID"] ." ----- ". $show["StudentName"]. " ----- ". $show["CourseID"] ." ----- ". $show["CourseTitle"]. " ----- ". $show["Grade"] ." ----- ". $show["LetterGrade"]. "<br>";
    }

    $query4 = "SELECT CourseTitle, COUNT(StudentID) as Total_student
        FROM student_final
        GROUP BY CourseTitle
        ORDER BY Total_student DESC;";

    $store = $conn->query($query4);
    echo "<h3>Query 4</h3>";
    while($show = $store->fetch_assoc()) {
        echo $show["CourseTitle"]. " ----- ". $show["Total_student"] . "<br>";
    }

?>