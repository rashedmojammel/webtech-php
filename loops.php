<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <p>Loops </p>
    <form method="post">
        <p>Enter a number :</p>
        <input type="text" name="num">
        <input type="submit" value="Click">
    </form>
    <form method="post">
        <p>Enter a number :</p>
        <input type="text" name="num1">
        <input type="submit" value="Click">
    </form>
    <?php
    if (isset($_POST["num"])) {
        $num = (int) $_POST["num"];
        for ($i = 0; $i < $num; $i++) {
            echo "Student is goood" . ($i + 1) . "<br>";
            // break; 
            continue;
        }
    }
    if (isset($_POST["num1"])) {
        $num = (int) $_POST["num1"];
        $j = 1;
        do {
            echo "Value" . $j . "<br>";
            $j++;
        } while ($j < $num);
    }
    $fruits = ["Apple", "Banana", "Mango"];

    foreach ($fruits as $fruit) {
        echo "$fruit <br>";
    }
    ?>

</body>

</html>