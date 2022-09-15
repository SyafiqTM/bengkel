<?php 

$families = [
    'adult' => array('john' , 'siti'),
    'children'=>[
        0 => ['amir','anuar','azman'], //lelaki
        1 => ['anusya', 'fatiha'] //perempuan
    ]
];

//associative array
$parent = $families['adult'];
$children = $families['children'];

echo 'My parents are : <br>';
foreach ($families['adult'] as $parent) {
         echo '<span style="color:blue">'.$parent.'</span>';
         echo '<br>';
}
echo '<br>';
echo 'All children are : ';
for ($i=0; $i < count($families['children']); $i++) { 
    for ($m=0; $m < count($families['children'][$i]); $m++) {
        echo '<br>'; 
        echo '<span style="color:brown">'.$families['children'][$i][$m].'</span>';
    }
}
?>