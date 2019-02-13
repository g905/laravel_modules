<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }
}
