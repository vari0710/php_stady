<!doctype html>
<html lang= "jp">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width", "inutial-scale=1.0">
    <title>web</title>
</head>
<body>
    <?php
        //phpはクラスベースのオブジェクト指向プログラミング言語
        
        //クラス
        //クラスを書くときはデータと振る舞いを定義する。
        //アプリケーションでどのような振る舞いが必要なのか書いてみる

        //概念
        class Human{
            private $name;//クラスに定義したデータのことをプロパティという
            private $birthday;
            private $gender;

            public function __construct($name, $birthday, $gender){
                //__construct(アンダーバーを2つつける)　=　コンストラクタになる
                $this->name = $name;
                $this->birthday = $birthday;
                $this->gender = $gender;
            }


             //メソッド
            public function walk(){
                echo "{$this->name}は歩きます<br/>";
            }

            public function eat(){
                echo "食べます<br/>";
            }
        }
        

        //コンストラクタ
        $human = new Human("中平", "2003-07-10", "woman");
        
        //呼び出し方
        $human->eat();
        $human->walk();

       

    ?>
</body>
</html>