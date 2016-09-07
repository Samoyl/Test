<?php

$testCases = fgets(STDIN);

for ($i = 0; $i < $testCases; $i++) {
	$count = 0;
	$loopVisit = true;
	$text = str_split(fgets(STDIN));
	while ($loopVisit) {
		for ($s = 0; $s < sizeof($text)-2; $s++) {
			if ($s +2 < sizeof($text)-2 && $text[$s] == 'o' && $text[$s] == 'o' && $text[$s + 2] == '-') {
				$text[$s] = '-';
				$text[$s +1] = '-';
				$text[$s +2] = 'o';
				$count++;
			} else if ($s +2 < (sizeof($text)-2) && $text[$s] == '-' && $text[$s + 1] == 'o' && $text[$s + 2] == 'o') {
					$text[$s] = 'o';
					$text[$s +1] = '-';
					$text[$s +2] = '-';
					$count++;
				} else {
					for ($c = sizeof($text)-2; $c > 0; $c--) {
						if ($c - 2 > 0 && $text[$c] == 'o' && $text[$c - 1] == 'o' && $text[$c - 2] == '-') {
							$text[$c] = '-';
							$text[$c -1] = '-';
							$text[$c -2] = 'o';
							$count++;
						}
					}
				}
		}
		if($count == 0){
			$loopVisit = false;
			$count = 0;
		} else {
			$count = 0;
		}
	}
	print_r($text);
	for ($x = 0; $x < sizeof($text)-2; $x++){
		if($text[$s] == "o"){
			$count++;
		}
	}
	echo $count;
}
?>
