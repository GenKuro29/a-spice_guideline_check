<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Guideline;

class Guideline_check extends Model
{
    protected $fillable = ['process_id', 'guideline_ref_id', 'guideline_result'];
    
    public function get_guideline_check($guideline_ref_id)
    {
        return Guideline::find($guideline_ref_id);
    }
    
    public function guideline()
    {
        return $this->hasOne(Guideline::class, 'id','guideline_ref_id');
    }
}




