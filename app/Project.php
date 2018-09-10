<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'prj_name',
        'prj_purpose',
        'assessed_organization',
        'assessment_date',
        'process_scope',
        'location',
        'assessor',
        'interviewed_person',
    ];
    
    public function process_results()
        {
            return $this->hasMany(Process_result::class)->orderBy('id','ASC');
        }

}
