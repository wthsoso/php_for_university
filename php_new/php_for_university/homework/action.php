<!DOCTYPE html>
<html>
<head>
    <title>Processed Information</title>
    <style>
        table {
            
            border: solid 1px;
        }
        th, td {
            border: 1px solid #dddddd;
        }
        th {
            background-color: aqua;
        }
    </style>
</head>
<body>

<h2>Processed Information</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $surname = $dob = $personalNumber = $address = $mobile = "";

    function test_output($data) {
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_GET["name"])) {
        $name = test_output($_GET["name"]);
    }
    if (isset($_GET["surname"])) {
        $surname = test_output($_GET["surname"]);
    }
    if (isset($_GET["dob"])) {
        $dob = test_output($_GET["dob"]);
    }
    if (isset($_GET["personalNumber"])) {
        $personalNumber = test_output($_GET["personalNumber"]);
    }
    if (isset($_GET["address"])) {
        $address = test_output($_GET["address"]);
    }
    if (isset($_GET["mobile"])) {
        $mobile = test_output($_GET["mobile"]);
    }

    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>სახელი</td><td>$name</td></tr>";
    echo "<tr><td>გვარი</td><td>$surname</td></tr>";
    echo "<tr><td>დაბადების თარიღი</td><td>$dob</td></tr>";
    echo "<tr><td>პირადი ნომერი</td><td>$personalNumber</td></tr>";
    echo "<tr><td>მისამართი</td><td>$address</td></tr>";
    echo "<tr><td>მობილური</td><td>$mobile</td></tr>";
    echo "</table>";
} else {
    echo "No data received";
}
?>

</body>
</html>
