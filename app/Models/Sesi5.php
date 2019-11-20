<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi5 extends Model
{
    public $table = 'sesi5';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
