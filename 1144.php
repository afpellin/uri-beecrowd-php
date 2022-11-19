<?php
function main() {
	$a = 0;
	$b = 0;
	$c = 0;
	$d = 0;
	$e = 0;
	$f = 0;
	scanf("%d",&$a);
	for ($b = 1; $b <= $a; $b++) {
		$c = $b * $b;
		$d = $b * $b * $b;
		printf("%d %d %d\n",$b,$c,$d);
		$e = $c + 1;
		$f = $d + 1;
		printf("%d %d %d\n",$b,$e,$f);
	}
	return 0;
}
?>