<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    protected $fillable = [
        'type', 'devices_id',
    ];
}
