<!doctype html>
<html lang= "jp">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width", "inutial-scale=1.0">
    <title>web</title>
</head>
<body>
    <?php
        //関数とはデータを受け取って処理を行い、処理結果として別のデータを返すもののこと
        //ビルトイン関数（phpに元々ある）、ユーザー定義関数（プログラムを書く人が自由に書くことができる関数）

        // //ビルドイン関数
        $arr = [1, 2, 3];
        $x = count($arr);//ここが関数
        echo $x;

        // //絶対値
        $num = -12;
        $y = abs($num);
        echo $y;

        //ユーザー定義関数
        // function 関数名($引数1, $引数2){　　$引数1,：仮引数
        //     処理

        //     return 振り返り
        // }

        //呼び出すとき
        //関数名(具体的なデータ);

        function add($x, $y){
            $z = $x + $y;//ローカルスコープ
            return $z;
        }
        
        //ローカルスコープ、グローバルスコープがある
        //ローカルスコープ：関数の中

        //グローバルスコープ：ユーザー定義関数の外全体のこと

        $z = 0;

        //関数定義はどこにかいてもいいphpはいける
        $sum = add(15, 6);
        echo $z;

        //何も受け取らない関数=>引数がvoid,返り値がvoid (voidは空を返す)
        rand(void) : int //引数を省略
        rand(int $a, int $h) : void //返り値がない

        
    ?>
</body>
</html>