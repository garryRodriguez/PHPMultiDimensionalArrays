<?php
//using the strict mode (declare(strict_types=1)) -- this statement should in the first line
declare(strict_types=1);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Strict Keyword Example</title>
</head>
<body>
     <?php
        //sample declaration of a multi-dimensional array
        $cars = array(
            array("Volvo", 20, 15),
            array("Mitsubishi", 20, 12),
            array("Toyota", 10, 8),
            array("Audie", 5, 2)
        );
        //for loo for rows
        for($row = 0; $row < 4; $row++){
            echo "<p><b>Row Number $row</b></p>";
            echo "<ul>";
            //for loop for columns
            for($col = 0; $col < 3; $col++){
                    echo "<li>". $cars[$row][$col] . "</li>";
            }
            echo "</ul>";
        }
     ?>
</body>
</html>