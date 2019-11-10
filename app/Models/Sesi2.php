<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi2 extends Model
{
    public $table = 'sesi2';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
