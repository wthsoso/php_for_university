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
    <h2>6x5 Matrix</h2>
    <table>
        <?php
        
        $matrix = [];
        for ($row = 0; $row < 6; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 5; $col++) {
                $matrix[$row][$col] = $row + $col; 
                echo "<td>{$matrix[$row][$col]}</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
