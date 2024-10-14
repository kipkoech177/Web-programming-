<!DOCTYPE html>
<html>

<head>
    <title>Temperature Conversion</title>
</head>

<body>
    <h2>Convert Centigrade to Fahrenheit</h2>
    <form method="POST" action="">
        <label for="centigrade">Enter Temperature in Centigrade:</label><br>
        <input type="number" id="centigrade" name="centigrade" required><br><br>
        <input type="submit" value="Convert">
    </form>


    <?php

    $centigrade = $_POST['centigrade'];
    $fahrenheit = ($centigrade * 9 / 5) + 32;
    echo "<h3>Temperature Conversion:</h3>";
    echo "$centigrade °C is equal to $fahrenheit °F.";
    ?>
</body>

</html>