<?php

namespace Gepard;

use Gepard\helpers\GepardHelpers;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Modules\Core\Entities\City;
use Modules\Core\Traits\HasPermissionsTrait;

class User extends Authenticatable
{
    use Notifiable;
    use HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

    public function getCity()
    {
        if(! $this->getAttribute('city_id'))
        {
            return null;
        }
        return $this->getAttribute('city');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getIp()
    {
        return Request::ip();
    }


}
