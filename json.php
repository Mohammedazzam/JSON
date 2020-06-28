<?php

// $json ='["Html","css"]';
// var_dump($json);
// echo '<br>';


// $phpArray = json_decode($json);
// var_dump($phpArray);

// echo '<br>';

// foreach($phpArray as $arr){
//     echo $arr . '<br>';
// }


$phpArray = array('Html','css');
var_dump($phpArray);

echo'<br>';

$json = json_encode($phpArray);
var_dump($json);