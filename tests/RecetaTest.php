<?php

namespace Tests\Unit;

use App\Models\Receta;
use PHPUnit\Framework\TestCase;

class RecetaTest extends TestCase
{
    public function test_instanciar_receta(): void
    {
        $receta = new Receta();

        $receta->titulo = "Arroz con pollo";
        $receta->numeroPorciones = 4;
        $receta->instrucciones = "Cocinar el arroz y el pollo";

        $this->assertEquals("Arroz con pollo", $receta->titulo);
        $this->assertEquals(4, $receta->numeroPorciones);
        $this->assertEquals(
            "Cocinar el arroz y el pollo",
            $receta->instrucciones
        );
    }
}