<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi3 extends Model
{
    public $table = 'sesi3';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
