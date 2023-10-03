<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sheyvanili shedegebi</title>
</head>
<body>
    <h1>shedegi</h1>
    <table border="1">
    <tr>
        <th>saxeli</th>
        <th>gvari</th>
        <th>pozicia</th>
        <th>xelfasi</th>
        <th>xelze fuli</th>
    </tr>
    <tr>
        <th><?php  echo $_GET['saxeli'];?></th>
        <th><?php echo $_GET['gvari']?></th>
        <th><?php echo $_GET['pozicia']?></th>
        <th><?php echo $_GET['xelfasi']?></th>
        <th><?php
         if ($_GET['xelze_fuli'] == 'fixed') {
                    $sabolood = $_GET['xelfasi'] * 0.20;
                } else {
                    $percentage = ($_GET['percentage'] / 100);
                    $sabolood = $_GET['xelfasi'] * $percentage;
                }
                echo $_GET['xelfasi'] - $sabolood;?></th>
    </tr>
    </table>
</body>
</html>