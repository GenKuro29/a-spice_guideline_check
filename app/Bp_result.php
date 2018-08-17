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
    
    public function process_result()
    {
        return $this->belongsTo(Process_result::class);
    }
}
