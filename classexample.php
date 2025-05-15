<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

//creating animal class with properties:color,category,legs,can_fly,can_swim
// class Animal{
//     public $color;
//     public $category;
//     public $legs;
//     public $can_fly;
//     public $can_swim;
// }

// $animalsInfo = new Animal();
// $animalsInfo->color = "Brows";
// $animalsInfo->category = "Mammal";
// $animalsInfo->legs = "4";
// $animalsInfo->can_fly = "false";
// $animalsInfo->can_swim = "true";

// echo $animalsInfo->color . "<br>";
// echo $animalsInfo->category . "<br>";
// echo $animalsInfo->legs . "<br>";
// echo $animalsInfo->can_fly . "<br>";
// echo $animalsInfo->can_swim . "<br>";


// Using Constructor Function 

class Animal{
    public $color;
    public $category;
    public $legs;
    public $can_fly;
    public $can_swim;

    function __construct($color,$category,$legs,$can_fly,$can_swim){
        $this->color = $color;
        $this->category = $category;
        $this->legs = $legs;
        $this->can_fly = $can_fly;
        $this->can_swim = $can_swim;
    }
}

$AnimalInfo = new Animal("Brown","Mammal",2,"No","Yes");
echo $AnimalInfo->color . "<br>";
echo $AnimalInfo->category . "<br>";
echo $AnimalInfo->legs . "<br>";
echo $AnimalInfo->can_fly . "<br>";
echo $AnimalInfo->can_swim . "<br>";


?>
    
</body>
</html>