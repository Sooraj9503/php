<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$p = array("Lays" => 10, "Maggi" => 10, "Cadburry" => 100);
$pr = $_REQUEST["pr"];
$found = 0;
foreach($p as $k=>$v) { 
    if ($k==$pr) {
        $found=1;
        echo "Product $pr exists, Price of $k is $v";
    }
}
if($found==0){
    echo "Product $pr not found";
}
?>
</body>
</html>