<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $hidden = ['user_id'];
    protected $casts = ['status' => 'boolean'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('userOnly', function (Builder $builder) {
            $builder->whereUserId(auth()->id());
        });
        static::addGlobalScope('active', function (Builder $builder) {
            $builder->whereStatus(1);
        });
    }
}
