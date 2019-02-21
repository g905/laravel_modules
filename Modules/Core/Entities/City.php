<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [];

    public function user()
    {
        return $this->hasMany(\Gepard\User::class);
    }
}
