<?php

$matrix = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matrix[$i][$j] = mt_rand(10, 100);
    }
}


function sumOfDigits($number) {
    $sum = 0;
    while ($number != 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}


if (isset($_POST['X'])) {
    $X = (int)$_POST['X'];

    
    $multiples = [];
    $sum = 0;
    $product = 1;

    
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $value = $matrix[$i][$j];
            $sum += $value;
            $product *= $value;

            if ($value % $X === 0) {
                $multiples[] = $value;
            }
        }
    }

    
    $mean = $sum / 16;
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>4x4 Numeric Matrix</h2>
    <table>
        <?php
        
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 4; $j++) {
                echo "<td>{$matrix[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    
    <?php if (isset($_POST['X'])): ?>
        <h2>Matrix gamotvla</h2>
        <p>jeradebi X-is: <?= implode(', ', $multiples); ?></p>
        <p>matricis jami: <?= $sum; ?></p>
        <p>Product of matrix elements: <?= $product; ?></p>
        <p>sashvalo aritmetikuli: <?= $mean; ?></p>
        
        <h2>mtavari diagonali</h2>
        <p><?php for ($i = 0; $i < 4; $i++) echo $matrix[$i][$i] . " "; ?></p>
        
        <h2>jami</h2>
        <table>
            <?php
            for ($i = 0; $i < 4; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 4; $j++) {
                    echo "<td>" . sumOfDigits($matrix[$i][$j]) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    <?php endif; ?>

    <h2>sheiyvanet X:</h2>
    <form method="POST" action="">
        <input type="number" name="X">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
