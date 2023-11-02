<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Form</title>
</head>
<body>
<?php
$nameErr = $surnameErr = $dobErr = $personalNumberErr = $addressErr = $mobileErr = "";

$name = $surname = $dob = $personalNumber = $address = $mobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "სახელი სავალდებულოა";
    } else {
        $name = test_input($_POST["name"]);
        if (strlen($name) < 2 || strlen($name) > 20) {
            $nameErr = "სახელი უნდა იყოს 2-დან 20 სიმბოლომდე";
        }
    }

    if (empty($_POST["surname"])) {
        $surnameErr = "გვარი სავალდებულოა";
    } else {
        $surname = test_input($_POST["surname"]);
        if (strlen($surname) < 3 || strlen($surname) > 50) {
            $surnameErr = "გვარი უნდა იყოს 3-დან 50 სიმბოლომდე";
        }
    }

    if (empty($_POST["dob"])) {
        $dobErr = "დაბადების თარიღი სავალდებულოა";
    } else {
        $dob = $_POST["dob"];
    }

    if (empty($_POST["personalNumber"])) {
        $personalNumberErr = "პირადი ნომერი სავალდებულოა";
    } else {
        $personalNumber = test_input($_POST["personalNumber"]);
        if (!preg_match("/^[0-9]{11}$/", $personalNumber)) {
            $personalNumberErr = "პირადი ნომერი უნდა იყოს 11 ციფრი";
        }
    }

    if (empty($_POST["address"])) {
        $addressErr = "";
    } else {
        $address = test_input($_POST["address"]);
        if (strlen($address) > 70) {
            $addressErr = "მისამართი უნდა იყოს 70 სიმბოლომდე";
        }
    }

    if (empty($_POST["mobile"])) {
        $mobileErr = "";
    } else {
        $mobile = test_input($_POST["mobile"]);
       
    }

    if (empty($nameErr) && empty($surnameErr) && empty($dobErr) && empty($personalNumberErr) && empty($addressErr) && empty($mobileErr)) {
      
        header("Location: action.php?name=$name&surname=$surname&dob=$dob&personalNumber=$personalNumber&address=$address&mobile=$mobile");
        exit();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>პიროვნების ინფორმაციის ფორმა</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    სახელი: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    გვარი: <input type="text" name="surname" value="<?php echo $surname;?>">
    <span class="error">* <?php echo $surnameErr;?></span>
    <br><br>
    დაბადების თარიღი: <input type="date" name="dob" value="<?php echo $dob;?>">
    <span class="error">* <?php echo $dobErr;?></span>
    <br><br>
    პირადი ნომერი: <input type="text" name="personalNumber" value="<?php echo $personalNumber;?>">
    <span class="error">* <?php echo $personalNumberErr;?></span>
    <br><br>
    მისამართი: <input type="text" name="address" value="<?php echo $address;?>">
    <span class="error"><?php echo $addressErr;?></span>
    <br><br>
    მობილური: <input type="text" name="mobile" value="<?php echo $mobile;?>">
    <span class="error"><?php echo $mobileErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="გაგზავნა">
</form>
</body>
</html>
