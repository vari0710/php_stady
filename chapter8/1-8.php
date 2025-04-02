<!doctype html>
<html lang= "jp">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width", "inutial-scale=1.0">
    <title>web</title>
</head>
<body>
    <table border = "1">
    <?php
        //javaと書き方は一緒
        for($i = 0; $i < 10; $i++){
            echo "こんにちは";
            echo "<br/>";
        }
        //外なのに出る、気持ち悪い
        echo $i;

        for($i = 0; $i < 10; $i++){
            $count = (string) $i;

        //   ダブルクオーテーションの時だけ文字列に埋め込みをすることができる
            echo "{$count}こんにちは";
            echo "<br/>";
        }

        //九九
        for($i = 1; $i < 10; $i++){
            echo "<tr>";
            for($j = 1; $j < 10; $j++){
                $x = $i * $j;
                echo "<td>{$x}</td>";
            }
            echo "</tr>";
        }
        //trは縦、tdは横
        
    ?>
    </table>
</body>
</html>