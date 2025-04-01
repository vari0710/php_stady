<!doctype html>
<html lang= "jp">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width", "inutial-scale=1.0">
    <title>web</title>
</head>
<body>
    <?php
        $hashira = [
            '水柱' => '富岡義勇'
        ];
        echo $hashira['水柱'];
        $hashira["水柱"] = "鱗滝左近寺";

        echo "<br/>";
        
        echo $hashira["水柱"];
    ?>
</body>
</html>