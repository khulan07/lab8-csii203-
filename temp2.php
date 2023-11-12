<html>
<head>
    <title>Temperature Conversion</title>
</head>
<body>
    <?php
    if (isset($_GET['fahrenheit'])) {
        $fahrenheit = $_GET['fahrenheit'];
    } else {
        $fahrenheit = null;
    }
    ?>
    <form method="GET" action="">
        <label for="fahrenheit">Enter Fahrenheit Temperature:</label>
        <input type="text" name="fahrenheit" />
        <input type="submit" value="Convert to Celsius!" />
    </form>
    <?php
    if (is_null($fahrenheit)) {
        // Handle the case where 'fahrenheit' is not set.
        echo "Please enter a Fahrenheit value.";
    } else {
        $celsius = ($fahrenheit - 32) * 5 / 9;
        printf("%.2fF is %.2fC", $fahrenheit, $celsius);
    }
    ?>
</body>
</html>

