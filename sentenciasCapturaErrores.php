<?php

try {
    if (rand(0, 1)) {
        throw new Exception("Ocurrió un error!");
    }
    echo "Todo bien!";
} catch (Exception $e) {
    echo "Excepción capturada: " . $e->getMessage();
}
