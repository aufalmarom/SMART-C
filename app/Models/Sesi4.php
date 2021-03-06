<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi4 extends Model
{
    public $table = 'sesi4';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
