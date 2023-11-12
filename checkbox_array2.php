<html>
<head>
    <title>Personality</title>
</head>
<body>
<?php
if (!is_array($_GET['attributes'])) {
    $_GET['attributes'] = array();
}

// create HTML for identically named checkboxes
function makeCheckboxes($name, $query, $options)
{
    foreach ($options as $value => $label) {
        $checked = in_array($value, $query) ? "checked" : "";
        echo "<input type=\"checkbox\" name=\"{$name}[]\" value=\"{$value}\" {$checked} />";
        echo "{$label}<br />\n";
    }
}

// the list of values and labels for the checkboxes
$personalityAttributes = array(
    'perky' => "Perky",
    'morose' => "Morose",
    'thinking' => "Thinking",
    'feeling' => "Feeling",
    'thrifty' => "Spend-thrift",
    'shopper' => "Shopper"
);
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
    Select your personality attributes:<br />
    <?php makeCheckboxes('attributes', $_GET['attributes'], $personalityAttributes); ?><br />
    <input type="submit" name="s" value="Record my personality!" />
</form>

<?php
if (array_key_exists('s', $_GET)) {
    $description = join(' ', $_GET['attributes']);
    echo "You have a {$description} personality.";
}
?>
</body>
</html>