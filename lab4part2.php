<?php
include 'incl/phonics.php';
$myfile = fopen("data/text.txt", "r") or die("Unable to open file!");
$text = fread($myfile,filesize("data/text.txt"));

function phonicsCount() {
	global $text;
	global $vowels;
	$arr = array();
	for ($i=0; $i < count($vowels); $i++){
		$arr[$i] = substr_count(strtoupper($text),$vowels[$i]);
		}
	$arr = array_combine($vowels, $arr);
	print_r($arr);
}

echo "Phonics Count:";
echo "\n";
phonicsCount();

echo "\n";

//Regular expression to find characters "a to z", "A to Z", "0 to 9", "." , ","
function characterCount() {
	global $text;
	$text = preg_replace("/[^A-Za-z0-9.,]/","",$text);
	print(strlen($text));
}

echo "Character Count:";
characterCount();

echo "\n";

function count_lines()
{
	global $myfile;
	print(count(file("data/text.txt")));
}

echo "Lines Count:";
count_lines();

echo "\n";

?>
