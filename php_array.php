<html>
<body>
<?php 

// //numeric array
// $arr = array(1,2,3);
// $arr_ = ['a','b'];

// $merge = array_merge($arr, $arr_);
// print_r($merge);

$associative = [
    'name'=> 'fatiha',
    'age' => '22'
];

// print_r($associative);

//khas untuk associative array
echo '<h3>Customer Information</h3>';
echo '<table>';
foreach ($associative as $key => $value) {
    echo '<tr>';
    echo '<td>'. $key . '</td>';
    echo '<td>'. $value . '</td>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>