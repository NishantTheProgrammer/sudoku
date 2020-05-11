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

            $matrix= array(array());

            // $matrix = [
            //     [1, 2, 3, 4, 5, 6, 7, 8, 9],
            //     [1, 2, 5, 6, 5, 6, 7, 8, 9],
            //     [4, 4, 4, 4, 4, 4, 4, 4, 9],
            //     [1, 2, 3, 4, 3, 6, 7, 8, 9],
            //     [1, 2, 3, 6, 5, 6, 7, 8, 9],
            //     [1, 2, 3, 4, 5, 6, 7, 8, 9],
            //     [1, 2, 3, 3, 5, 6, 7, 6, 9],
            //     [1, 3, 3, 4, 5, 6, 7, 8, 9],
            //     [1, 2, 3, 4, 5, 3, 7, 8, 9]
            // ];
            for($i = 0; $i < 9; $i++)
            {
                for($j = 0; $j < 9; $j++)
                {
                    $matrix[$i][$j] = 0; // default value of every cell is 0
                }
            }

            $possible = [1, 2, 3, 4, 5, 6, 7, 8, 9];

            for($i = 0; $i < 9; $i++)
            {
                for($j = 0; $j < 9; $j++)
                {
                    $valid = getValid($i, $j, $possible);
                    
                    echo "$i, $j  =>";
                    foreach ($valid as $key) {
                        echo $key;
                    };
                    foreach($valid as$element)
                    {
                        $matrix[$i][$j] = $valid[array_rand($valid)];                        
                    }
                    echo "<br>";
                }
                echo "<br>";                
            }




            function getValid($x, $y, $possible)
            {
                $valid = 0;
                $valid = horizontal($x, $y, $possible);
                $valid = vertical($x, $y, $valid);

                return $valid;
            }
            function horizontal($x, $y, $possible)
            {
                global $matrix;
                
                $row = $matrix[$x];

                foreach($row as $value)
                {
                    foreach($possible as $key=>$pos)
                    {
                        if($value == $pos)
                        {
                            unset($possible[$key]);  
                        }
                        
                    }
                }
                 
                return $possible;
            }
            function vertical($x, $y, $possible)
            {              
                return $possible;
            }
            function blockWise()
            {
            }



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
                    
                    if($j == 2 or $j == 5)
                    {
                        echo "<td class='vertical'>" . $matrix[$i][$j] ."</td>";
                    }
                    else
                    {
                        echo "<td>" . $matrix[$i][$j] ."</td>";
                    }
                    
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>