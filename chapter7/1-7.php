<!doctype html>
<html lang= "jp">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width", "inutial-scale=1.0">
    <title>web</title>
</head>
<body>
    <?php
        $a = ["a", "i", "u", "e", "o"];

        //最後に追加される
        array_push($a, "あ");

        // 一つづつしか追加されない,処理が早い
        $a[] = "い";
        var_dump($a);

        //配列に配列をくっつけることができる,非破壊
        $b = ["ka","ki"];
        $merged = array_merge($a, $b);
        var_dump($merged);

        //配列の先頭に値を持ってくる
        array_unshift($a,"ka");
        var_dump($a);

        //先頭からとって消す
        $first = array_shift($a);
        var_dump($first);

        //末尾の値を返す
        $first = array_pop($a);
        var_dump($first);
    ?>
</body>
</html>