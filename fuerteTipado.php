<?php

function sumaEnteros(int ...$numeros): int {
    return array_sum($numeros);
}
echo sumaEnteros(1, 2, 3);
