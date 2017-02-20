<?php

include('Calculating.php');
$arr = [0,1,2,3,4,5,6,7,8,9];

$gejala = [];

for ($i = 1; $i < 11; $i++) {
    if (isset($_POST['gejala-'. $i]) == true) {
        array_push($gejala, 1);
    } else {
        array_push($gejala, 0);
    }
}

$result = Calculating::simpleAlgorithm($gejala);

arsort($result);