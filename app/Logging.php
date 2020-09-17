<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Logging extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'loggings';

    protected $fillable = [
        'id_user', 'metode', 'keterangan'
    ];
}
