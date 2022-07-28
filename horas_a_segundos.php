<?php

$horas = readline("Ingresa las horas a convertir: ");
$segundos = (int)($horas * 3600);
$minutos = ($horas * 60);
echo "$horas horas $segundos segundos o también $minutos minutos";