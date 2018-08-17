<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $fillable = [
        'bp_id',
        'evidence_type',
        'evidence_comment',
        'evidence_document',
        ];
        

}
