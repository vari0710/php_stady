<!doctype html>
<html lang= "jp">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width", "inutial-scale=1.0">
    <title>web</title>
</head>
<body>
    <?php
        //1問目（hiというファンクションでhiと出力する）
        $g = hi();

        function hi(){
            echo "hi";
        }

        echo "<br/>"

        //2問目（2つの数値を受け取って大きいほうを返す）
        function my_max(int $a, int $b){
            if($a < $b){
                return $b;
            }else{
                return $a;
            }
        }

        $a = my_max(1200, 9684);
        echo $a; 
    ?>
</body>
</html>