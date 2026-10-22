<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = 'recetas';

    protected $fillable = [
        'titulo',
        'numeroPorciones',
        'instrucciones'
    ];

    public function ingredientes()
    {
        return $this->belongsToMany(
            Ingrediente::class,
            'ingredientesParaReceta',
            'receta_id',
            'ingrediente_id'
        )->withPivot('cantidad', 'unidadDeMedida');
    }
}