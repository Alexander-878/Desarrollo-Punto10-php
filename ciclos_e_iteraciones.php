<?php

for ($i = 0; $i < 3; $i++) {
    echo $i; // muestra: 012
}

$numeros = [1, 2, 3];
foreach ($numeros as $num) {
    echo $num; // muestra: 123
}

$i = 0;
while ($i < 3) {
    echo $i++;
} // muestra: 012

do {
    echo $i++;
} while ($i < 5); // muestra: 34
