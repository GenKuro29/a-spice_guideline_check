<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bp_result extends Model
{
    protected $fillable = [
        'process_id',
        'bp_number',
        'bp_result',
    ];
    
    public function evidence()
        {
            return $this->hasMany(Evidence::class, 'bp_id');
        }
}
