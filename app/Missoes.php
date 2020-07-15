<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missoes extends Model
{
    protected $fillable = [
        'title', 'image', 'description', 'slots', 'type',
        'start', 'userid'
    ];

    public function groups() {
        return $this->hasOne('Group', 'id');
    }
}
