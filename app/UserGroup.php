<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $fillable = [
        'id', 'iduser', 'idgroup'
    ];

    public function groups() {
        return $this->belongsTo('App\Group');
    }

    public function users() {
        return $this->belongsTo('App\User');
    }
}
