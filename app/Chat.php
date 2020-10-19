<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Chat extends Model
{
    protected $guarded = [];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
