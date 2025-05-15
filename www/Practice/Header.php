<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include "Home.php";
    include "Heading.php";
    include "footer.php";

    function calcSum($a,$b){
        echo "Sum is" . $a+$b;
    }

    $result = calcSum(10,20);
    
    
    ?>
    
</body>
</html>