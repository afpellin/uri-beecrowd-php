<?php
function main() {
	$i = 0;
	$X = 0;
	$howManyOdd = 6;
	scanf("%d",&$X);
	for ($i = $X; $i < $X + $howManyOdd * 2; 
	$i = $i + 2;) {
		$odd = 0;
		if ($i % 2 == 0) {
			$odd = $i + 1;
			printf("%d\n",$odd);
		} else {
			$odd = $i;
			printf("%d\n",$odd);
		}
	}
	return 0;
}
?>