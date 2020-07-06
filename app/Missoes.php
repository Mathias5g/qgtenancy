<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missoes extends Model
{
    protected $fillable = [
        'nome', 'idade'
    ];
}
