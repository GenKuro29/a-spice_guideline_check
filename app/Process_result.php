<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process_result extends Model
{
    protected $fillable = [
        'project_id',
        'process_area_name',
        'process_result',
        'process_comment',
    ];
    
    public function bp_results()
        {
            return $this->hasMany(Bp_result::class, 'process_id');
        }
}
