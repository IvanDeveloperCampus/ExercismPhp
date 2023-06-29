<?php


function distance(string $cadena1, string $cadena2): int
{
if (strlen($cadena1) !== strlen($cadena2)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $diferencia = 0;

    for ($i = 0; $i < strlen($cadena1); $i++) {
        if ($cadena1[$i] != $cadena2[$i]) {
            $diferencia++;
        }
    }

    return $diferencia;
}

?>