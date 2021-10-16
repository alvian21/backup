<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msanggota extends Model
{
    protected $table = "msanggota";
    public $timestamps = false;
    protected $primaryKey = "Kode";
    public $incrementing = false;
    protected $keyType = 'string';
}
