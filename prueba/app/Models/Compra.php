<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
    ];

    public function pokemonsComprados()
    {
        return $this->hasMany(PokemonComprado::class);
    }
}
