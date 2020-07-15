<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'username', 'image', 'communications', 'paid', 'iduser'
    ];

    public function missions() {
        return $this->hasMany('Missoes');
    }
}
