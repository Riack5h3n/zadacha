<?php
$big_text = 'apple banana orange apple apple mandarin mandarin orange coder';
$count = preg_match_all("/[\w']+/", $big_text);
$text = $big_text;
$array = array();
for($i=1;$i<=$count;$i++){
	if($i == $count){
		$slovo = $text;
		$array[] .= $slovo;
	}else{
		$slovo = mb_strstr($text, ' ', true);
		$uzunlik = strlen($slovo)+1;
		$text = mb_substr($text, $uzunlik);
		$array[] .= $slovo;
	}
}

$myArray = [];
foreach ($array as $key => $value) {
    $myArray[$value][] = $key;
    unset($array[$key]);
}

foreach ($myArray as $key => $value) {
   $m_count = mb_substr_count($big_text, $key);
   echo $key." - ".$m_count."<br>";
}
?>
