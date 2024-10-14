<!DOCTYPE html>
<html>
<head>
    <title>Calculate Total Days Lived</title>
</head>
<body>
    <h2>Calculate Total Days Lived</h2>
    <form method="POST" action="">
        <label for="age">Enter your age :</label><br>
        <input type="number" id="age" name="age" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
        $age = $_POST['age'];
        $number_of_days = $age * 365;

        echo "<h3>Total Number of Days You Have Lived:</h3>";
        echo "You have lived approximately " . $number_of_days . " days.";
    ?>
</body>
</html>
