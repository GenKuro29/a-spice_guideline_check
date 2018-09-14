<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bp_description extends Model
{
    protected $fillable = [
        'process_area_name',
        'bp_number',
        'bp_description',
    ];
}
