<?php

namespace Tests\Unit;

use App\Services\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function test_suma_dos_numeros_correctamente(): void
    {
        $calc = new Calculadora();
        $this->assertEquals(4, $calc->sumar(2, 2));
        $this->assertEquals(10, $calc->sumar(7, 3));
    }

    public function test_identifica_numeros_pares(): void
    {
        $calc = new Calculadora();
        $this->assertTrue($calc->esPar(10));
        $this->assertFalse($calc->esPar(7));
        $this->assertTrue($calc->esPar(0));
    }
}
