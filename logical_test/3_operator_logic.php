<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function pembagian($a,$b){
        $bagi = floor($a / $b);
        return $bagi;
    }
    $a = 7;
    $b = 2;
    $bagi1 = pembagian(7,2);
    $bagi2 = pembagian(8,4);
    echo "Pembagian 7 : 2 menghasilkan output " . $bagi1;
    echo "<br>";
    echo "Pembagian 8 : 4 menghasilkan output " . $bagi2;
    
    ?>
</body>
</html>