<?php
function main() {
	$n = 0.0;
	$tmp = 0;
	$i = 0;
	for ($i = 0; $i < 6; ++$i) {
		scanf("%lf",&$n);
		if (float64(0) < $n) {
			$tmp++
		}
	}
	printf("%i valores positivosn",$tmp);
	return 0;
}
?>