<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable , HasRoles;

    Protected $guard_name ='api';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "address",
        "avatar",
        "bio",
        "city_id",
        "count_like",
        "count_product",
        "created_at",
        "email",
        "email_verified_at",
        "fax",
        "first_name",
        "gender",
        "id",
        "last_name",
        "latitude",
        "limit_insert_product",
        "longitude",
        "mobile",
        "password",
        "phone",
        "remember_token",
        "shop_expired_at",
        "shop_name",
        "status",
        "updated_at",
        "website"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
