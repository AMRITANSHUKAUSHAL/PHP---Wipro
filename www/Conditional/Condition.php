<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
    <h1>Condition</h1>

    <?php

    // function marksDetails($name,$sub1,$sub2,$sub3){
    //     $total = $sub1 + $sub2 + $sub3;
    //     $percentage = ($total/300)*100;
    //     if($sub1>33 && $sub1>40){
    //         echo "Sub1 is pass <br>" . "$sub1" . "$name";
    //     }
    //     else if($sub2>33){
    //         echo "Sub2 is Pass";
    //     }
    //     else if(sub3>=total){
    //         echo "Sub3 is Pass";
    //     }

    // }

    // print marksDetails("Amritanshu","50","30","20");

     function marksDetails($name,$sub1,$sub2,$sub3,$sub4){

        $total = $sub1 + $sub2 + $sub3 + $sub4;
        $percentage = $total/4;

        if($sub1>33 && $sub2>33 && $sub3>33 && $sub4>33 && $percentage>40){
            echo "Naem of user " . "$name"."$total" . ".$percentage";
        }
        else{
            echo "Fail" . "$total" . "$percentage";
        }
     }

     marksDetails("Amritanshu",50,60,45,70);

    ?>

</body>
</html>