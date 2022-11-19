<?php
$horas =(int)readline();
$v_media =(int)readline();
$qdtekm=$horas*$v_media;
$qdtelitros=$qdtekm/12;
echo number_format($qdtelitros,3,"."," ")." \n";
?>