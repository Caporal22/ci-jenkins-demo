<?php

namespace App\Services;

class Calculadora
{
    public function sumar(int $a, int $b): int
    {
        return $a + $b;
    }

    public function esPar(int $numero): bool
    {
        return $numero % 2 === 0;
    }
}
