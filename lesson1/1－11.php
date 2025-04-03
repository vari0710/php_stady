<!doctype html>
<html lang= "jp">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width", "inutial-scale=1.0">
    <title>web</title>
</head>
<body>
    <?php
        class Human{
            private $height;
            private $weight;

            public function __construct($height, $weight){
                $this->height = $height;
                $this->weight = $weight;
            }

            public function bmi(){
                //m -> cm
                $height_bmi = $this->height / 100;

                $bmi = $this->weight / ($height_bmi * $height_bmi);

                return round($bmi, 2);
            }
        }
    ?>
</body>
</html>