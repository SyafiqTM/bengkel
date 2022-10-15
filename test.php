<?php 

// $strng = htmlspecialchars(" <p>44/4</p>");
// $answer[0] = trim(preg_replace('/\s+/','', $strng));
// $json = json_encode($answer);
// var_dump($json);

$correct_choice = json_decode('{"2":"<p>Tanda Amaran<br><\/p>"}');
foreach ($correct_choice as $key => $choice) {
    $choice = strtolower($choice);
}
// var_dump($choice);
$score = 'A. Tanda Amaran';
// $score = trim(preg_replace('/\s+/','', $score));
// $score = trim(preg_replace('/\s+/','', $score));
$score = explode('.',$score,2);
$score = trim($score[1]);
$score = "<p>" . $score . "<br></p>";
// $json_score = json_encode($score);
$json = json_encode(htmlspecialchars($score));
var_dump($json);
if(trim($choice) == trim($score)){
    // print_r(1);
}else{
    // print_r(0);
}

?>