<?php 

//given array
$children = ['atila','afiqah','azira'];

//question 1
//loop and echo all numeric values
for ($i=0; $i<count($children); $i++)
{
    echo $children[$i];
    echo '<br>';
}

//associative array


$vegetables = [
    'a' => ['apple,orange'],
    'b' => ['guava, grape, watermelon']
];
//answer 1
foreach($vegetables['b'] as $key =>$values){
    echo $values;
}

//answer 2
foreach($vegetables as $key =>$values){
    if ($key == 'a') {
        echo 'Group A : <br>';
        for ($i=0; $i < count($values); $i++) { 
            echo $values[$i];
        }
    }
    else if ($key == 'b') {
        echo '<br>Group B : <br>';
        for ($i=0; $i < count($values); $i++) { 
            echo $values[$i];
        }
    }
}

?>