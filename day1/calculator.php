<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function showtable($num)
      {
        for ($i=1; $i <=10; $i++) { 
            # code...
            echo "$num * $i = ".($num*$i)."<br>";
        }
      }

      function factorial($num)
      {
        $fact=1;

        for ($i=1; $i <=$num; $i++) { 
            # code...
            $fact = $i*$fact;
        }
         return $fact;
      }
    
    $a = $_GET["num1"];
    $b = $_GET["num2"];
    $c = $_GET["btn"];

    if($c=="add"){
        echo "Addition: ".($a + $b);
    }
    elseif ($c=="sub") {
        # code...
        echo "Substraction: ".($a - $b);
    }
    elseif ($c=="div") {
        # code...
        echo "Division: ".($a / $b);
    }
    elseif ($c=="mul") {
        # code...
        echo "Multiplication: ".($a * $b);
    }
    elseif ($c=="table") {
        # code...
	    showTable($a);
    }
    elseif ($c=="fact") {
        # code...
        
	    $f = factorial($a);
	    echo "Factorial: ".$f;
    } 

    // switch ($c) {
    //     case "add":
    //         echo "Addition: ".($a + $b);
    //         break;
    //     case "sub":
    //         echo "Substraction: ".($a - $b);
    //         break;
    //     case "div":
    //         echo "Division: ".($a / $b);
    //         break;
    //     case "mul":
    //         echo "Multiplicatioin: ".($a * $b);
    //         break;
    //     case "table":
    //         showtable($a);
    //         break;
    //     case "fact":
    //         $f = factorial($a);
    //         echo "Factorial: ".$f;                    
    //     default:
    //         echo "Invalid input"
    //         break;
    // }
       
    ?>
    
</body>
</html>