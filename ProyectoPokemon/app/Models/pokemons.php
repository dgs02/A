<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemons extends Model
{
    use HasFactory;
}


class Pokemon extends Model
{
    protected $fillable = ['name', 'type', 'subtype', 'region'];
}
