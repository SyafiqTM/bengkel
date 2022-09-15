<?php 

//given array
$children = ['atila','afiqah','azira'];

//children value count is 3
$i = 0;
while ($i < 100) {
    
    $i = addition($i);
    echo $i; echo '<br>';
}

$x = 4;
do {
    echo "The number is: $x <br>";
    $x = addition($x);
}while ($x <= 20);


//function add number
function addition($num){
    return $num + 10;
}
?>