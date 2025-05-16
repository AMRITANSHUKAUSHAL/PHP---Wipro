<?php
$arr = [
    1,
    "string",
    true,
    8,
    9,
    [
        [
            "title" => "Harryptter",
            "author" => "Jk Rollings",
            "Sales" => [1000, 12345, 20000]
        ],
        20, 60, 111, 20
    ]
];

echo $arr[5][2]; // This will print 60
echo $arr[5][0]["Sales"][2]; // This will print 20000

foreach ($arr[5][0]['Sales'] as $sale) {
    echo $sale;
}

$sales = $arr[5][0]['Sales'];
$total = array_sum($sales);
$count = count($sales);
$average = $total / $count;

echo "Average Sales: " . $average;
?>
