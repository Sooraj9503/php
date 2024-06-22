<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cars=array("BMW"=>5000000, "AUDI"=>6700000, "MERCEDESE"=>8900000);
    foreach($cars as $k=>$v){
        echo "$k---->$v<br>";
    }
    ?>
</body>
</html>