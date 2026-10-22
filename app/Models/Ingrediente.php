<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';

    protected $fillable = [
        'nombre'
    ];

    public function recetas()
    {
        return $this->belongsToMany(
            Receta::class,
            'ingredientesParaReceta',
            'ingrediente_id',
            'receta_id'
        )->withPivot('cantidad', 'unidadDeMedida');
    }
}