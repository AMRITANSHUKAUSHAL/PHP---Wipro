<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function Practice</h1>

    <?php 
    
    function userDetails($name,$sub1,$sub2,$sub3){
    
        echo "Name of the user $name ";

        echo "Subject 1: $sub1";

        echo "Subject 2: $sub2 ";

        echo "Subject 3: $sub3";

        $total = $sub1+$sub2+$sub3;

        echo "Total Marks: $total";

       
    }
    
    userDetails("Amritanshu",85,99,40);

    ?>

</body>
</html>