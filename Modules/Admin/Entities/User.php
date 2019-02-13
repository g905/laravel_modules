<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Gepard\User as BaseUser;

class User extends BaseUser
{
    //protected $fillable = [];

    public static function getOneById($id)
    {
        return self::where('id', $id)->firstOrFail();
    }
}
