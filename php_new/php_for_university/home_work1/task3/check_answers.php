<!DOCTYPE html>
<html>
<head>
    <title>Student Check-in Program - Results</title>
</head>
<body>
    <h1>Student Check-in Program - Results</h1>

    <?php
    
    $correct_answers = [
        'q1' => 'A',
        'q2' => 'B',
        'q3' => 'D',
        'q4' => 'Jupiter',
        'q5' => 'William Shakespeare',
    ];

    
    $score = 0;

   
    foreach ($_POST as $key => $value) {
        if (isset($correct_answers[$key]) && $correct_answers[$key] === $value) {
            $score++;
        }
    }

    
    echo "<p>Your score: $score / 5</p>";
    ?>

</body>
</html>
