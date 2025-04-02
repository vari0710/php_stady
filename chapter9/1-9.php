<!doctype html>
<html lang= "jp">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width", "inutial-scale=1.0">
    <title>web</title>
</head>
<body>
    <?php
        //brake文
        $arr = [12, 55, 65, 13, 45, -8, 90, 68, 77];

        $num = count($arr);

        $message = "含まれていません";

        for($i = 0; $i < $num; $i++){
            $value = $arr[$i];

            if($value < 0){
                echo $message;
                continue;
            }
            echo $i;
            echo "<br/>";
        }

        $sum = 0;

        for($i = 0; $i < $num; $i++){
            $value = $arr[$i];

            if($value % 2 === 0){
                continue;
            }
            $sum += $value;
        }
        echo $sum;

        //foreach文
        // foreach($連想配列 as $変数名)
        foreach($arr as $value){
            echo $value;
            echo "<br/>";
        }

        foreach($arr as $value){
            if($value < 0){
                $message = "含まれています";
                echo $message;
                echo "<br/>";
            }
        }

        $fruits = [
            "りんご" => 3,
            "イチゴ" => 4,
            "みかん" => 5
        ];

        foreach($fruits as $key => $value){
            echo "{$key}の個数は{$value}個です";
            echo "<br/>";
        }
    ?>
</body>
</html>