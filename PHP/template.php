<!DOCTYPE html>
<head>
    <title>PHP template</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="input1">
        <input type="text" name="input2">
        <input type="text" name="input3">

        <button name="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $input1 = (int)$_POST['input1'];
            $input2 = (int)$_POST['input2'];
            $input3 = (int)$_POST['input3'];

        }

    ?>
    
</body>
</html>