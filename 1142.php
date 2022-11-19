<?php
function main() {
	$N = 0;
	$i = 0;
	$j = 0;
	scanf("%d",&$N);
	for ($i = 1; $i <= 4 * $N - 1; 
	$i = $i + 4;) {
		for ($j = $i; $j <= $i + 2; $j++) {
			printf("%d ",$j);
		}
		echo "PUM\n";
	}
	return 0;
}
?>