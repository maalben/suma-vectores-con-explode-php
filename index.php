<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Suma de valores de vector</title>
    </head>
<body>

    <?php 
    
        $vector = "180 719 996 432 169 321 246 28 703 1251 1256 137 786 1190 193 900 717 143 975 882 696 1193 395 1279 87 179 253 1036 933 427 309 1104 1137 1295 235 1296 316 471 24";
        $vector = explode(" ", $vector);
        $suma = 0;
        foreach($vector as $valores){
            $suma = $suma + $valores;
        }

        echo $suma;
    ?>

</body>
</html>