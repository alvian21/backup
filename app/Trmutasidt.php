<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trmutasidt extends Model
{
    protected $table = "trmutasidt";
    public $timestamps = false;

    protected $casts = [
        'LastUpdate' => 'datetime:Y-m-d H:00',
    ];
}
