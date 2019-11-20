<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi7 extends Model
{
    public $table = 'sesi7';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
