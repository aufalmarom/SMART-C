<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi8 extends Model
{
    public $table = 'sesi8';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
