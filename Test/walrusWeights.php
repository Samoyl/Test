<?php
$weights = array ();
$addList = array ();
$index = 0;
	
$distance = 0;
$distance2 = 0;
$idx = 0;
$idz = 0;
$input = fgets(STDIN);
while ($input-- > 0) {
	$weights[$index] = fgets(STDIN);
	$index++;
}
$index = 0;
for ($i = 0; $i < sizeof($weights); $i++) {
	$addList[$index] = $weights[$i];
	$index++;
	for ($x = ($i +1); $x < sizeof($weights); $x++) {
		$addList[$index] = ($weights[$i] + $weights[$x]);
		$index++;
		for ($s = ($x +1); $s < sizeof($weights); $s++) {
			$addList[$index] = ($weights[$i] + $weights[$x] + $weights[$s]);
			$index++;
			for ($y = ($s +1); $y < sizeof($weights); $y++) {
				$addList[$index] = ($weights[$i] + $weights[$x] + $weights[$s] + $weights[$y]);
				$index++;
			}
		}
	}
}
$distance = abs($addList[0] - 1000);
for ($c = 1; $c < sizeof($addList) ; $c++) {
	$cdistance = abs($addList[$c] - 1000);
	if ($cdistance < $distance) {
				$idx = $c;
				$distance = $cdistance;
			} else if ($cdistance == $distance) {
				$idz = $c;
				$distance = $distance2;
			}
	
}

if ($distance == $distance2 && $addList[$idz] > $addList[$idx]) {
			echo $addList[$idz];
		} else {
			echo $addList[$idx];
		}
?>
