<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Write for loop to get value between 1 and 50 that are divisible by 7 -->

    <?php 

    function Multiplicate(){
        for($i=1;$i<=50;$i++){
            if($i%7==0){
                echo "$i <br>";
            }
        }
    }

    Multiplicate();

    // for($i=1;$i<=50;$i++){
    //     if($i%7==0){
    //         echo "$i <br>" ;
    //     }
    // }
    
    ?>

</body>
</html>