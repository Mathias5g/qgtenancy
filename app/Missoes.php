<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missoes extends Model
{

    protected $table = 'missoes';

    protected $fillable = [
        'title', 'image', 'description', 'slots', 'type',
        'start', 'groupid'
    ];

    public function groups() {
        return $this->hasOne('Group', 'id');
    }
}
