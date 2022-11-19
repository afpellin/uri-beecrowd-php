<?php
function main() {
	$x = 0;
	$y = 0;
	$i = 0;
	$z = 0;
	$l = 0;
	$m = 0;
	$n = 0;
	$cont = 0;
	$cont2 = 0;
	scanf("%d ",&$x);
	for ($i = 0; $i < $x; $i++) {
		scanf("%d %d",&$m,&$n);
		$cont = 0;
		if ($n < $m) {
			for ($l = $n + 1; $l < $m; $l++) {
				if ($l % 2 != 0) {
					$cont = $cont + $l;
				}
			}
			printf("%d\n",$cont);
		} else {
			for ($l = $m + 1; $l < $n; $l++) {
				if ($l % 2 != 0) {
					$cont2 = $cont2 + $l;
				}
			}
			printf("%d\n",$cont2);
		}
	}
}
?>