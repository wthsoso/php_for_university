<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
</head>
<body>

<?php

function calculateGrade($receivedGrade) {
    if ($receivedGrade > 90) {
        return "A";
    } elseif ($receivedGrade > 80 && $receivedGrade <= 90) {
        return "B";
    } elseif ($receivedGrade > 70 && $receivedGrade <= 80) {
        return "C";
    } elseif ($receivedGrade > 60 && $receivedGrade <= 70) {
        return "D";
    } elseif ($receivedGrade > 50 && $receivedGrade <= 60) {
        return "E";
    } else {
        return "F";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST["student_name"];
    $studentSurname = $_POST["student_surname"];
    $course = $_POST["course"];
    $semester = $_POST["semester"];
    $studyCourse = $_POST["study_course"];
    $receivedGrade = $_POST["received_grade"];
    $correspondingGrade = calculateGrade($receivedGrade);

    
    echo "<h2>Student Information</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Student Name</td><td>$studentName</td></tr>";
    echo "<tr><td>Student Surname</td><td>$studentSurname</td></tr>";
    echo "<tr><td>Course</td><td>$course</td></tr>";
    echo "<tr><td>Semester</td><td>$semester</td></tr>";
    echo "<tr><td>Study Course</td><td>$studyCourse</td></tr>";
    echo "<tr><td>Received Grade</td><td>$receivedGrade</td></tr>";
    echo "<tr><td>Corresponding Grade</td><td>$correspondingGrade</td></tr>";
    echo "</table>";
}
?>

<h2>Student Information Form</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="student_name">Student's Name:</label>
    <input type="text" name="student_name" required><br><br>

    <label for="student_surname">Student's Surname:</label>
    <input type="text" name="student_surname" required><br><br>

    <label for="course">Course:</label>
    <input type="text" name="course" required><br><br>

    <label for="semester">Semester:</label>
    <input type="text" name="semester" required><br><br>

    <label for="study_course">Study Course:</label>
    <input type="text" name="study_course" required><br><br>

    <label for="received_grade">Received Grade:</label>
    <input type="text" name="received_grade" required><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
