<?php

$segundos = readline("Ingresa los segundos a convertir: ");

$horas = (int)($segundos / 3600);
$segundosOp = (int)($segundos % 3600);
$minutos = (int)($segundosOp / 60);
$segundosOp = (int)($segundosOp % 60);
echo "$segundos segundos son $horas horas con $minutos minutos y $segundosOp segundos";