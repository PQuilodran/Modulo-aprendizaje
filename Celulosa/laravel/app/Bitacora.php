<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Bitacora extends Eloquent
{

    protected $connection ='mongodb';
    protected $collection ='bitacoras';
    protected $primarykey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
