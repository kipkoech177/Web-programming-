<!DOCTYPE html>
<html>
<head>
    <title>Calculate Student Percentage</title>
</head>
<body>
    <h2>Calculate Student Percentage</h2>
    <form method="POST" action="">
        <label for="subject1">Enter marks for Subject 1 (out of 100):</label><br>
        <input type="number" id="subject1" name="subject1" required><br><br>

        <label for="subject2">Enter marks for Subject 2 (out of 100):</label><br>
        <input type="number" id="subject2" name="subject2" required><br><br>

        <label for="subject3">Enter marks for Subject 3 (out of 100):</label><br>
        <input type="number" id="subject3" name="subject3" required><br><br>

        <label for="subject4">Enter marks for Subject 4 (out of 100):</label><br>
        <input type="number" id="subject4" name="subject4" required><br><br>

        <input type="submit" value="Calculate Percentage">
    </form>

    <?php
        $total_marks = 400;
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];
        $subject4 = $_POST['subject4'];

        $obtained_marks = $subject1 + $subject2 + $subject3 + $subject4;

        $percentage = ($obtained_marks * 100) / $total_marks;

        echo "<h3>Your Percentage:</h3>";
        echo "You have scored " . $percentage . "%.";
    ?>
</body>
</html>
