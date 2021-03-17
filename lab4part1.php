<?php
error_reporting(E_ALL);
const cef=1.60934;
$numOfDistances = rand(5,20);
$arrDistances= array();
for ($i = 0; $i < $numOfDistances; $i++){
    array_push($arrDistances, rand(1,100));
}
print_r($arrDistances);
array_multisort($arrDistances);
print_r($arrDistances);

$arrMiles = array();
$arrayCountValues = array_count_values($arrDistances);

// This doesn't improve the code but at least duplications can occur in the array.
$arr= array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","R","Q","S","T","U");
$a=0;
for ($i = 0; $i < $numOfDistances; $i++){
    $arrMiles[$i] = $arrDistances[$i]*cef;
    if ($arrayCountValues[$arrDistances[$i]] >= 2) {
	$arrDistances[$i] = $arrDistances[$i] . $arr[$a];
	$a++;
		}
	}


$arrMiles = array_combine($arrDistances, $arrMiles);
print_r($arrMiles);

printf("KM \t MILES \n");
foreach ($arrMiles as $key => $value){
$value = number_format($value,3,'.','');
printf("$key \t $value \n");
}
?>
