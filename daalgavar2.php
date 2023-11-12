<html>
<head>
    <title>Personality</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        Jimsnii ner :<br />
        <select name="attributes[]" multiple>
            <option value="alim">Alim</option>
            <option value="banana">Banana</option>
            <option value="kiwi">Kiwi</option>
            <option value="guzeelzgene">Guzeelzgene</option>
            <option value="tarvas">Tarvas</option>
        </select><br />
        <input type="submit" name="s" value="Listen deer darna uu!" />
    </form>

    <?php
    if (array_key_exists('s', $_GET)) {
        $description = join(' ', $_GET['attributes']);
        echo " Ene {$description} nertei jims baina.";
    }
    ?>
</body>
</html>