<?php 
$x = 'abc';
$type = gettype($x);

// if($x == 10 && $type != 'double'){
//     echo 'false';
// }else{
//     echo 'true';
// }

$name = 'anusya';
switch ($name) {
    case 'amir':
        echo $name .' type is male';
        break;
    case 'anusya':
        echo $name .' type  is female';
        break;
}
?>