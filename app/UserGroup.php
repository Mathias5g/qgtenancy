<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{

    protected $table = 'user_groups';

    protected $fillable = [
        'id', 'iduser', 'idgroup'
    ];

    public function group() {
        return $this->belongsTo(Group::class, 'iduser', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'idgroup', 'id');
    }
}
