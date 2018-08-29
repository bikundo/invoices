<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $hidden = ['user_id'];
    protected $casts = ['status' => 'boolean'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
