<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Traits\HasPermissionsTrait;

class Role extends Model
{
    protected $fillable = [];

    use HasPermissionsTrait;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}
