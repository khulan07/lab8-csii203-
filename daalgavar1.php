<html>
<head>
    <title>Temperature Conversion</title>
</head>
<body>
    <?php
    $celsius = $_GET['celsius'];
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        Celsius temperature:
        <input type="text" name="celsius" value="<?php echo $celsius; ?>" /><br />
        <input type="submit" value="Convert to fahreheit!" />
    </form>
    <?php
    if (!is_null($celsius)) {
        $fahreheit = ($celsius * 1.8) +32 ;
        printf("%.2fF is %.2fC", $celsius, $fahreheit);
    }
    ?>
</body>
</html>