<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sudoku by Nishant</title>
</head>
<body>
    <table>
        <?php
            $i = 0;
            $j = 0;
            for($i = 0; $i < 9; $i++)
            {
                if($i == 2 || $i == 5)
                {
                    echo "<tr class='horizontal'>";
                }
                else {
                    echo "<tr>";
                }
                for($j = 0; $j < 9; $j++)
                {
                    $num = rand(1, 9);
                    if($j == 2 or $j == 5)
                    {
                        echo "<td class='vertical'>$num</td>";
                    }
                    else
                    {
                        echo "<td>$num</td>";
                    }
                    
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>