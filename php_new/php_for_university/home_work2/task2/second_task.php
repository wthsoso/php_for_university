<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin: 50px auto;
            padding: 20px;
            border: 1px solid red;
            width: 400px;
            background-color: green;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    
    if (isset($_POST['X'])) {
        $X = (int)$_POST['X'];

        
        $array = [];
        for ($i = 0; $i < 12; $i++) {
            $array[] = mt_rand(10, 100);
        }

       
        $lessThanX = 0;
        $greaterThanX = 0;

        
        foreach ($array as $element) {
            if ($element < $X) {
                $lessThanX++;
            } elseif ($element > $X) {
                $greaterThanX++;
            }
        }

        
        echo "<h2>Generated Array:</h2>";
        echo implode(', ', $array);
        echo "<h2>X:</h2>";
        echo $X;
        echo "<h2>Elements Less Than X:</h2>";
        echo $lessThanX;
        echo "<h2>Elements Greater Than X:</h2>";
        echo $greaterThanX;
    } else {
       
        echo '<h2>Enter X:</h2>
        <form method="POST" action="">
            <input type="number" name="X">
            <input type="submit" value="Submit">
        </form>';
    }
    ?>
</div>
</body>
</html>
