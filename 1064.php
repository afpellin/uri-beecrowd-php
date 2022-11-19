<?php
function main() {
	$a = 0.0;
	$media = 0;
	$contm = 0;
	$i = 0;
	$cont = 0;
	for ($i = 0; $i < 6; $i++) {
		scanf("%f",&$a);
		if (float64(0) < float64($a)) {
			$cont++
			$contm = $contm + $a;
		}
	}
	$media = float64($contm) / float64($cont);
	printf("%d valores positivos\n",$cont);
	printf("%.1f\n",$media);
}
?>