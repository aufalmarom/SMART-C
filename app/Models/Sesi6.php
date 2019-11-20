<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi6 extends Model
{
    public $table = 'sesi6';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
