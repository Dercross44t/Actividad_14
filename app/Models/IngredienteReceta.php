<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class IngredienteReceta extends Pivot
{
    protected $table = 'ingredientesParaReceta';

    protected $fillable = [
        'receta_id',
        'ingrediente_id',
        'cantidad',
        'unidadDeMedida'
    ];

    public function receta()
    {
        return $this->belongsTo(Receta::class, 'receta_id');
    }

    public function ingrediente()
    {
        return $this->belongsTo(Ingrediente::class, 'ingrediente_id');
    }
}