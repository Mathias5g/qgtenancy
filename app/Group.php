<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = [
        'id', 'username', 'image', 'communications', 'paid', 'iduser'
    ];

    public function missions() {
        return $this->hasMany('Missoes');
    }

    public function userGroup(){
        return $this->belongsToMany(UserGroup::class, 'user_groups', 'idgroup', 'iduser');
    }
}
