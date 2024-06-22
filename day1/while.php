<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=4567;
    $s=0;

    #find the sum of digits of the number
    while($num>0){
        $d=$num%10;
        $num=$num/10;
        $s=$s+$d;
    }

    echo "addition of digits: $s<br>";
    ?>
</body>
</html>