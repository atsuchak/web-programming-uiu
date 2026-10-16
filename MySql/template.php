<!-- 
    Steps:
        1. Connection build up
        2. Write query
        3. Store query
        4. Show using while loop
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP template</title>
</head>
<body>
    <?php
        $conn = new mysqli("127.0.0.1", "root", "", "db_name", 3306);

        $query1 = "write_query";
        $store1 = $conn->query($query1);

        while($show = $store1->fetch_assoc()) {
            echo "". $show["col_name"]. " ". $show["col_name"]. "<br>";
        }
    ?>
</body>
</html>


<!-- 
    SQL Query:
        1. SELECT "column_name", COUNT("column_name_as_per_count) as "write_a_name" FROM "table_name" GROUP BY "column_name_which_column_wise_want_to_group)
        2. UPDATE "table_name" SET "set_new_val_to_col" WHERE "write_condition"
        3. SELECT "col_name", count("col_name"), as "set_name" FROM "table_name" GROUP BY "col_name_which_sort" ORDER BY "col name" DESC;
-->