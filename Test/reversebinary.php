<?php
	$input = fgets(STDIN);
	$decBin = decbin($input);
	$reversBin = strrev($decBin);
	$binDec = bindec($reversBin);
	echo $binDec;	
?>
