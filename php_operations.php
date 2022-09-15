<?php 

$array = [1,2,3,4,5,6,7,8,9,10];

for ($index = 0; $index <count($array); $index++) { 

    if($array[$index]%2 == 0){
        echo $array[$index] . ' is even';
    }else if($array[$index]%2 == 1){
        echo $array[$index] . ' is odd';
    }

    echo '<br>';
}

?>