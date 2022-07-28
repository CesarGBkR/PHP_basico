<?php
$horas = readline("Ingresa las horas a convertir: ");
$minutos = readline("Ingresa los minutos a convertir: ");
$segundos = readline("Ingresa los segundos a convertir: ");

$totalSegundos = ($horas * 3600) + ($minutos * 60) + $segundos; 

echo "La cantidad de segundos que hay en $horas horas es: $totalSegundos";