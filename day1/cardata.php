<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $car=array("VOLVO", "BMW", "SANTRO", "CIVIC");
    $cnm=$_REQUEST["cname"];
    echo "You entered: ".$_REQUEST["cname"]."<br>";
    echo "You entered: ".$_GET["cname"]."<br>";
    
    $flag=1;
    foreach($car as $val){
        if($val==$cnm){
            $flag=0;
        echo "<h3>Car found</h3>";
        break;
        }
    }
    if($flag==1){
        echo "Car not found and added successfully <br>";

        #add new car in the array
        array_push($car, $cnm);
    }
    for($i=0;$i < count($car); $i++){
        echo $car[$i]."<br>";
    }
?>
    
</body>
</html>